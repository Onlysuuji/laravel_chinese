<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class ChineseNormal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chineses')->insert([
            [
                'user_id' => 1,
                'question' => '私',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'sisheng' => ['3', '3'],
                    'pinyin' => ['wo', 'ni'],
                    'kantaiji' => ['我','你'],
                ]),
            ],
        ]);
    }
}
