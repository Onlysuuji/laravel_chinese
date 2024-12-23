<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class toeic700 extends Seeder
{
    protected $userId;

    // コンストラクタで userId を受け取る
    public function __construct($userId = null)
    {
        $this->userId = $userId;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('english')->insert([
            [
                'user_id' => $this->userId,
                'question' => '引き起こした',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['caused']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を放送する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['broadcast']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相談する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consult']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '木材',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wood']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '問い合わせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inquire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前進する/前進，事前',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['advance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '発表，告知',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['announcement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '励ました',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['encouraged']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期限切れの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expired']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '懸案する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['concern']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '関係',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'はっきりしない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unclear']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '便利に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conveniently']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'お金を預ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deposit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '説明',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['explanation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '送り出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['launch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宿題',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assignment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '四半期',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quarter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '開発された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['developed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '建築',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['architecture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手配',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arrangement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一つの，一人の，独身の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['single']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '意見',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['opinion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '部門，部類',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['category']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を調節する，順応する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adjust']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'の後を追う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['follow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に沿って',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['along']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '著者，作家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['author']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '今まで',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ever']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を手に入れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['obtain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手順',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['procedure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '気づいた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['noticed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['college']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'をより好む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prefer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '社会の，社交の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['social']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '消費者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consumer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '会計士',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accountant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '現場で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['on site']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '導かれた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conducted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '承認する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['approve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を拡大する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expand']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（大規模な）会議',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convention']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '住宅',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['housing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解決法',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['solution']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貸す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lease']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ためらう',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hesitate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '目立った',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outstanding']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '規則的に，定期的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regularly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '国家の，国民の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['national']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '祝福',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['congratulation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '置き換えた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['replaced']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有名な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['renowned']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '参加',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['participation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '中身，目次/満足して',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['content']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感謝',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appreciation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '皮膚，皮膜',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['skin']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '参加者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['participant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を妨げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prevent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '成功',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['success']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を除いて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['except']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '由緒のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['historic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '提案した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proposed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '収容する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accommodate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '以前は',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['previously']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '労働',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['labor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '給付金/を与える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '混ぜる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '乗組員，一団',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crew']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頭，先頭',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['head']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '無農薬の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['organic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suitable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '比較できる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comparable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'でない限り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unless']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '率，割合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '場所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['location．']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同意，一致',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agreement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '暗示した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['implied']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '十分に，完全に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fully']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['especially']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'あいさつ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['greeting']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通常の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['usual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '(もまた)～でない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['either']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '展示者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exhibitor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '導入する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['install']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '探求',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '島',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['island']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '後悔する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regret']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '燃料',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fuel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '部門',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['section']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '国，いなか，地方',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['country']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '景観',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['landscape']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '個人的な，私的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['private']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '引換券',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['voucher']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '融資する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['loan']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '売り手',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vendor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '提案',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suggestion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を驚かせる/驚き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surprise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '公式の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['official']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '職場',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['workplace']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ボランティア，志願兵',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['volunteer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '着く，届く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reach']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '設計者、デザイナー',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['designer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '丸太、日誌',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['log']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'をほめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['praise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '戦略',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strategy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '確かめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['verify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適応，順応，方向付け',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['orientation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代理人，代理店',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貧乏な，かわいそうな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Poor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '伴侶、相方',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['partner']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '誰を（～する人）',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Whom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '広告',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['advertisements']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '法律の，合法な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['legal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '身分証明書',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['identification']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '延びる，を拡張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を移す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transfer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '重要な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['significant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実行された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['implemented']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '返済',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reimbursement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期間、用語',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['terms']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'いつもの/いつもの手順',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['routine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '応募者，候補者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['applicant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拡張',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extension']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '承認',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['approval']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を強調する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emphasize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '枝，支店',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['branch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '出前，仕出し',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['catering']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '彫刻',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sculpture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '指示された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['instructed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代わりの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alternate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投資',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['investment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '仮想の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['virtual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '倉庫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['garage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '議題',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agenda']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '積み荷/を積む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['load']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '購読，寄付',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subscription']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '出現，外見',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appearance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貴重な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['valuable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '要求される事柄，必要なもの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['requirement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '配布する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distribute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '受け入れられた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accepted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '影響を受けた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affected']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理由，原因',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reason']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '考慮している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['considering']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生産者，供給者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['provider']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひょう，図',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chart']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '再度計画する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reschedule']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大通り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['boulevard']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '役割',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['role']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知らせた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['informed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '役に立つ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['useful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '出発',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['departure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '能力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['skill']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '割引購入権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coupon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '市場、しじょう',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['market']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '進歩',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['progress']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '直接の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['direct']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '税',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tax']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正確な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accurate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '行政の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['administrative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地域，地方',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['region']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かなり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['significantly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '事実',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fact']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '農家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['farmer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '気づいている',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aware']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を結びつけて考える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Associate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '考慮された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['considered']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '訓練された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trained']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'する時はいつでも',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['whenever']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '上場した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['listed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を探索，探検する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['explore']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期待している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expecting']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '増加している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['increasing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '単に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['simply']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'つながる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['link']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '組織された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['organized']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資格のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eligible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '要旨，基本方針',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['keynote']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '気づき',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Awareness']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '引退した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retired']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一致団結した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['united']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特定の，特にその，気むずかしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['particular']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '責任がある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['responsible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見直している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reviewing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '複雑な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['complex']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '法人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['corporation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '限度，制限/を制限する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['limit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '付属物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attachment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '典型的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['typically']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '台所用品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['kitchenware']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '処理装置',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['processor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '詳細の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['detailed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '綿密に，密接に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['closely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '残念なことに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unfortunately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '表示された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['displayed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '必要な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['necessary．']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有効な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['valid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '比較的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relatively']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '報告された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reported']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頼りになる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reliable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '批評',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['critics']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感動した，印象付けられた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['impressed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '植物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を超えて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Beyond']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '洗剤',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['detergent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '表面',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surface']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見積り/見積る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quote']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['path']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '監査',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['audit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '穏かな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['placid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '玄関',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['porch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '習慣',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['custom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を提案する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['propose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '道具',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tool']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を断る，衰退する/低下，衰退',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['decline']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '請求書，紙幣，法案',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bill']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '我慢強い/患者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['patient']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '移転',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relocation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '商品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['merchandise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '内部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interior']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '店員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clerk']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '家族，家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['household']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '政府，統治',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['government']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '入場',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entry']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '旅程',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['itinerary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かわいそうに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['poorly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '主導権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['initiative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手配された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arranged']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '昼食',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['luncheon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '比較された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compared']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '作動させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['activate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '集める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['collect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '科学者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scientist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拡大された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expanded']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '利益',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['profit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '状態，社会的地位',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['status']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実習',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['internship']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '入手できる，お金の足りる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affordable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '移転させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relocate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '名刺',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['business card']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '想定した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supposed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '荷物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['baggage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を集める，集まる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gather']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '便利',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convenience']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '住所氏名録',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['directory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '延期する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['postpone']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '芸術作品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['artwork']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絵，写真',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['picture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期間，時代',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['period']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '効率性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['efficiency']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '～周年',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anniversary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'お祝いする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['congratulate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '才能のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['talented']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '研究所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['institute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '電気',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['electricity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '長さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['length']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '編集者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['editor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食料品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grocery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'よく似た',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['similar']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適切に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['properly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生産性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['productivity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '2回',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['twice']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ノートパソコン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['laptop']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '許可',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['permission']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '参加した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['participated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '競技の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['athletic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '競争力のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['competitive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代弁者，代表者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spokesperson']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '傾向，流行',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '多様な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diverse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資金',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fund']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明らかにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clarify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '徹底的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thoroughly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を取り除く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remove']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を手で扱う，にうまく対処する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['handle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '喜んで',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['delighted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '身体の，物理的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['physical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '関与する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['involve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理想/理想の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ideal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '並外れた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exceptional']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自信のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confident']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '広範な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extensive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '責任',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['responsibility']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '競争する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compete']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '等しい/に等しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を求める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['seek']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '話，陳述，声明',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['statement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実験室',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['laboratory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ついに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['finally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代表取締役',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['CEO']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に向かって',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['toward']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '批評家，批判者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['critic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '図，表',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['figure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を比較する，をたとえる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compare']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '全体の，全体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '居住の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['residential']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '合理的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reasonable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '描く，引く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['draw']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を引きつける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attract']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '株式会社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['corporation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予期せぬ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unexpected']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '忠実な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['loyal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '催促',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reminder']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '足跡',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['track']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前の/前者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['former']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '長期的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['long-term']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実際に，現実に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['actually']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期待した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anticipated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '休息する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '価値/を重んじる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['value']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明るい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bright']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地方の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regional']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通知',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['notification']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頼る，信頼する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'このように',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thus']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'パン菓子',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pastry']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '状態，国家，州',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['state']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '短い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brief']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '洞察',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insight']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '操作する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['operate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寺院',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['temple']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を捜す/探索，捜索',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['search']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '内部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['internal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '極めて重要な，非常に深刻な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['critical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最大の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['maximum']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '瞬間，時',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['moment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'とても，高く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['highly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '改善',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['improvement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正確な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exact']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '植物の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['botanical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '美しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lovely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '目立たせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['highlight']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '委員会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['committee']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手段',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['means']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '優先の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prior']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頻繁な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['frequent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '現れる，のように思われる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appear']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '原因/の原因となる，',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cause']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '出版社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['publisher']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '概要',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outline']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宿泊施設',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accommodation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '研究室',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lab']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資金調達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['funding']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '供給者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supplier']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '機械',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['machinery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同僚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coworker']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '販売員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['salesperson']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '受付係',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['receptionist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を統治する/規則，習慣',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rule']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '背景，経歴',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['background']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適当な，適切な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appropriate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '製造する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['manufacture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '割り当てる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assign']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '競合他社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['competitor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を分析する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['analyze']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不便な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inconvenient']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '応接',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reception']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '経済学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['economics']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不完全な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incomplete']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一時的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['temporarily']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自動車',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['automobile']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '弁償する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reimburse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '販促の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['promotional']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '市長',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mayor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '閉鎖',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['closure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '減少する/減少',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['decrease']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寄付',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['donation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '習慣',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['habit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '近所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['neighborhood']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '具体的な，特定の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['specific']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '出版物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['publication']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を含む，が入っている',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '冷蔵庫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refrigerator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実証する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demonstrate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '優先度',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['priority']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '個人の，個々の/個人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['individual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '選挙',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['election']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '許可する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['authorize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人物像',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['portfolio']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひらめき',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inspiration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を保存［保護］する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preserve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '利益のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['profitable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '使命、任務',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mission']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '採用する、雇う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recruit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '本部',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['headquarters']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '敏感な，神経質な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sensitive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '卒業する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['graduate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '毎年の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Annually']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '進行中の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ongoing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '学芸員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['curator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '専門知識',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expertise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に近づく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['approach']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '草案',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['draft']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地域，地区',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['district']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '数千の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thousands of']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '学部',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faculty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '陳列棚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['showcase']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '準備',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preparation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を取り除く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eliminate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'めったに～ない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rarely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '評判',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reputation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '例外',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exception']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '十分な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adequate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解決する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resolve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '陰',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shade']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '底',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bottom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '多国籍の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['multinational']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '集合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assembly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['particularly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '金属',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['metal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['specifically']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '逃げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vacate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'の価値がある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['worth']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '安価な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inexpensive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '経済の，経済的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['economic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '舞台',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arena']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資格',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['qualification']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '早速',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['promptly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明確に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clearly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'アジア',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Asia']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人気',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['popularity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'にもかかわらず',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['despite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '依存する，次第である',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を達成する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['achieve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '環礁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lagoon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '柔軟な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flexible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不便',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inconvenience']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '提出',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['submission']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '～経由で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['via']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'だと思う，を推測する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['guess']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '注意深い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attentive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'さもなければ，それとは違うように',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['otherwise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '条例',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ordinance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'やかん',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['kettle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '組み立てる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assemble']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '主として',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['largely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '後部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rear']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '電気の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['electrical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '泥',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dirt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '新鮮な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crisp']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'である一方で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['whereas']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '問い合わせ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inquiry']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '均等に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evenly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '～のように思われる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['seem']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理性のある，理にかなった',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reasonable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '群衆',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crowd']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '収益',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revenue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解決',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resolution']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '娯楽',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entertainment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を保証する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['guarantee']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '所有権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ownership']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小売業者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retailer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人口，国民',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['population']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '文房具',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stationery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '機密の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confidential']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '環境，状況',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['environment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を得る/獲得',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資産',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['asset']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '急速な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rapid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投資する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['invest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（動植物の）種',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['species']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '泉，春',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spring']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '努力する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '潜在的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['potentially']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '好み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preference']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '動機',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incentive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '革新',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['innovation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '流れる/流れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を結合させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['combine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '卸し',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wholesale']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '想定，思いこみ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assumption']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '評価',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['valuation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '義務',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['obligation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を見分ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['identify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '出口',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outlet']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '平らな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代わって',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['behalf']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生まれ故郷の，生来の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['native']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '国内の，家庭内の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['domestic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '世紀',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['century']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '仕様',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['specification']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '高める，増す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enhance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '水星',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Mercury']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '構造',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['structure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分野',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sector']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '灰',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ash']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '準拠する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comply']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '株主',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shareholder']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '評価',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assessment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '輸出者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exporter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '産出する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['yield']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を輸出する/輸出',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['export']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '広告',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Ad']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '上階',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['upstairs']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '場面',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scene']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '力量，能力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['competence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '欠陥',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['defect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '容器',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['container']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を噛む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見地，視座',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perspective']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '信頼，信仰',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faith']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '忠実に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faithfully']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '主として',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['primarily']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ごみ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rubbish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を貼り付ける，を取り付ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attach']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '子会社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subsidiary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '洞察（力），知覚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perception']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不思議に思う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wonder']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '目標、目的',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['objective']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を設立する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['establish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投票',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['poll']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '関連のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relevant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に食べ物を与える，を養う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['feed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投票する/投票',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vote']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保持',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retention']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '外部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['external']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '織物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fabric']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を発生させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['generate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'お土産',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['souvenir']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '欠点',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['downside']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大臣',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['minister']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '借金，負債',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['debt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '雇用者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['employer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を維持する，だと主張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['maintain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '所得',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['income']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '木材',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['timber']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '形/を形作る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shape']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '化学の/化学製品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chemical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '冒険的事業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['venture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '疑問',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['query']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食器棚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cupboard']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '引き出し',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['drawer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '該当する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['applicable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特定する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['locate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '容量',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '式',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['formula']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '囲む、同封する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enclose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '機関',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['administration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '魅力/を魅了する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['charm']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保守的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conservative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を稼ぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['earn']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '田舎',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['countryside']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '取引',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transaction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '排他的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exclusive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '製造元',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['maker']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '経済',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['economy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '効果的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['effectively']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実施する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['implement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期待',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expectation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '独立した，自立した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['independent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '取得',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acquisition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '海の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['marine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手数料',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commission']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '持続可能な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sustainable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大きさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bulk']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '包括的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comprehensive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '捧げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dedicate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寄付，貢献',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contribution']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '添付',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attachment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を決める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['determine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '量',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quantity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '排出口',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '天井',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ceiling']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '起源',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['origin']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '延長時間，残業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overtime']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '停電',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '払い戻し/払戻す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rebate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '創作',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fiction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '栄養',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nutrition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不足',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shortage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '方法',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['method']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '照会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['referral']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '質問表',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['questionnaire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '失望',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disappointment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '値する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deserve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '証拠',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proof']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '聴衆，観客，視聴者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['audience']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '親しみやすさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['friendliness']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '化学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chemistry']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '味/な味がする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['taste']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資金調達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fund-raising']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '計算',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['calculation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '処方箋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prescription']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を果たす，をかなえる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fulfill']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '協力する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['collaborate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '薬局',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pharmacy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '谷',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['valley']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資格を与える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['qualify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '裁判，試み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '検査官',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inspector']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '認識する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recognize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に付き添う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accompany']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を反映する，熟考する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reflect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '成就，達成',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accomplishment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保存',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preservation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '滑る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['slip']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '破壊',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disruption']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '監督する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supervise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '農業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agriculture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '学会、協会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['academy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自慢する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['boast']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '監督',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supervision']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見習い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['apprenticeship']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を表す，を代表する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['represent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '礼儀',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['courtesy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拡張',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expansion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '問題処理',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['troubleshooting']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '立証',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['verification']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '呼び戻す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recall']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '可能にする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鉱石',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ore']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '簡易キッチン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['kitchenette']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寄付する，貢献する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contribute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を注ぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pour']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相対する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['counter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '称賛する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acclaim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '10年',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['decade']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '削減',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reduction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '版',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['edition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '目的地',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['destination']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '歩行者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pedestrian']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '桟橋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pier']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '辛抱強さ，忍耐',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['patience']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ガソリン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gas']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '局面',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aspect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '状況，情勢',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['situation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '住宅',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['residence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理想郷',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['utopia']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '比較',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comparison']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '改修する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refurbish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '池',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pond']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に備え付ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equip']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '編集する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compile']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保証する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遷移',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '惣菜',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['delicatessen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代替となるもの/代替の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alternative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '歩道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['walkway']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '謝罪',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['apology']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '失敗，失敗作，失敗者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['failure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '亀裂',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crack']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理解',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comprehension']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小説/新奇な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['novel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '圧倒する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overwhelm']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に影響を与える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '破片',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['debris']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感謝して',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grateful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '評価する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evaluate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '料理',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cuisine．']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '子供時代',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['childhood']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '柱、段',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['column']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寿命',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lifetime']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '回転する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rotate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '温度，体温',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['temperature']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '虹彩',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['iris']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '才能',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['talent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '重要性，意義',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['significance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '周波数',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['frequency']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頂上',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['peak']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '変える，変更する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '利用する，活用する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['utilize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '存在',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['presence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '企業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enterprise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '歩道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sidewalk']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '光学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['optics']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を検査する，を調べる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['examine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貢献者，寄与者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contributor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '約束',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['engagement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '整列させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['array']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '名誉，敬意',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['honor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '追加，付録',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['addendum']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '残り物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['leftover']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '財布',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['purse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を刺激する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stimulate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小麦',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wheat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '汚れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '推察する，考える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['infer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '要求，需要/…を要求する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demand']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予約',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['booking']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見て回る，拾い読みする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['browse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '緩む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['loosen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感心，称賛',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['admiration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '非難する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blame']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '労働力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['workforce']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '往復運転で運ぶ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shuttle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解雇する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通勤する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を実現する，達成する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '告白する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confess']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '挨拶する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['greet']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貯蓄，値引き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['saving']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '従う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['obey']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '展示/展示する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['display']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を除く，排除する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exclude']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '履歴書',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['résumé']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '反応',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['feedback']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'はしご',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ladder']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '禁止する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prohibit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '決定，決意',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['determination']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '磨く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['polish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '結ぶ，ネクタイ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tie']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '家賃/賃貸借する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を強化する，増加させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['boost']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '検査する，点検する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inspect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予約する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['book']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予見する，予測する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['foresee']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '差し込む，接続する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plug']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '縫う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sew']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寄りかかる，かがむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lean']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保存する，蓄える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['store']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '任命する，指名する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appoint']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '安堵，軽減',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relief']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '花瓶',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vase']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'テラス，中庭',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['patio']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '離陸，出発',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['takeoff']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '灯台',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lighthouse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '噴水',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fountain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（取引，業務など）を行う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transact']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '撤回する，引き出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['withdraw']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '割り当てる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allocate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '確率，可能性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['probability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期限切れ，（契約などの）終了',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expiration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '申し込み，応用',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['application']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（荷物など）を降ろす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unload']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'テーマ，論題',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['theme']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を廃止する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['abolish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '中断する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suspend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '書類，書類作業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['paperwork']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '復旧させる，取り戻す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['restore']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '開始する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['initiate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '無視する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disregard']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '交流する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interact']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '管理する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['administer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を身につける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acquire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '端',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['edge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拘束、きずな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bond']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '連合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consortium']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '連携させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affiliate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '陸軍',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['army']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '乱雑',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clutter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '友達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '目撃者，証人/…を目撃する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['witness']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '密集した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conglomerate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '膜',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['membrane']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '膨張',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inflation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '方程式',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宝庫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['treasury']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '報酬',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remuneration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '補償',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compensation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '補償',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['indemnity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '変化しやすい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['variable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '封建君主，…卿，（（大文字で））神',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lord']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '武器',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['weapon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '表現',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expression']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '秘書',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['secretary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '反対',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['opposition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '反逆者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rebel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '箱',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '爆弾',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bomb']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '配当',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dividend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '能力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '入り江',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inlet']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特許',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['patent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同意',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consensus']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '動機付ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['motivate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '動き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['motion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統合する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consolidate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統合する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['integrate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['union']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consolidation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投資家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['investor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '土',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['soil']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '伝送',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transmission']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '天',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['heaven']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '締める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tighten']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通貨',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['currency']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頂上',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['summit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '跳ぶ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['leap']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '調達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['procurement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '仲裁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arbitration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知能，諜報',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intelligence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '団結',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '逮捕する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arrest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '待つ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['await']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '存在する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '送信する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transmit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '争議，口論',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dispute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '訴訟',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lawsuit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '選定する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['designate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '責任',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['liability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '責める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['condemn']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '世代',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['generation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '水素',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hydrogen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '肖像画',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['portrait']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '勝利',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['victory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '柔軟性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flexibility']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '終了',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['termination']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '収束',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convergence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '首都',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capital']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '借り方',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['debit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '社会規範',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compliance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実装',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['implementation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '事件',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incident']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '支出',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expenditure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '指示者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['indicator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '思い切って…する，生意気にも…する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dare']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '細胞',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cell']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '再構築する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['restructure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '挫折させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['frustrate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '骨格',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['framework']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '抗議する/抗議',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['protest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '公平',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '交渉する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['negotiate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '原理・原則，主義',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['principle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '憲法',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['constitution']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '結婚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['marriage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '計算する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reckon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '計画',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scheme']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '刑務所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prison']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '群れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['troop']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '勤勉',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diligence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '教会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['church']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '供給',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['provision']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '給与',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['payroll']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宮殿',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['palace']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '犠牲者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['casualty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '騎兵',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cavalry']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '軌道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['orbit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '規定者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regulator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '祈り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prayer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期間，学期，用語，条件，間柄',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['term']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '管理者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['administrator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '幹',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stem']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '滑り止め',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['skid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '割り当てる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allot']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '覚え書き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['memorandum']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '獲物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prey']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '改訂する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '会長',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chairman']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '会社，事業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enterprise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '果肉',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pulp']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '家主',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['landlord']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '加速する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accelerate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '炎',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flame']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '援助/…を助ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '衛星',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['satellite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '引用',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quotation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一目見る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['glance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一編み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stitch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '医薬品の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pharmaceutical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '違反',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['breach']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '委託、献身',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commitment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '委託',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consignment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '安定',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ポンプ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pump']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ぴんと上げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perk']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に従って',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pursuant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'トンネル',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tunnel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'こぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['row']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'くっつく，固執する/棒きれ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stick']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'くい、棒',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stake']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'お話',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tale']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'うなずく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nod']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '10億',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['billion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '100万',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['million']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を負かす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['defeat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を折りたたむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fold']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を出版する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['publish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を雇う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['employ']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を観察する，を遵守する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['observe']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'のふりをする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pretend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '(故意の）殺人/…を（故意に）殺す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['murder']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '取ってくる，誘い出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fetch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '咲く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bloom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前提，建物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['premise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鑑定，見積もり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appraisal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '基準',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['criterion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相違，分散',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['variance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '収益性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['profitability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '間接の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overhead']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '証明書',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['certificate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '引継ぎ，買収',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['takeover']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '倒産',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bankruptcy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資本化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capitalisation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '節，条項',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clause']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鑑定人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appraisee']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '片付け，除去',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clearance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貨物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cargo']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '現金流量',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cashflow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '仲裁人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arbitrator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '株主',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stockholder']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '商標',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trademark']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '停車場，倉庫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depot']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demerger']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '仕様',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spec']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '売上高，転職率',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['turnover']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解雇',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['layoff']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '債務超過',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insolvency']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '接近，加盟',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accession']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '仲介',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brokerage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '核となる技術',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['core competency']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '民営化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['privatization']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '流動性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['liquidity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '兆',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trillion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '会計職',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accountancy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['niche']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投機家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['speculator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '戦術',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tactics']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '株式',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equities']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '強化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enhancement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '債権者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['creditor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '減価償却',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depreciation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保険会社',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insurer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '当座貸越',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overdraft']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '競争，対抗',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emulation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '申し立て',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allegation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '債権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['receivables']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相乗効果',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['synergy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '規制緩和',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deregulation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '桁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['digit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '足場',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scaffolding']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '借入',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['borrowing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '根底にある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['underlie']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保険債務を負う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['underwrite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '負う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incur']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '主張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allege']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '現金化する，清算する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['liquidate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '方向づける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['orientate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '接点',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interface']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '外注する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outsource']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小包',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['parcel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '無法者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outlaw']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '基準',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['benchmark']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分解，解像度，決心',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resolution']
                ]),
            ],
        ]);
    }
}
