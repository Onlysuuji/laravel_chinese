<?php
namespace App\Services;

use GuzzleHttp\Client;

class geminiTest
{
    public function gemini_english($content)
    {
        $client = new Client([
            'base_uri' => 'https://generativelanguage.googleapis.com/v1beta2/',
            'timeout'  => 10.0,
        ]);

        try {
            // APIリクエストを送信
            $response = $client->post("models/gemini-1.5-flash:generate", [
                'headers' => [
                    'Authorization' => "Bearer AIzaSyBpSRH56kEgAo2eGdcqKWRkovWRy6igrh8",
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'prompt' => $content,
                ],
            ]);

            // レスポンスをJSONとしてデコード
            $data = json_decode($response->getBody(), true);

            // AI生成コンテンツの取得
            $text = $data['response']['text'] ?? '';

            // **で囲まれた部分を <strong>タグに置き換え
            $text = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $text);

            return $text;
        } catch (\Exception $e) {
            // エラーハンドリング
            return "Error: " . $e->getMessage();
        }
    }
}
