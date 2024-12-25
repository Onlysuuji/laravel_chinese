<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class OpenAiHelper
{

    // Node.js APIを呼び出す共通関数
    public static function fetchFromOpenAi(Request $request,$para)
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
}
