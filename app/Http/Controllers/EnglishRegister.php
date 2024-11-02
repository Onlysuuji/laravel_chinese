<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\English;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;


class EnglishRegister extends Controller
{
    public function register()
    {
        return view('english.register');
    }
    public function registerToDB(Request $request)
    {



        try {

            $question_type = $request->input('question_type');
            $add = new English;
            $add->user_id = Auth::id();
            $add->question = $request->input('question');
            $add->question_type = $question_type;
            if ($question_type == 'normal') {
                $add->answer = $request->input('answer');
            } elseif ($question_type == 'select') {
                $add->choices = $request->input('choices');
                $add->question_answer = $request->input('question_answer');
            }
            $add->comment = $request->input('comment')??null;

            $add->save();

            $data = $request->json()->all();

            return response()->json([
                'request' => $data, // リクエストデータを返す
                'status' => 'success'
            ]);
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
        return;
    }
}
