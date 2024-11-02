<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class EnglishNormal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('english')->insert([
            [
                'user_id' => 1,
                'question' => '色をなんでも答えて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['red','yellow','blue','green'],
                ]),
            ],
        ]);
    }
}
