<?php

namespace App\Helpers;

use App\Models\English;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OpenAiHelper
{

    public static function phpfetchFromOpenai($prompt)
    {
        $response = Http::get('http://localhost:3000/api/openai', [
            'prompt' => $prompt
        ]);

        return $response->json()['content'] ?? 'エラーが発生しました';
    }

    // Node.js APIを呼び出す共通関数
    public static function fetchFromOpenAi(Request $request, $para)
    {
        try {
            $prompt = $request->input('prompt'); // リクエストからプロンプトを取得

            $response = Http::get('http://localhost:3000/api/openai', [
                'prompt' => $prompt,
            ]);

            // content部分を取得
            $content = $response->json()['content'] ?? '応答がありません';

            // AIのcontent部分を返す
            return response()->json(['content' => $content]);
        } catch (Exception $e) {
            // エラーが発生した場合にログ出力とエラーメッセージを返す
            Log::error('OpenAi API 呼び出しエラー: ' . $e->getMessage());
            return 'APIエラーが発生しました。';
        }
    }
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

            $openai_d = OpenaiHelper::phpfetchFromOpenai("指定された英単語に適した説明をその英単語の文字を入れないで日本語で作成してください。$answer");
            $openai_e = OpenaiHelper::phpfetchFromOpenai("指定された英単語を使用する英文を作って出力してください。$answer");
            $openai_j = OpenaiHelper::phpfetchFromOpenai("次の文を日本語に翻訳してください。$openai_e");
            Session::put("openai_j_$id",$openai_j);
            Session::put("openai_d_$id",$openai_d);
            Session::put("openai_e_$id",$openai_e);

            $gemini_d = GeminiHelper::phpfetchFromGemini("指定された英単語に適した説明をその英単語の文字を入れないで日本語で作成してください。$answer");
            $gemini_e = GeminiHelper::phpfetchFromGemini("指定された英単語を使用する英文を作って出力してください。$answer");
            $gemini_j = GeminiHelper::phpfetchFromGemini("次の文を日本語に翻訳してください。$openai_e");
            Session::put("gemini_j_$id",$gemini_j);
            Session::put("gemini_d_$id",$gemini_d);
            Session::put("gemini_e_$id",$gemini_e);

            // AIのcontent部分を返す
            return ;
        } catch (Exception $e) {
            // エラーが発生した場合にログ出力とエラーメッセージを返す
            Log::error('OpenAi API 呼び出しエラー: ' . $e->getMessage());
            return 'APIエラーが発生しました。';
        }
    }
}
