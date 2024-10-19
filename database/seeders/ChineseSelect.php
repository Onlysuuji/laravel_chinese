<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記


class ChineseSelect extends Seeder
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
                'question_type' => 'select',
                'question_answer' => '我',
                'choices' => json_encode([
                    'option' => ['你', '他'],
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '机',
                'question_type' => 'select',
                'question_answer' => '桌子',
                'choices' => json_encode([
                    'option' => [ '机票'],
                ]),
            ],
        ]);
    }
}
