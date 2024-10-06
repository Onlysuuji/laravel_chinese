<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Chinese;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ModifyController extends Controller
{
    public function modify(Request $request)
    {

        $userId = Auth::id();

        $word = Chinese::where('id', $request->query('id'))
            ->where('user_id', $userId)
            ->first();
        if (!$word) {
            Log::error('chinese.modify でエラー', ['user_id' => Auth::id(), 'time' => $request->query('id')]);
        }
        $question_type = $word->question_type;
        if ($question_type == 'normal') {
            $question = $word->question;
            $answer = $word->answer;
            return view('chinese.modify', ['id' => $word->id, 'question' => $question, 'question_type' => $question_type, 'answer' => $answer]);
        } elseif ($question_type == 'select') {
            $question = $word->question;
            $choices = $word->choices;
            $answer = $word->question_answer;
            return view('chinese.modify', ['id' => $word->id, 'question' => $question, 'question_type' => $question_type, 'choices' => $choices, 'answer' => $answer]);
        }
    }
    public function modifyWord(Request $request)
    {
        try {
            $data = $request->json()->all();

            $userId = Auth::id();
            $id = $data['id'];
            $word = Chinese::where('id', $id)
                ->where('user_id', $userId)
                ->firstOrFail(); // 存在しない場合は例外をスロー

            $question_type = $word->question_type;

            // データの更新
            if ($question_type === 'normal') {
                $word->answer = $data['answer'];
                $word->question = $data['question'];
            } elseif ($question_type === 'select') {
                $word->question = $data['question'];
                $word->choices = $data['choices'];
                $word->question_answer = $data['question_answer'];
            }

            // 更新を保存
            $word->save();

            $response = response()->json([
                'input' => $data, // リクエストデータを返す
                'status' => 'success'
            ]);

            // セッションからURLを取得
            $previousUrl = $request->session()->get('previous_url');

            // URLが存在する場合にリダイレクト
            if ($previousUrl) {
                // セッションからURLを削除
                $request->session()->forget('previous_url');
                // カスタムヘッダーを設定
                $response->header('X-Redirect-URL', $previousUrl);
            }
            // 成功した場合はリクエストデータをJSONとして返す
            return $response;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // レコードが見つからない場合のエラー処理
            return response()->json(['error' => 'no data found '], 404);
        } catch (\Illuminate\Database\QueryException $e) {
            // データベースクエリエラーの処理
            return response()->json(['error' => 'データベースエラー: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            // その他の例外処理
            return response()->json(['error' => '予期しないエラー: ' . $e->getMessage()], 500);
        }
    }
}