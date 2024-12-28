<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Models\English;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class ApiHelper
{
    public static function openai($id)
    {
        try {
            $word = English::where('user_id', Auth::id())
                ->where('id', $id)
                ->first();

            // JSONをデコード
            $decodedAnswer = json_decode($word->answer, true);

            // 配列から値を取得
            $answer = $decodedAnswer['english'][0];


            Session::put('id', $id);

            $openai_d = OpenaiHelper::phpfetchFromOpenai("指定された英単語に適した説明をその英単語の文字を入れないで日本語で作成してください。$answer");
            $openai_e = OpenaiHelper::phpfetchFromOpenai("指定された英単語を使用する英文を作ってその文だけを出力してください。$answer");
            $openai_j = OpenaiHelper::phpfetchFromOpenai("次の文を日本語に翻訳してその翻訳した文章だけを出力してください。$openai_e");
            Session::put("openai_j_$id", $openai_j);
            Session::put("openai_d_$id", $openai_d);
            Session::put("openai_e_$id", $openai_e);

            $gemini_d = GeminiHelper::phpfetchFromGemini("指定された英単語に適した説明をその英単語の文字を入れないで日本語で作成してください。$answer");
            $gemini_e = GeminiHelper::phpfetchFromGemini("指定された英単語を使用する英文を作ってその文だけを出力してください。$answer");
            $gemini_j = GeminiHelper::phpfetchFromGemini("次の文を日本語に翻訳してその翻訳した文章だけを出力してください。$gemini_e");
            Session::put("gemini_j_$id", $gemini_j);
            Session::put("gemini_d_$id", $gemini_d);
            Session::put("gemini_e_$id", $gemini_e);
            $data = [
                "openai_j_$id" => $openai_j,
                "openai_d_$id" => $openai_d,
                "openai_e_$id" => $openai_e,
                "gemini_j_$id" => $gemini_j,
                "gemini_d_$id" => $gemini_d,
                "gemini_e_$id" => $gemini_e,
            ];
            // AIのcontent部分を返す
            return $data;
        } catch (Exception $e) {
            // エラーが発生した場合にログ出力とエラーメッセージを返す
            Log::error('ApiHelper 呼び出しエラー: ' . $e->getMessage());
            return 'APIエラーが発生しました。';
        }
    }
    public static function sessionApi()
    {
        $userId = Auth::id();
        $user = User::find($userId); // ユーザー情報を取得
        $userLoop = $user->loop;
        $word = English::where('user_id', $userId)
            ->where('loop', $userLoop)
            ->inRandomOrder() // ランダムな順序に並び替え
            ->first();

        while (!$word) {
            $userLoop++;
            // 最新のloop値を取得
            $userLoop = User::where('id', $userId)->value('loop');

            // 条件に合致するwordを検索
            $word = English::where('user_id', $userId)
                ->where('loop', $userLoop)
                ->inRandomOrder() // ランダムな順序に並び替え
                ->first();
        }
        $user->loop = $userLoop;
        $user->save();
        ApiHelper::openai($word->id);
        return ;
    }
}
