<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class english_try extends Seeder
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
                'question' => '引き起こした',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['caused']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を放送する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['broadcast']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '相談する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consult']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '木材',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wood']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '問い合わせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inquire']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '前進する／前進，事前',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['advance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '発表，告知',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['announcement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '励ました',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['encouraged']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '期限切れの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expired']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '懸案する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['concern']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '関係',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'はっきりしない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unclear']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '便利に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conveniently']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'お金を預ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deposit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '説明',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['explanation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '送り出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['launch']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '宿題',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assignment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '四半期',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quarter']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '開発された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['developed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '建築',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['architecture']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '手配',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arrangement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '一つの，一人の，独身の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['single']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '意見',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['opinion']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '部門，部類',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['category']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を調節する，順応する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adjust']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'の後を追う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['follow']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'に沿って',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['along']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '著者，作家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['author']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '今まで',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ever']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を手に入れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['obtain']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '手順',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['procedure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '気づいた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['noticed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '大学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['college']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'をより好む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prefer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '社会の，社交の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['social']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '消費者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consumer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '会計士',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accountant']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '現場で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['on site']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '導かれた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conducted']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '承認する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['approve']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を拡大する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expand']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '（大規模な）会議',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convention']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '住宅',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['housing']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '解決法',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['solution']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '貸す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lease']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ためらう',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hesitate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '目立った',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outstanding']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '規則的に，定期的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regularly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '国家の，国民の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['national']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '祝福',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['congratulation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '置き換えた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['replaced']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '有名な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['renowned']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '参加',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['participation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '中身，目次／満足して',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['content']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '感謝',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appreciation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '皮膚，皮膜',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['skin']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '参加者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['participant']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を妨げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prevent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '成功',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['success']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を除いて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['except']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '由緒のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['historic']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '提案した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proposed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '収容する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accommodate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '以前は',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['previously']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '労働',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['labor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '給付金／を与える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grant']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '混ぜる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blend']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '乗組員，一団',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crew']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '頭，先頭',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['head']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '無農薬の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['organic']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '適した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suitable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '比較できる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comparable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'でない限り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unless']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '率，割合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '場所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['location．']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '同意，一致',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agreement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '暗示した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['implied']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '十分に，完全に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fully']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '特に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['especially']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'あいさつ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['greeting']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '通常の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['usual']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '(もまた)～でない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['either']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '展示者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exhibitor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '導入する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['install']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '探求',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quest']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '島',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['island']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '後悔する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regret']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '燃料',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fuel']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '部門',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['section']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '国，いなか，地方',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['country']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '景観',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['landscape']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '個人的な，私的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['private']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '引換券',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['voucher']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '融資する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['loan']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '売り手',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vendor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '提案',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suggestion']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を驚かせる／驚き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surprise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '公式の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['official']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '職場',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['workplace']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ボランティア，志願兵',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['volunteer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '着く，届く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reach']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '設計者、デザイナー',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['designer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '丸太、日誌',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['log']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'をほめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['praise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '戦略',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strategy']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '確かめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['verify']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '適応，順応，方向付け',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['orientation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '代理人，代理店',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '貧乏な，かわいそうな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Poor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '伴侶、相方',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['partner']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '誰を（～する人）',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Whom']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '広告',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['advertisements']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '法律の，合法な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['legal']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '身分証明書',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['identification']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '延びる，を拡張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extend']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を移す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transfer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '重要な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['significant']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '実行された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['implemented']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '返済',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reimbursement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '期間、用語',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['terms']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'いつもの／いつもの手順',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['routine']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '応募者，候補者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['applicant']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '拡張',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extension']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '承認',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['approval']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を強調する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emphasize']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '枝，支店',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['branch']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '出前，仕出し',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['catering']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '彫刻',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sculpture']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '指示された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['instructed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '代わりの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alternate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '投資',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['investment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '仮想の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['virtual']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '倉庫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['garage']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '議題',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agenda']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '積み荷／を積む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['load']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '購読，寄付',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subscription']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '出現，外見',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appearance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '貴重な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['valuable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '要求される事柄，必要なもの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['requirement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '配布する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distribute']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '受け入れられた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accepted']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '影響を受けた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affected']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '理由，原因',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reason']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '考慮している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['considering']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '生産者，供給者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['provider']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ひょう，図',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chart']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '再度計画する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reschedule']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '大通り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['boulevard']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '役割',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['role']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '知らせた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['informed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '役に立つ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['useful']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '出発',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['departure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '能力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['skill']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '割引購入権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coupon']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '市場、しじょう',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['market']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '進歩',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['progress']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '直接の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['direct']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '税',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tax']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '正確な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accurate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '行政の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['administrative']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '地域，地方',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['region']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'かなり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['significantly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '事実',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fact']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '農家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['farmer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '気づいている',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aware']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を結びつけて考える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Associate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '考慮された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['considered']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '訓練された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trained']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'する時はいつでも',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['whenever']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '上場した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['listed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を探索，探検する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['explore']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '期待している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expecting']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '増加している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['increasing']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '単に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['simply']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'つながる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['link']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '組織された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['organized']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '資格のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eligible']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '要旨，基本方針',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['keynote']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '気づき',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Awareness']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '引退した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retired']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '一致団結した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['united']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '特定の，特にその，気むずかしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['particular']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '責任がある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['responsible']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '見直している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reviewing']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '複雑な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['complex']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '法人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['corporation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '限度，制限／を制限する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['limit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '付属物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attachment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '典型的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['typically']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '台所用品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['kitchenware']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '処理装置',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['processor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '詳細の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['detailed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '綿密に，密接に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['closely']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '残念なことに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unfortunately']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '表示された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['displayed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '必要な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['necessary．']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '有効な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['valid']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '比較的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relatively']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '報告された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reported']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '頼りになる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reliable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '批評',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['critics']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '感動した，印象付けられた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['impressed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '植物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plant']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を超えて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Beyond']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '洗剤',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['detergent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '表面',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surface']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '見積り/見積る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quote']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '小道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['path']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '監査',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['audit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '穏かな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['placid']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '玄関',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['porch']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '習慣',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['custom']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を提案する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['propose']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '道具',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tool']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を断る，衰退する／低下，衰退',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['decline']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '請求書，紙幣，法案',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bill']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '我慢強い／患者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['patient']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '移転',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relocation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '商品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['merchandise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '内部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interior']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '店員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clerk']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '家族，家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['household']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '政府，統治',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['government']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '入場',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entry']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '旅程',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['itinerary']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'かわいそうに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['poorly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '主導権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['initiative']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '手配された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arranged']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '昼食',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['luncheon']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '比較された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compared']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '作動させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['activate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '集める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['collect']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '科学者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scientist']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '拡大された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expanded']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '利益',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['profit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '状態，社会的地位',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['status']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '実習',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['internship']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '入手できる，お金の足りる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affordable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '移転させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relocate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '名刺',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['business card']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '想定した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supposed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '荷物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['baggage']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を集める，集まる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gather']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '便利',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convenience']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '住所氏名録',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['directory']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '延期する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['postpone']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '芸術作品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['artwork']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '絵，写真',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['picture']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '期間，時代',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['period']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '効率性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['efficiency']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '～周年',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anniversary']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'お祝いする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['congratulate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '才能のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['talented']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '研究所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['institute']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '電気',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['electricity']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '長さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['length']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '編集者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['editor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '食料品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grocery']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'よく似た',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['similar']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '適切に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['properly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '生産性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['productivity']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '2回',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['twice']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ノートパソコン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['laptop']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '許可',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['permission']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '参加した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['participated']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '競技の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['athletic']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '競争力のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['competitive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '代弁者，代表者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spokesperson']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '傾向，流行',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trend']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '多様な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diverse']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '資金',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fund']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '明らかにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clarify']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '徹底的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thoroughly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を取り除く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remove']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を手で扱う，にうまく対処する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['handle']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '喜んで',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['delighted']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '身体の，物理的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['physical']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '関与する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['involve']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '理想／理想の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ideal']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '並外れた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exceptional']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '自信のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confident']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '広範な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extensive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '責任',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['responsibility']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '競争する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compete']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '等しい／に等しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equal']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を求める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['seek']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '話，陳述，声明',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['statement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '実験室',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['laboratory']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ついに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['finally']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '代表取締役',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['CEO']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'に向かって',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['toward']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '批評家，批判者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['critic']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '図，表',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['figure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を比較する，をたとえる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compare']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '全体の，全体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entire']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '居住の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['residential']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '合理的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reasonable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '描く，引く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['draw']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を引きつける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attract']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '株式会社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['corporation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '予期せぬ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unexpected']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '忠実な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['loyal']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '催促',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reminder']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '足跡',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['track']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '前の／前者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['former']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '長期的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['long-term']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '実際に，現実に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['actually']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '期待した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anticipated']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '休息する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rest']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '価値／を重んじる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['value']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '明るい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bright']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '地方の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regional']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '通知',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['notification']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '頼る，信頼する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rely']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'このように',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thus']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'パン菓子',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pastry']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '状態，国家，州',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['state']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '短い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brief']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '洞察',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insight']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '操作する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['operate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '寺院',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['temple']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を捜す／探索，捜索',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['search']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '内部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['internal']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '極めて重要な，非常に深刻な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['critical']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '最大の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['maximum']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '瞬間，時',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['moment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'とても，高く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['highly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '改善',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['improvement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '正確な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exact']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '植物の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['botanical']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '美しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lovely']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '目立たせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['highlight']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '委員会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['committee']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '手段',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['means']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '優先の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prior']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '頻繁な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['frequent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '現れる，のように思われる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appear']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '原因／の原因となる，',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cause']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '出版社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['publisher']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '概要',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outline']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '宿泊施設',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accommodation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '研究室',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lab']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '資金調達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['funding']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '供給者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supplier']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '機械',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['machinery']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '同僚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coworker']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '販売員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['salesperson']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '受付係',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['receptionist']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を統治する／規則，習慣',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rule']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '背景，経歴',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['background']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '適当な，適切な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appropriate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '製造する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['manufacture']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '割り当てる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assign']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '競合他社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['competitor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を分析する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['analyze']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '不便な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inconvenient']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '応接',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reception']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '経済学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['economics']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '不完全な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incomplete']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '一時的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['temporarily']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '自動車',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['automobile']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '弁償する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reimburse']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '販促の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['promotional']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '市長',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mayor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '閉鎖',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['closure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '減少する／減少',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['decrease']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '寄付',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['donation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '習慣',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['habit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '近所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['neighborhood']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '具体的な，特定の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['specific']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '出版物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['publication']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を含む，が入っている',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contain']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '冷蔵庫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refrigerator']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '実証する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demonstrate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '優先度',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['priority']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '個人の，個々の／個人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['individual']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '選挙',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['election']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '許可する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['authorize']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '人物像',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['portfolio']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ひらめき',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inspiration']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を保存［保護］する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preserve']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '利益のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['profitable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '使命、任務',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mission']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '採用する、雇う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recruit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '本部',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['headquarters']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '敏感な，神経質な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sensitive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '卒業する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['graduate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '毎年の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Annually']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '進行中の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ongoing']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '学芸員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['curator']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '専門知識',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expertise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'に近づく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['approach']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '草案',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['draft']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '地域，地区',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['district']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '数千の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thousands of']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '学部',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faculty']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '陳列棚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['showcase']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '準備',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preparation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を取り除く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eliminate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'めったに～ない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rarely']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '評判',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reputation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '例外',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exception']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '十分な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adequate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '解決する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resolve']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '陰',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shade']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '底',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bottom']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '多国籍の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['multinational']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '集合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assembly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '特に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['particularly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '金属',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['metal']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '特に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['specifically']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '逃げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vacate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'の価値がある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['worth']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '安価な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inexpensive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '経済の，経済的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['economic']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '舞台',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arena']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '資格',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['qualification']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '早速',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['promptly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '明確に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clearly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'アジア',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Asia']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '人気',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['popularity']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'にもかかわらず',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['despite']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '依存する，次第である',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depend']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を達成する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['achieve']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '環礁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lagoon']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '柔軟な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flexible']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '不便',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inconvenience']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '提出',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['submission']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '～経由で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['via']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'だと思う，を推測する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['guess']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '注意深い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attentive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'さもなければ，それとは違うように',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['otherwise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '条例',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ordinance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'やかん',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['kettle']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '組み立てる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assemble']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '主として',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['largely']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '後部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rear']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '電気の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['electrical']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '泥',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dirt']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '新鮮な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crisp']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'である一方で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['whereas']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '問い合わせ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inquiry']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '均等に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evenly']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '～のように思われる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['seem']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '理性のある，理にかなった',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reasonable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '群衆',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crowd']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '収益',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revenue']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '解決',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resolution']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '娯楽',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entertainment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を保証する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['guarantee']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '所有権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ownership']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '小売業者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retailer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '人口，国民',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['population']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '文房具',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stationery']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '機密の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confidential']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '環境，状況',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['environment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を得る／獲得',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gain']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '資産',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['asset']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '急速な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rapid']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '投資する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['invest']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '（動植物の）種',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['species']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '泉，春',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spring']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '努力する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '潜在的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['potentially']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '好み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preference']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '動機',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incentive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '革新',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['innovation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '流れる／流れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flow']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を結合させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['combine']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '卸し',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wholesale']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '想定，思いこみ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assumption']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '評価',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['valuation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '義務',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['obligation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を見分ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['identify']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '出口',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outlet']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '平らな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flat']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '代わって',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['behalf']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '生まれ故郷の，生来の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['native']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '国内の，家庭内の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['domestic']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '世紀',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['century']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '仕様',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['specification']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '高める，増す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enhance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '水星',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Mercury']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '構造',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['structure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '分野',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sector']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '灰',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ash']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '準拠する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comply']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '株主',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shareholder']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '評価',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assessment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '輸出者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exporter']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '産出する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['yield']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を輸出する／輸出',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['export']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '広告',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Ad']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '上階',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['upstairs']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '場面',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scene']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '力量，能力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['competence']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '欠陥',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['defect']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '容器',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['container']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を噛む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bite']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '見地，視座',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perspective']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '信頼，信仰',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faith']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '忠実に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faithfully']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '主として',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['primarily']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ごみ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rubbish']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を貼り付ける，を取り付ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attach']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '子会社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subsidiary']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '洞察（力），知覚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perception']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '不思議に思う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wonder']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '目標、目的',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['objective']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を設立する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['establish']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '投票',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['poll']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '関連のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relevant']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'に食べ物を与える，を養う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['feed']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '投票する／投票',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vote']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '保持',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retention']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '外部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['external']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '織物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fabric']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を発生させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['generate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'お土産',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aouvenir']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '欠点',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['downside']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '大臣',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['minister']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '借金，負債',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['debt']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '雇用者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['employer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を維持する，だと主張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['maintain']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '所得',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['income']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '木材',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['timber']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '形／を形作る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shape']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '化学の／化学製品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chemical']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '冒険的事業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['venture']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '疑問',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['query']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '食器棚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cupboard']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '引き出し',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['drawer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '該当する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['applicable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '特定する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['locate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '容量',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capability']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '式',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['formula']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '囲む、同封する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enclose']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '機関',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['administration']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '魅力／を魅了する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['charm']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '保守的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conservative']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を稼ぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['earn']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '田舎',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['countryside']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '取引',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transaction']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '排他的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exclusive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '製造元',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['maker']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '経済',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['economy']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '効果的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['effectively']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '実施する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['implement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '期待',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expectation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '独立した，自立した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['independent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '取得',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acquisition']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '海の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['marine']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '手数料',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commission']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '持続可能な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sustainable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '大きさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bulk']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '包括的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comprehensive']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '捧げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dedicate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '寄付，貢献',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contribution']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '添付',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attachment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を決める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['determine']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '量',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quantity']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '排出口',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '天井',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ceiling']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '起源',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['origin']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '延長時間，残業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overtime']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '停電',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outage']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '払い戻し/払戻す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rebate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '創作',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fiction']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '栄養',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nutrition']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '不足',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shortage']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '方法',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['method']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '照会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['referral']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '質問表',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['questionnaire']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '失望',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disappointment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '値する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deserve']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '証拠',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proof']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '聴衆，観客，視聴者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['audience']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '親しみやすさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['friendliness']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '化学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chemistry']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '味／な味がする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['taste']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '資金調達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fund-raising']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '計算',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['calculation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '処方箋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prescription']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を果たす，をかなえる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fulfill']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '協力する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['collaborate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '薬局',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pharmacy']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '谷',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['valley']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '資格を与える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['qualify']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '裁判，試み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trial']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '検査官',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inspector']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '認識する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recognize']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'に付き添う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accompany']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を反映する，熟考する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reflect']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '成就，達成',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accomplishment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '保存',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preservation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '滑る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['slip']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '破壊',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disruption']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '監督する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supervise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '農業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agriculture']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '学会、協会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['academy']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '自慢する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['boast']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '監督',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supervision']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '見習い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['apprenticeship']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を表す，を代表する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['represent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '礼儀',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['courtesy']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '拡張',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expansion']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '問題処理',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['troubleshooting']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '立証',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['verification']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '呼び戻す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recall']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '可能にする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '鉱石',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ore']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '簡易キッチン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['kitchenette']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '寄付する，貢献する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contribute']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を注ぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pour']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '相対する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['counter']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '称賛する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acclaim']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '10年',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['decade']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '削減',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reduction']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '版',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['edition']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '目的地',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['destination']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '歩行者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pedestrian']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '桟橋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pier']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '辛抱強さ，忍耐',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['patience']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ガソリン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gas']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '局面',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aspect']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '状況，情勢',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['situation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '住宅',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['residence']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '理想郷',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['utopia']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '比較',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comparison']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '改修する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refurbish']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '池',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pond']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'に備え付ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equip']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '編集する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compile']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '保証する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '遷移',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transition']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '惣菜',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['delicatessen']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '代替となるもの／代替の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alternative']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '歩道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['walkway']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '謝罪',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['apology']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '失敗，失敗作，失敗者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['failure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '亀裂',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crack']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '理解',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comprehension']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '小説／新奇な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['novel']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '圧倒する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overwhelm']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'に影響を与える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affect']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '破片',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['debris']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '感謝して',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grateful']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '評価する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evaluate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '料理',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cuisine．']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '子供時代',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['childhood']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '柱、段',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['column']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '寿命',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lifetime']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '回転する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rotate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '温度，体温',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['temperature']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '虹彩',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['iris']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '才能',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['talent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '重要性，意義',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['significance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '周波数',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['frequency']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '頂上',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['peak']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '変える，変更する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vary']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '利用する，活用する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['utilize']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '存在',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['presence']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '企業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enterprise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '歩道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sidewalk']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '光学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['optics']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を検査する，を調べる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['examine']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '貢献者，寄与者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contributor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '約束',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['engagement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '整列させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['array']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '名誉，敬意',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['honor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '追加，付録',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['addendum']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '残り物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['leftover']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '財布',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['purse']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を刺激する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stimulate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '小麦',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wheat']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '汚れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stain']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '推察する，考える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['infer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '要求，需要／…を要求する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demand']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '予約',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['booking']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '見て回る，拾い読みする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['browse']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '緩む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['loosen']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '感心，称賛',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['admiration']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '非難する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blame']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '労働力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['workforce']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '往復運転で運ぶ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shuttle']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '解雇する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fire']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '通勤する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commute']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を実現する，達成する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attain']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '告白する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confess']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '挨拶する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['greet']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '貯蓄，値引き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['saving']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '従う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['obey']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '展示／展示する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['display']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を除く，排除する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exclude']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '履歴書',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['résumé']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '反応',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['feedback']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'はしご',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ladder']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '禁止する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prohibit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '決定，決意',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['determination']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '磨く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['polish']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '結ぶ，ネクタイ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tie']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '家賃／賃貸借する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を強化する，増加させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['boost']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '検査する，点検する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inspect']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '予約する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['book']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '予見する，予測する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['foresee']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '差し込む，接続する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plug']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '縫う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sew']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '寄りかかる，かがむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lean']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '保存する，蓄える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['store']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '任命する，指名する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appoint']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '安堵，軽減',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relief']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '花瓶',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vase']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'テラス，中庭',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['patio']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '離陸，出発',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['takeoff']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '灯台',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lighthouse']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '噴水',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fountain']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '（取引，業務など）を行う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transact']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '撤回する，引き出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['withdraw']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '割り当てる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allocate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '確率，可能性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['probability']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '期限切れ，（契約などの）終了',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expiration']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '申し込み，応用',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['application']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '（荷物など）を降ろす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unload']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'テーマ，論題',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['theme']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を廃止する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['abolish']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '中断する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suspend']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '書類，書類作業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['paperwork']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '復旧させる，取り戻す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['restore']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '開始する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['initiate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '無視する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disregard']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '交流する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interact']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '管理する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['administer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を身につける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acquire']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '端',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['edge']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '拘束、きずな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bond']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '連合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consortium']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '連携させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affiliate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '陸軍',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['army']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '乱雑',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clutter']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '友達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '目撃者，証人／…を目撃する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['witness']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '密集した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conglomerate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '膜',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['membrane']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '膨張',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inflation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '方程式',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '宝庫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['treasury']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '報酬',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remuneration']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '補償',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compensation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '補償',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['indemnity']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '変化しやすい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['variable']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '封建君主，…卿，（（大文字で））神',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lord']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '武器',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['weapon']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '表現',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expression']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '秘書',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['secretary']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '反対',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['opposition']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '反逆者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rebel']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '箱',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '爆弾',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bomb']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '配当',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dividend']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '能力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ability']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '入り江',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inlet']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '特許',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['patent']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '同意',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consensus']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '動機付ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['motivate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '動き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['motion']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '統合する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consolidate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '統合する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['integrate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '統合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['union']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '統合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consolidation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '投資家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['investor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '土',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['soil']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '伝送',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transmission']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '天',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['heaven']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '締める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tighten']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '通貨',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['currency']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '頂上',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['summit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '跳ぶ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['leap']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '調達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['procurement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '仲裁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arbitration']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '知能，諜報',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intelligence']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '団結',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unity']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '逮捕する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arrest']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '待つ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['await']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '存在する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exist']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '送信する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transmit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '争議，口論',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dispute']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '訴訟',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lawsuit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '選定する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['designate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '責任',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['liability']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '責める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['condemn']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '世代',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['generation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '水素',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hydrogen']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '肖像画',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['portrait']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '勝利',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['victory']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '柔軟性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flexibility']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '終了',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['termination']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '収束',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convergence']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '首都',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capital']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '借り方',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['debit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '社会規範',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compliance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '実装',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['implementation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '事件',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incident']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '支出',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expenditure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '指示者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['indicator']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '思い切って…する，生意気にも…する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dare']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '細胞',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cell']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '再構築する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['restructure']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '挫折させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['frustrate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '骨格',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['framework']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '抗議する／抗議',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['protest']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '公平',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equity']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '交渉する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['negotiate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '原理・原則，主義',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['principle']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '憲法',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['constitution']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '結婚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['marriage']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '計算する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reckon']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '計画',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scheme']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '刑務所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prison']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '群れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['troop']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '勤勉',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diligence']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '教会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['church']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '供給',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['provision']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '給与',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['payroll']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '宮殿',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['palace']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '犠牲者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['casualty']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '騎兵',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cavalry']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '軌道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['orbit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '規定者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regulator']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '祈り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prayer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '期間，学期，用語，条件，間柄',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['term']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '管理者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['administrator']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '幹',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stem']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '滑り止め',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['skid']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '割り当てる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allot']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '覚え書き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['memorandum']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '獲物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prey']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '改訂する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '会長',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chairman']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '会社，事業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enterprise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '果肉',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pulp']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '家主',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['landlord']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '加速する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accelerate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '炎',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flame']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '援助／…を助ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aid']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '衛星',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['satellite']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '引用',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quotation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '一目見る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['glance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '一編み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stitch']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '医薬品の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pharmaceutical']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '違反',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['breach']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '委託、献身',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commitment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '委託',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consignment']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '安定',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stability']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ポンプ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pump']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'ぴんと上げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perk']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'に従って',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pursuant']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'トンネル',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tunnel']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'こぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['row']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'くっつく，固執する／棒きれ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stick']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'くい、棒',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stake']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'お話',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tale']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'うなずく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nod']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '10億',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['billion']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '100万',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['million']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を負かす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['defeat']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を折りたたむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fold']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を出版する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['publish']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を雇う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['employ']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'を観察する，を遵守する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['observe']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => 'のふりをする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pretend']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '(故意の）殺人／…を（故意に）殺す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['murder']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '取ってくる，誘い出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fetch']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '咲く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bloom']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '前提，建物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['premise']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '鑑定，見積もり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appraisal']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '基準',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['criterion']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '相違，分散',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['variance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '収益性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['profitability']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '間接の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overhead']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '証明書',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['certificate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '引継ぎ，買収',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['takeover']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '倒産',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bankruptcy']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '資本化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capitalisation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '節，条項',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clause']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '鑑定人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appraisee']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '片付け，除去',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clearance']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '貨物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cargo']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '現金流量',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cashflow']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '仲裁人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arbitrator']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '株主',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stockholder']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '商標',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trademark']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '停車場，倉庫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depot']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '解体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demerger']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '仕様',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spec']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '売上高，転職率',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['turnover']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '解雇',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['layoff']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '債務超過',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insolvency']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '接近，加盟',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accession']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '仲介',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brokerage']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '核となる技術',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['core competency']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '民営化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['privatization']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '流動性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['liquidity']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '兆',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trillion']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '会計職',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accountancy']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '適所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['niche']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '投機家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['speculator']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '戦術',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tactics']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '株式',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equities']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '強化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enhancement']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '債権者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['creditor']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '減価償却',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depreciation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '保険会社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insurer']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '当座貸越',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overdraft']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '競争，対抗',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emulation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '申し立て',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allegation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '債権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['receivables']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '相乗効果',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['synergy']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '規制緩和',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deregulation']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '桁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['digit']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '足場',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scaffolding']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '借入',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['borrowing']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '根底にある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['underlie']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '保険債務を負う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['underwrite']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '負う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incur']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '主張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allege']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '現金化する，清算する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['liquidate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '方向づける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['orientate']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '接点',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interface']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '外注する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outsource']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '小包',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['parcel']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '無法者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outlaw']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '基準',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['benchmark']
                ]),
            ],
            [
                'user_id' => 1,
                'question' => '分解，解像度，決心',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resolution']
                ]),
            ],
        ]);
    }
}
