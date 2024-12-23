<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnglishTest extends Seeder
{
    protected $userId;

    // コンストラクタで userId を受け取る
    public function __construct($userId = null)
    {
        $this->userId = $userId;
    }

    public function run()
    {
        // userId が設定されている場合にシード処理を実行
        if ($this->userId) {
            DB::table('english')->insert([
                [
                    'user_id' => $this->userId,
                    'question' => '引き起こした',
                    'question_type' => 'normal',
                    'answer' => json_encode([
                        'english' => ['caused']
                    ]),
                ],
            ]);
        } else {
            // userId が設定されていない場合のエラーハンドリング
            throw new \Exception('User ID is required for EnglishTest seeding.');
        }
    }
}
