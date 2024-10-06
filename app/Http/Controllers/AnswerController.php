<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chinese;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function checkAnswer(Request $request)
    {

        $mode = session('mode');
        $errors = [];
        $word = Chinese::where('id', $request->input('id'))
            ->where('user_id', Auth::id())
            ->firstOrFail();
        
        if ($word->nextreview_at > now()) {
            return redirect()->route('chinese');
        }

        $question_type = $word->question_type;
        if ($question_type === 'normal') {
            if ($mode === 'divide') {
                $request->validate([
                    'yoursisheng' => 'required|regex:/^[0-4]+$/',
                    'yourpinyin' => 'required'
                ], [
                    'yoursisheng.required' => '必須項目です',  // 修正: キーの書き方
                    'yourpinyin.required' => '必須項目です',   // 修正: キーの書き方
                    'yoursisheng.regex' => '0から4の文字で構成されている必要があります。',
                ]);
            } elseif ($mode === 'merge') {
                $request->validate([
                    'sisheng-pinyin' => 'required'
                ], [
                    'sisheng-pinyin.required' => '必須項目です',  // 修正: キーの書き方
                ]);
            } else {
                $errors['mode'] = "Mode error";
            }

            if ($mode === 'divide') {
                $yoursisheng = $request->input('yoursisheng');
                $yourpinyin = $request->input('yourpinyin');
            } elseif ($mode === 'merge') {
                // 数字を抽出して $yoursisheng に格納
                preg_match_all('/\d+/', $request->input('sisheng-pinyin'), $matches);
                $yoursisheng = implode('', $matches[0]);

                // 英字を小文字に変換して抽出し、$yourpinyin に格納
                preg_match_all('/[a-z]+/', strtolower($request->input('sisheng-pinyin')), $matches);
                $yourpinyin = implode('', $matches[0]);
            }

            $isCorrect = false;
            $answer = json_decode($word->answer, true);
            for ($i = 0; $i < count($answer['sisheng']); $i++) {
                if ($answer['sisheng'][$i] === $yoursisheng && $answer['pinyin'][$i] === $yourpinyin) {
                    $isCorrect = true;
                    break;
                }
            }
            $rank = $word->rank;
            $thinkingTime = time() - session('starttime');
            if ($isCorrect === true) {

                $rank += 2 * exp(-$thinkingTime / 40) + 1;
                $rank = floor($rank * 100) / 100;
            } elseif ($isCorrect === false) {
                $rank = 0;
            } else {
                $errors['rank'] = "ランク設定でエラー";
            }

            $temporary_nextreview_at = Carbon::now();



            if ($rank == 0) {
                $temporary_nextreview_at->addMinutes(30);
            } else {
                $f = floor(24 * exp(($rank - 1) / 1.4));
                $temporary_nextreview_at->addHours($f); // Ensure correct syntax for modifying date
            }
            // $nextreview_atをY-m-d H:i:s形式にフォーマット
            $nextreview_at = $temporary_nextreview_at->format('Y-m-d H:i:s');

            $word->update([
                'reviewd_at' => now(),
                'nextreview_at' => $nextreview_at,
                'rank' => $rank,
                'thinkingTime' => $thinkingTime,
            ]);

            return redirect()->route('chinese.showanswer', ['id' => $word->id, 'yoursisheng' => $yoursisheng, 'yourpinyin' => $yourpinyin, 'isCorrect' => $isCorrect]);
        } else if ($question_type == 'select') {
            $rank = $word->rank;
            $thinkingTime = time() - session('starttime');
            if ($word->question_answer == $request->your_answer) {
                $isCorrect = true;
                $rank += 2 * exp(-$thinkingTime / 40) + 1;
                $rank = floor($rank * 100) / 100;
            } else {
                $isCorrect = false;
                $rank = 0;
            }

            $temporary_nextreview_at = Carbon::now();

            if ($rank == 0) {
                $temporary_nextreview_at->addMinutes(30);
            } else {
                $f = floor(24 * exp(($rank - 1) / 1.4));
                $temporary_nextreview_at->addHours($f); // Ensure correct syntax for modifying date
            }

            $nextreview_at = $temporary_nextreview_at->format('Y-m-d H:i:s');

            $word->update([
                'reviewd_at' => now(),
                'nextreview_at' => $nextreview_at,
                'rank' => $rank,
                'thinkingTime' => $thinkingTime,
            ]);

            return redirect()->route('chinese.showanswer', ['id' => $word->id,  'isCorrect' => $isCorrect, 'seed' => $request->seed, 'your_answer' => $request->your_answer]);
        }
    }

    public function showAnswer(Request $request)
    {
        $request->session()->put('previous_url', $request->fullUrl());

        $id = $request->query('id') ?? NULL;
        // クエリパラメータからIDを取得し、Chineseモデルからレコードを検索
        $word = Chinese::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();


        // レコードが見つからなかった場合の処理
        if (!$word) {
            return redirect()->back()->withErrors(['error' => 'レコードが見つかりませんでした。']);
        }

        if ($word->question_type == 'normal') {
            // ビューに必要なデータを渡す
            return view('chinese.answer', [
                'id' => $id, // デフォルト値を0に設定
                'answer' => $word->answer ?? [], // $word->answerが存在しない場合は空配列を返す
                'isCorrect' => $request->query('isCorrect', 'false'),
                'question' => $word->question ?? 'No question provided', // $word->questionが存在しない場合のデフォルトメッセージ
                'question_type' => $word->question_type ?? 'Unknown', // $word->question_typeが存在しない場合のデフォルト値
                'yoursisheng' => $request->query('yoursisheng', 'N/A'), // デフォルト値を'N/A'に設定
                'yourpinyin' => $request->query('yourpinyin', 'N/A') // デフォルト値を'N/A'に設定
            ]);
        } elseif ($word->question_type == 'select') {
            // ビューに必要なデータを渡す
            return view('chinese.answer', [
                'id' => $id, // デフォルト値を0に設定
                'choices' => $word->choices,
                'question_answer' => $word->question_answer ?? [], // $word->answerが存在しない場合は空配列を返す
                'isCorrect' => $request->query('isCorrect', 'false'),
                'question' => $word->question ?? 'No question provided', // $word->questionが存在しない場合のデフォルトメッセージ
                'question_type' => $word->question_type ?? 'Unknown', // $word->question_typeが存在しない場合のデフォルト値
                'seed' => session('seed')??0,
                'your_answer' => $request->query('your_answer'),
            ]);
        }
    }
}
