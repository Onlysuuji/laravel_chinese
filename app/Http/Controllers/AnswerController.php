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
        try {
            $errors = [];
            $word = Chinese::where('id', $request->input('id'))
                ->where('user_id', Auth::id())
                ->firstOrFail();

            if ($word->nextreview_at > now()) {
                return redirect()->route('chinese');
            }

            $question_type = $word->question_type;
            if ($question_type === 'normal') {
                $yoursisheng = $request->input('yoursisheng', NULL);  // NULLをデフォルト値として設定
                $yourpinyin = $request->input('yourpinyin', NULL);

                if ($yoursisheng) {
                    $request->validate([
                        'yourpinyin' => ['required', 'regex:/^[^\d]*$/'],
                        'yourpinyin' => 'required'
                    ], [
                        'yoursisheng.required' => '必須項目です',  // 修正: キーの書き方
                        'yourpinyin.required' => '必須項目です',   // 修正: キーの書き方
                        'yoursisheng.regex' => '0から4の文字で構成されている必要があります。',
                    ]);
                } else if (!$yourpinyin) {
                    $yourpinyin = '回答なし';
                }





                $isCorrect = false;
                $answer = json_decode($word->answer, true);
                if (!empty($yoursisheng) && !empty($yourpinyin)) {
                    for ($i = 0; $i < count($answer['sisheng']); $i++) {
                        if ($answer['sisheng'][$i] === $yoursisheng && $answer['pinyin'][$i] === $yourpinyin) {
                            $isCorrect = true;
                            break;
                        }
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

                return redirect()->route('chinese.showanswer', ['id' => $word->id, 'yoursisheng' => $yoursisheng ?? NULL, 'yourpinyin' => $yourpinyin ?? NULL, 'isCorrect' => $isCorrect]);
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

                return redirect()->route('chinese.showanswer', ['id' => $word->id,  'isCorrect' => $isCorrect, 'your_answer' => $request->your_answer]);
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // 404 Not Foundの例外をキャッチ
            return response()->json(['error' => 'Resource not found'], 404);
        } catch (\InvalidArgumentException $e) {
            // 400 Bad Requestの例外をキャッチ
            return response()->json(['error' => 'Invalid argument'], 400);
        } catch (\Exception $e) {
            // 500 Internal Server Errorの例外をキャッチ
            return response()->json(['error' => 'Internal server error'], 500);
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
        $isCorrect = $request->query('isCorrect');


        if ($word->question_type == 'normal') {
            $yoursisheng = $request->query('yoursisheng', 'N/A'); // デフォルト値を'N/A'に設定
            $yourpinyin = $request->query('yourpinyin', 'N/A'); // デフォルト値を'N/A'に設定
            return view('chinese.answer', compact('id', 'word', 'yoursisheng', 'yourpinyin', 'isCorrect'));
        } elseif ($word->question_type == 'select') {
            $your_answer = $request->query('your_answer', null);
            $choices = json_decode($word->choices, true);
            $choices['option'][] = $word->question_answer;
            return view('chinese.answer', compact('id', 'choices', 'word', 'your_answer', 'isCorrect'));
        }
    }
}
