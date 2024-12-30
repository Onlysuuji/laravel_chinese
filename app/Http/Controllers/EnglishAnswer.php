<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\English;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Helpers\GeminiHelper;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Helpers\ApiHelper;
use Faker\Core\Number;

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
                        if (strcasecmp($answer['english'][$i], $yourenglish) === 0) {
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

                $word->nextreview_at = Carbon::today();

                $wordLoop = $word->loop;
                Log::debug('Debug message: ' . $wordLoop);
                $wordLoop = $word->loop;
                if ($isCorrect === true) {
                    $wordLoop += (3) * exp(-$thinkingTime / 40) + 1;
                }
                $wordLoop++;
                $word->loop = $wordLoop;
                Log::debug('Debug message: ' . $word->loop);
                $word->thinkingTime = $thinkingTime;
                $word->save();
                $id = $word->id;

                Session::put('answer_to_gemini', $request->input('answer_to_gemini', NULL));
                Session::put('answer_to_openai', $request->input('answer_to_openai', NULL));

                return redirect()->route('english.showanswer', compact('id', 'yourenglish', 'isCorrect'));
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


                $wordLoop = $word->loop;
                if ($isCorrect === true) {
                    $wordLoop += ($wordLoop + 2) * exp(-$thinkingTime / 40) + 1;
                }
                $wordLoop++;


                $nextreview_at = $temporary_nextreview_at->format('Y-m-d H:i:s');

                $word->update([
                    'nextreview_at' => $nextreview_at,
                    'rank' => $rank,
                    'thinkingTime' => $thinkingTime,
                    'loop' => 4,
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
        // 現在の時刻に基づいて単語を取得
        $userId = Auth::id();
        $user = User::find($userId); // ユーザー情報を取得
        $userLoop = $user->loop;

        


        $request->session()->put('previous_url', $request->fullUrl());

        $id = $request->query('id') ?? NULL;
        // クエリパラメータからIDを取得し、Englishモデルからレコードを検索
        $word = English::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $yourenglish = $request->query('yourenglish');
        $answerData = json_decode($word->answer, true);

        // レコードが見つからなかった場合の処理
        if (!$word) {
            return redirect()->back()->withErrors(['error' => 'レコードが見つかりませんでした。']);
        }
        $englishWord = $answerData['english'][0];
        $isCorrect = $request->query('isCorrect');
        if ($isCorrect) {
            $content = "「{$englishWord}」という英単語を日本語で解説してください。";
        } elseif (isset($yourenglish) && isset($answerData['english'][0])) {

            $content = "「{$englishWord}」と「{$yourenglish}」の違いを日本語で説明してください。";
        } elseif (!isset($yourenglish)) {
            // デフォルトメッセージ
            $content = "「{$englishWord}」という英単語を日本語で解説してください。";
        }



        if ($word->question_type == 'normal') {
            // セッションからデータを取得
            $answer_to_gemini = Session::get('answer_to_gemini') ?? NULL;
            $answer_to_openai = Session::get('answer_to_openai') ?? NULL;

            $yourenglish = $request->query('yourenglish', NULL); // デフォルト値を'N/A'に設定
            return view('english.answer', compact('id', 'word', 'yourenglish', 'isCorrect', 'content', 'answer_to_gemini', 'answer_to_openai'));
        } elseif ($word->question_type == 'select') {
            $your_answer = $request->query('your_answer', NULL);
            $choices = json_decode($word->choices, true);
            $choices['option'][] = $word->question_answer;
            return view('english.answer', compact('id', 'choices', 'word', 'your_answer', 'isCorrect', 'content'));
        }
    }
}
