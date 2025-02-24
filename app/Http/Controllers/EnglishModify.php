<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\English;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class EnglishModify extends Controller
{
    public function modify(Request $request)
    {

        $previous = url()->previous();

        $userId = Auth::id();

        $word = English::where('id', $request->query('id'))
            ->where('user_id', $userId)
            ->first();
        if (!$word) {
            Log::error('english.modify でエラー', ['user_id' => Auth::id(), 'time' => $request->query('id')]);
        }
        return view('english.modify', compact('word'));
    }
    public function modifyWord(Request $request)
    {
        try {
            $userId = Auth::id();
            $word = English::where('id', $request->input('id'))
                ->where('user_id', $userId)
                ->firstOrFail();

            $question_type = $word->question_type;

            // データの更新
            if ($question_type === 'normal') {
                $word->answer = $request->input('answer');
                $word->question = $request->input('question');
            } elseif ($question_type === 'select') {
                $word->question = $request->input('question');
                $word->choices = $request->input('choices');
                $word->question_answer = $request->input('question_answer');
            }
            if ($request->has('comment')) { // 'comment' がリクエストに存在している場合のみ
                $word->comment = $request->input('comment');
            }



            // 更新を保存
            $word->save();

            $response = response()->json([
                'input' => $request->input(), // リクエストデータを返す
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
            return response()->json(['error' => 'no data found for userId ' . $userId . '  id = ' . $request->input('id')], 404);
        } catch (\Illuminate\Database\QueryException $e) {
            // データベースクエリエラーの処理
            return response()->json(['error' => 'データベースエラー: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            // その他の例外処理
            return response()->json(['error' => '予期しないエラー: ' . $e->getMessage()], 500);
        }
    }
}
