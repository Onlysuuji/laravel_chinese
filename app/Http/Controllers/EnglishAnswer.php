<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\English;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EnglishAnswer extends Controller
{
    public function checkAnswer(Request $request)
    {
        try {
            $errors = [];
            $word = English::where('id', $request->input('id'))
                ->where('user_id', Auth::id())
                ->firstOrFail();

            if ($word->nextreview_at > now()) {
                return redirect()->route('english');
            }

            $question_type = $word->question_type;
            if ($question_type === 'normal') {
                $yourenglish = $request->input('yourenglish', NULL);  // NULLをデフォルト値として設定

                $isCorrect = false;
                $answer = json_decode($word->answer, true);
                if (!empty($yourenglish)) {
                    for ($i = 0; $i < count($answer['english']); $i++) {
                        if ($answer['english'][$i] === $yourenglish) {
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

                return redirect()->route('english.showanswer', ['id' => $word->id, 'yourenglish' => $yourenglish ?? NULL, 'isCorrect' => $isCorrect]);
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

                return redirect()->route('english.showanswer', ['id' => $word->id,  'isCorrect' => $isCorrect, 'your_answer' => $request->your_answer]);
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
        // クエリパラメータからIDを取得し、Englishモデルからレコードを検索
        $word = English::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();


        // レコードが見つからなかった場合の処理
        if (!$word) {
            return redirect()->back()->withErrors(['error' => 'レコードが見つかりませんでした。']);
        }
        $isCorrect = $request->query('isCorrect');


        if ($word->question_type == 'normal') {
            $yourenglish = $request->query('yourenglish', 'N/A'); // デフォルト値を'N/A'に設定
            return view('english.answer', compact('id', 'word', 'yourenglish', 'isCorrect'));
        } elseif ($word->question_type == 'select') {
            $your_answer = $request->query('your_answer', null);
            $choices = json_decode($word->choices, true);
            $choices['option'][] = $word->question_answer;
            return view('english.answer', compact('id', 'choices', 'word', 'your_answer', 'isCorrect'));
        }
    }
}
