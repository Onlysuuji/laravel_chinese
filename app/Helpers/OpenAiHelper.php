<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class OpenAiHelper
{

    // Node.js APIを呼び出す共通関数
    public static function phpfetchFromOpenAi($prompt)
    {
        $response = Http::get('http://localhost:3000/api/openai', [
            'prompt' => $prompt
        ]);

        return $response->json()['response'] ?? 'エラーが発生しました';
    }
    // Node.js APIを呼び出す共通関数
    public static function fetchFromOpenAi(Request $request)
    {
        try {
            $prompt = $request->input('prompt'); // リクエストからプロンプトを取得

            $response = Http::get('http://localhost:3000/api/openai', [
                'prompt' => $prompt,
            ]);

            // API応答を返す
            return $response;

        } catch (Exception $e) {
            // エラーが発生した場合にログ出力とエラーメッセージを返す
            Log::error('OpenAi API 呼び出しエラー: ' . $e->getMessage());
            return 'APIエラーが発生しました。';
        }
    }
}
