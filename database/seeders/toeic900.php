<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class toeic900 extends Seeder
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
                'question' => '首都，資本',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capital']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '公平，普通株',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見積り，引用',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quotation']
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
                'question' => '安定性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stability']
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
                'question' => '統合する，合併する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consolidate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひとめ見る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['glance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひと編み，縫い目',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stitch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '招く，負う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incur']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '気の利いた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spruce']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人工的な，作り物の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['artificial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '金融の，金銭の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['monetary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '法廷の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['statutory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期待する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anticipate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '排水，排水路',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['drainage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '成分，部品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['component']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '悪化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deterioration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '権威',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['authority']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通勤者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commuter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大陸',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['continent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '創設者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['founder']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '説明する，図解する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['illustrate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同意する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '骨組み，枠組み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['frame']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '科学の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scientific']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頑丈な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sturdy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '周囲',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perimeter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '半島',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['peninsula']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '熱狂的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enthusiastic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '離れて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['apart']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '事務局，たんす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bureau']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '出発する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depart']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '払い戻された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reimbursed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '給料',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['paycheck．']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '献身的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['devoted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '永久の，常設の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['permanent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '対面で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['in-person']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '芸術的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['artistic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひも、糸',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['string']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '四人組',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quartet']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '進路、趣旨',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tenor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひとまとめ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['batch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '農業の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agricultural']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '続ける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['carry-on']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '尾根',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ridge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '補足',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supplement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見通し，見込み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prospect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同様に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['likewise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を正当化する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['justify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '現実的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['realistic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '健康',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wellness']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '哺乳動物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mammal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '返金不可の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nonrefundable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'の邪魔をする，を中断させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interrupt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統計',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['statistics']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '服装',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正確に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accurately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '薬剤師',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pharmacist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '航空，航空機産業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aviation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '支持する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['endorse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '配布物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['handout']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '記念碑',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['monument']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通行料金',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['toll']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '事実を記録した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['documentary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '身に付けることの出来る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wearable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '促進する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expedite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不注意な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inattentive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '取り戻す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retrieve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '故障',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['malfunction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一貫しない，矛盾した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inconsistent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '発生する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['occur']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '望ましくない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['undesirable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '外科医',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surgeon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '監督',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['superintendent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寄付する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['donate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '褒め言葉',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compliment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'お店の中で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['in-store']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拒否する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reject']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '管理人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['custodian']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '持ち物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['belongings']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '検証する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['validate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '家庭教師の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tutorial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '安心させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reassure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '欠席の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['absent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '電気の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['electric']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '過剰予約する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overbook']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食事券',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['meal voucher']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を拒否する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refuse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '許す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['excuse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手芸',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['handicraft']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '勘違いする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['misunderstand']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ゆるんだ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['loose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'きちんとした',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['neat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '東洋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['orient']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '社交的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outgoing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '巨大な，途方もなく大きい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['colossal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前例のない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unprecedented']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鉱物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mineral']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '再設計，再設計する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['redesign']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '職務、義務',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['duty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '豊かにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enrich']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '誠実な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['truthful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '多様性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diversity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '構成する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '迂回する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['detour']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '厳格な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rigorous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正式に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['formally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '速報，告示',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bulletin']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '現在の，現代の，同時代の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contemporary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '非常に大きな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vast']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '粘土',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clay']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '陶器',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pottery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分，議事録',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['minute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ともかく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anyway']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '再構成',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reconfiguration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に影響を及ぼす/影響',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['influence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '読み書き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['literacy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '処方する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prescribe']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小児科の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pediatric']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '歯科',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dentistry']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '暫定の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tentative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'まもなく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shortly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'たくさん',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plenty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '検診',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['checkup']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相当大きな、かなり多くの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sizable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '空洞，虫歯',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cavity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '口頭の，口の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['oral']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '流れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stream']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '衛生',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hygiene']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を耕作する，を栽培する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cultivate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '血の気のない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wan']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '入学する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enroll']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前提条件',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prerequisite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'の余裕がある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['afford']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひどい，不快な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['terrible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寮',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dormitory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見事な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['superb']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '願望/を強く望む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['desire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '白熱した、真っ赤に熟した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['glowing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '設立',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['establishment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大工',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['carpenter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '時間厳守の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['punctual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '綴り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spelling']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '認めた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acknowledged']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '親切な行為',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['favor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '好ましい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['favorable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かすかな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['slight']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ウイルス',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['virus']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予測',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prediction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かなり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['considerably']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を調査する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['investigate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '達成',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['achievement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '近さ，近接',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proximity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'めったにしない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['seldom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正体を現す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unveil']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '垣根，防止策',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hedge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '都会の，都市の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['urban']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '委託された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commissioned']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最終的には',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eventually']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '干渉する，阻害する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interfere']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明快さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clarity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '変換',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conversion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '欠点のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faulty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貸す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '訴える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'をがっかりさせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['discourage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '沈む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sink']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '年代記',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chronicle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ここに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hereby']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '職業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['occupation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '対立，争い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conflict']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '本物の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['authentic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '壮観な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spectacular']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に帰する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attribute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '全く同じ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['identical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '具体的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['concrete']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鶴',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crane']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '調和させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['harmonize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '補足物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['complement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'の重さがある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['weigh']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '空いた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vacated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '納屋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['barn']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '肥料',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fertilizer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '家電',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['home appliances']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生ゴミ，くず',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['garbage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '装飾',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['decor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '安心，再保証',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reassurance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '多才な，多目的に使える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['versatile']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '携帯できる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['portable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '例外的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exceptionally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'わずかに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['slightly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '就任させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inaugurate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '結果として',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['as a consequence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '提案，主張',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proposition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前衛',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vanguard']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '腐敗，損傷物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spoilage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '措置，測るもの/を測る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['measure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '異議',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['objection']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '伝記',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['biography．']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '幸運な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fortunate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '読みやすい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['readable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '廃棄',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disposal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '当初の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['initial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '補足の，付録の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supplementary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '重大な，必然の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consequential']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '根気強い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['persistent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '協力的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cooperative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '抜粋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['excerpt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正確な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['precise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '差し引かれた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deducted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を決着させる，落ち着く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['settle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '完全に，全く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entirely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '多数の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['numerous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '白紙の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blank']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '欠員，空き',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vacancy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代替する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['substitute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '意欲',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['willingness']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '抽象的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['abstract']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '広大さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vastness']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '批判的に，危なく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['critically']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '社内で，組織内で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['in house']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '弁護士',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attorney']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '助言，相談，弁護士',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['counsel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '表現',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['representation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '安定した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '編集する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['edit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絶対に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['absolutely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '再浮上した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resurfaced']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '規模',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scale']
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
                'question' => '不満',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dissatisfaction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '比率，割合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proportion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '行きやすい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accessible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通った跡，でこぼこ道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trail']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '青ざめた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pale']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '琥珀',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['amber']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小計',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subtotal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食器',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tableware']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を保持する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予期していない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unanticipated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '事務職の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clerical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '持ちあげる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lift']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '評価',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evaluation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '程度',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '熱狂的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enthusiastically']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を認める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['admit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '悪化させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['worsen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '違反',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['violation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'の存在［正しさ］を認める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acknowledge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '何気ない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['casual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '継続的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['continual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '変形',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['modification']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '包囲',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enclosure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '内部の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inner']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '繰り返し',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['repeatedly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '配膳，食事提供',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['carting']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '退会する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unsubscribe']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'いとわない，やぶさかでない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['be willing to']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '合間',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['meantime']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '到達するのが難しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hard-to-reach']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '日常的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['routinely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '顧客満足',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['customer-satisfaction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '除去',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['removal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '配管工事',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plumbing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '訴える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appeal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '融合，溶解',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fusion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '三日月',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crescent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食堂',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eatery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '才能，勘',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flair']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遺産',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['heritage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '簡易食堂',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diner']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '景品，無料サンプル',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['giveaway']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '時折の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['occasional']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '編集の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['editorial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '膨らませる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inflate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '移すことのできる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transferrable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '家族経営の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['family-owned']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '永続的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lasting']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を楽しませる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entertain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '描く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['portray']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'それぞれ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['respectively．']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '巡航する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cruise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '関与した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['involved']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '受託者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trustee']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '金星',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['Venus']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '余暇',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['leisure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を確保する，を安全にする/ゆるぎない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['secure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['umbrella']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正確［厳密］に，ちょうど',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exactly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '伝説の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['legendary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '成り立つ，存在する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひも、くさり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['leash']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '乗り出した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['embarked']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同等に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '構成，楽曲',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['composition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '劇的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['drastically']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'けが',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['injury']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '切れ目',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rift']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実質的に，ほとんど',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['practically']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '用心深い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prudent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ねらいをつける/目的',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '関連性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relevance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感覚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sensation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '強調',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emphasis']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最初に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['initially']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一般的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['generally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '変化、変動',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['variation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '印象',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['impression']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'どこにも',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nowhere']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最適化する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['optimize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最適の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['optimum']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を強化する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strengthen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地域',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['territory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '階段',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['staircase']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '開示する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disclose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '花嫁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bride']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '豊富な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['abundant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '印象的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['striking']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最終的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ultimately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大西洋の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['atlantic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '著しく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['significantly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '持続する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['last']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '豊富さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['abundance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '主要な，最重要の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prime']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '費用対効果の高い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cost-effective']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一致する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['corresponding']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '象徴',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emblem']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '祭り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gala']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明細，内訳',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['breakdown']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '情熱，熱意',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enthusiasm']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一線級の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['top-of-the-line']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '優越点',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['superiority']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ぎこちない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['awkward']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'まともな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['decent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '批判',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['criticism']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'まとめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['summarize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '避けられない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unavoidable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '事情',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['circumstance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '使いやすさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['usability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '目立つ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['noticeable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cast']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '行使する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exert']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不可能な，だめな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['impossible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '封筒',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['envelope']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を予想する，を予測する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['predict']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'およその',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['approximate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '角のある，角度のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['angular']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '刺激的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stimulating']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demolition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '推論',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reasoning']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '本質的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['essentially']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '全く，全然',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['utterly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正確さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['precision']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '時間厳守',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['punctuality']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '重要な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crucial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特性，特徴',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trait']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '調査',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['investigation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '神秘的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mystery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '債務不履行',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['default']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '巨大な，大規模な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['massive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自由',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['liberty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '扱いやすい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['manageable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保証',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assurance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '微妙な，繊細な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['delicate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '複雑さ、混乱',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['complication']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '複雑な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['complicated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '複雑にする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['complicate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '添付する，固定する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affix']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正当化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['justification']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'その次の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subsequent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '耐える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['withstand']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '赤道',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代弁者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spokesman']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '耐えられる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tolerable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '耐える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tolerate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '雨量，降雨',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rainfall']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '多様化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diversification']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '陰になった',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shady']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '防水の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['waterproof']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '素早く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rapidly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '埋め立て',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['landfill']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '促した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prompted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を追い求める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pursue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '衛生的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sanitary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '台本',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['script']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '声に出して',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aloud']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不意打ち',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['foray']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '単独で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['solely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '抽出する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extract']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '養う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nourish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '組み合わせ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['combination']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '論理的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['logical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を横たえる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lay']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '排出させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['drain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '平らにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flatten']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を疑う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suspect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '素人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['amateur']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '日誌、日記',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['journal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '尊重する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['esteem']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '指名',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nomination']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '記録保管場所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['archive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '公開討論会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['forum']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['integration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ガソリン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['petrol']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '免除，棄権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['waiver']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '互換性のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compatible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遅れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lag']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保存する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conserve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '調整',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adjustment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '抜く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unplug']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '典型的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['typical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '取り除く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'しっかりと',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tightly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '所有者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proprietor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '乗り継ぎ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を自分のものにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adopt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '重要なことに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['importantly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '織物の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['textile']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '伝統',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tradition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '装着性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wearability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手作りの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['handcrafted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '衣服',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['garment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知り合い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acquaintance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '研ぐ，尖らせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sharpen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '平日',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['workday']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '興味をそそられる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intrigued']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '述べた，言った',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remarked']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'の意味を明確に述べる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['define']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '業界全体の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['industry-wide']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を経験する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['undergo']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '運搬する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['haul']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '合法的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['legally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ごつごつした，粗い，大雑把な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rough']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '固定した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fastened']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '禁止された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prohibited']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手当',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allowance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '日々の，毎日の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['day-to-day']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保守的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conservatively']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '未発表の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unpublished']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '激しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intense']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '発見する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['discover']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '発見',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['discovery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を区別する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distinguish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '説得する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['persuade']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を変える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'たぶん',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supposedly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '力を与える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['empower']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前述の，先行している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preceding']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '値する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deserving']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'に感銘を与える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['impress']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '息をのむような',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['breathtaking']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '紹介，導入',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['introduction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'その上に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['furthermore']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '翻訳',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['translation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'いくぶん',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['somewhat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '容易さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ease']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '伴う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entail']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '読みやすさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['readability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '隔週の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['biweekly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '執行',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enforcement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '田舎の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rural']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '穀物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '浸す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['soak']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '暴露',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exposure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '次第に消えていく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fading']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最先端の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cutting-edge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '継ぎ目',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['joint']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'おおよそ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['approximately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正方形',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['square']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '外観',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exterior']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '十分な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sufficient']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '隣接している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adjacent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絶縁された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insulated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '戦闘',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['combat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適切に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adequately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拡大する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enlarge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '満足のいく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['satisfactory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を輸送する/輸送',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['transport']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '消費',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consumption']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '回復する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recover']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '勇敢な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bold']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '旗艦',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flagship']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '風味',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flavor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '足元，階段',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['step']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '証拠',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evidence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '持続時間',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['duration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '排他的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exclusively']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'にぎやかな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lively']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '合体させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['incorporate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同情する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sympathize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感情',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sentiment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '否定の，悲観的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['negative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '細心の注意を払って',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['meticulously']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '診断する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diagnose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を扱う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['treat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '排出',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emission']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '修正する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['modify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '建設的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['constructive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を組み立てる，を建造する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['construct']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'どこか',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['somewhere']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '熟達',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proficiency']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '疑わしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['questionable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を想定する，とみなす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assume']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '楽しみ，喜び',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pleasure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '指示する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['instruct']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '著作権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['copyright']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食事の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dietary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '以前は',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['formerly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '障害',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['obstacle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '試験',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['examination']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'なめらかな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sleek']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '幸いにも',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fortunately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '可能性がある，しかねない，有能な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '影響を受けやすいです',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['susceptible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '障害のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disabled']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '床から天井まで',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['floor-to-ceiling']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前菜',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appetizer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '漏れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['leak']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絶縁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insulation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '主流',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mainstream']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一年中続く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perennial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '熱望，強い関心',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['passion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aptitude']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を翻訳する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['translate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '運賃',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fare']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'もろい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fragile']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '時代',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['era']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '空っぽの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vacant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特有の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distinctive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '美的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aesthetic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'その結果',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consequently']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '定刻の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['on-time']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小切手',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cheque']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '欠点，過失',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fault']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '誓約',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pledge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '包む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wrap']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '積み重ねる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stack']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '提唱する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['advocate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'すばらしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brilliant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'おかしな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['funny']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '薬草',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['herb']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '補償する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compensate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '今後の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['forthcoming']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一生の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lifelong']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '落とし穴',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pitfall']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正直な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['honest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '進行役',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['facilitator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '素早く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['swiftly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '厳しく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rigidly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '煮る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['simmer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '郊外の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suburban']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '試作品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prototype']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '力/を強制する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['force']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大使',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ambassador']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '混合物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compost']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '考慮',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consideration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '過ぎる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['excess']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統合的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['synthetic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '傷つきやすい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vulnerable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '強制的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mandatory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '超える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exceed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '武器，兵器',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arms']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '厳しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['severe']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'しおれる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wilt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を無視する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ignore']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寛大さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['generosity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '努力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['endeavor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'と一緒に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alongside']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '従事している，婚約している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['engaged']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '贅沢，贅沢品/贅沢な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['luxury']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '連立、連合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coalition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '連続、連鎖',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sequence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '連れ，仲間',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['companion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '劣った',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inferior']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '礼儀正しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['polite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '類似（点）',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['similarity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '立法',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['legislation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '離婚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['divorce']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理性的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rational']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '要素',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['element']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '要求する，主張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '要因，要素',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['factor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '溶ける，を溶かす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['melt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '幼児',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['infant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有罪の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['guilty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有害な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['harmful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '勇気',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['courage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '目立った，顕著な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remarkable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '毛皮',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fur']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '面白みのない，鈍い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dull']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明確な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['definite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明らかな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evident']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '夢，大望',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ambition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '民主主義の，民主的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['democratic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '民主主義',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['democracy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '本物の，偽りのない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['genuine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '本能',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['instinct']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頬',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cheek']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '望ましい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['desirable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '暴行',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['assault']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '方言，なまり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dialect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '崩壊する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['collapse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宝，財宝',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['treasure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '墓/深刻な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grave']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '変な，奇数の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['odd']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '平等さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equality']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '文明',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['civilization']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '文字通りに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['literally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '文学の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['literary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '文学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['literature']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '雰囲気',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['atmosphere']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分別［判断力］がある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sensible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '物理学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['physics']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '物体，対象，目的/反対する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['object']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '物質，実体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['substance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '複雑さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['complexity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '幅が狭い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['narrow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '部族，部隊',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tribe']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '浮かぶ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['float']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '普遍的な，万国［万人］共通の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['universal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '普通でない，並はずれた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extraordinary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不利，デメリット',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disadvantage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不愉快な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unpleasant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不況，景気後退',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recession']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '病気',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disease']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '必然的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['necessarily']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '微妙な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subtle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '非常に大きな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tremendous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '非常に大きい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enormous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '避けられない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inevitable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '悲劇',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tragedy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '犯罪',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crime']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '反対の/と反対側の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['opposite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '反対の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contrary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '発音',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pronunciation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '爆発',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['explosion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '肺',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lung']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '馬鹿な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['silly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '馬鹿な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stupid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '破裂する，を破裂させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['burst']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '破壊',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['destruction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '妊娠した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pregnant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '独立，自立',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['independence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特派員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['correspondent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['privilege']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '徳，美徳，長所',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['virtue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '討論',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['debate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '等しい，同等の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['equivalent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '土台，根拠，設立',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['foundation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '天才',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['genius']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '哲学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['philosophy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '締めくくる，という結論を下す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conclude']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '抵当',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mortgage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '定義',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['definition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '追跡，追求',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pursuit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '賃金',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '調和',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['harmony']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '調合する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compound']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '潮，風潮',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tide']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '恥，不名誉，残念なこと',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shame']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知能の高い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intelligent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知的な，知性の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intellectual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '炭素',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['carbon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '単に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['merely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '第一の，主要な/校長，学長',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['principal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大統領の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['presidential']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大多数，大半',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['majority']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大声を上げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['yell']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大雑把に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['roughly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '対照',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contrast']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '対処する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cope']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '妥協',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compromise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '葬式',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['funeral']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相手',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['opponent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '祖先',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ancestor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '先入観，偏見',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prejudice']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絶滅',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extinction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絶対的な，完全な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['absolute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絶え間ない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['constant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '切望した，熱意のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['keen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '赤字',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deficit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '精神の，精神的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spiritual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生物学上の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['biological']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生の，原料のままの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['raw']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '正確に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['precisely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '政権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regime']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '成熟した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mature']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人種の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['racial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '進化する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evolve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '進化，進展',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['evolution']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '親密な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intimate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '神話',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['myth']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '深い，大きな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['profound']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '振る舞う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['behave']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '心理学者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['psychologist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '心配，不安',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anxiety']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '心地の悪い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['uncomfortable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食欲',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['appetite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '職業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['profession']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '植民地',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['colony']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '乗客',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['passenger']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '衝動',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['impulse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '症状',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['symptom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '少数派',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['minority']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '商人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['merchant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '初歩の，基本の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['elementary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '重荷，負担',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['burden']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '従来の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conventional']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '住む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dwell']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '集中する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['concentrate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '修正',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['amendment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宗教',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['religion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '収穫物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crop']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '収穫/を収穫する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['harvest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '種類',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sort']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手の込んだ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['elaborate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手がかり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '社会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['society']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実験',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['experiment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '失礼な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rude']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '失業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unemployment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自信，信頼',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confidence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自殺',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suicide']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '時折',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['occasionally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '事柄，出来事',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affair']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '試み/を試みる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attempt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '使用人，お手伝い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['servant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '仕事，作業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['task']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '酸',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '災害',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disaster']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最高の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supreme']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '砂漠/を立ち去る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['desert']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '混乱',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confusion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '昆虫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '合計',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sum']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '郊外',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suburb']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '行為/を行う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conduct']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '航海',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['voyage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '考え方，態度',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attitude']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '皇帝，天皇',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emperor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '広範囲に渡る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['widespread']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '広がる，を広げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spread']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '好奇心が強い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['curious']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '好奇心',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['curiosity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '光線',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ray']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '語い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vocabulary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '後者の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['latter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '故意に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deliberately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '固い/固体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['solid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '言葉，舌',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tongue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '現象',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['phenomenon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '現れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emerge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '減る，を減らす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diminish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '厳しい，厳密な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strict']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '原子の，原子力の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['atomic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '原始的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['primitive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見知らぬ人，（ある場所に）初めて来た人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stranger']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見えない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['invisible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '結論',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conclusion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '結果',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outcome']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '苦しむ，を患う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suffer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '区別，違い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distinction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '禁止する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ban']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '極端な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['extreme']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '共和国',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['republic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '共産主義者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['communist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '究極の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ultimate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '疑いなく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['undoubtedly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '犠牲者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['victim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '犠牲/を犠牲にする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sacrifice']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '儀式',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ritual']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '飢え，空腹',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hunger']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '起こる，生じる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '起こる，生じる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['originate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貴重な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['precious']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '祈る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pray']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '気持ちが動揺した/の心をかき乱す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['upset']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '気候',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['climate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '奇妙な，見知らぬ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strange']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '奇妙な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['peculiar']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '基本的な，根本的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fundamental']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '危機',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crisis']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '観察',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['observation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '簡素な，無地の/高原',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感染',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['infection']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '完全に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['altogether']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '学者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scholar']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '革命',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revolution']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '確かに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['indeed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '核の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nuclear']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '外見上の，明らかな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['apparent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '階級，等級，授業，学級',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['class']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解釈',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interpretation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '科学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['science']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '可能性が低い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unlikely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '音，音色，（声・ことばの）調子，',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tone']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遠く離れた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '運命',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '運，財産',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fortune']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一方で',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['meanwhile']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '一致しない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disagree']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遺伝子',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gene']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '違法の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['illegal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '移民',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['immigrant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '意識して，気づいて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conscious']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '威厳，尊厳',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dignity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '依存している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dependent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '扱い，処置，治療',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['treatment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '圧倒的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overwhelming']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '愛情，好意',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['affection']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'もがき苦しむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['struggle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'まばたきをする/まばたき',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blink']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ほら穴',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cave']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ぶらつく，放浪する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wander']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひも、糸',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['string']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひどい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['awful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '歯を見せて笑う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grin']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '張る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'はっきり異なる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distinct']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'のど',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['throat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '入札する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '難民',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refugee']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '仲間、同士',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fellow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ドンドン叩く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bang']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同僚、仲間',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['peer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投票者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['voter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'どうにか',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['somehow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手のひら',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['palm']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知事、長官',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['governor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '単なる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mere']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ため息をつく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sigh']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '抱きしめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['embrace']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '組織、薄絹',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tissue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生徒',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pupil']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'すぐに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['readily']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '上院議員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['senator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '上院',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['senate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '手術',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surgery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '州、省',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['province']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'じっと見つめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gaze']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'しつけ，規律',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['discipline']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '次第に消える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fade']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'しがみつく，固執する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cling']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ささやく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['whisper']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ことわざ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proverb']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ことばの，口頭での',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['verbal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ことば，感想/だと述べる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remark']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ごく小さい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tiny']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '交通渋滞',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['traffic jam']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '傷',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wound']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '議会、下院',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['parliament']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かろうじて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['barely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かなり，公平に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fairly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かなり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rather']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '掛け算する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['multiple']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かき回す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stir']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かかわらず，関係なく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regardless']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'お辞儀をする/お辞儀',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'いわゆる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['so-called']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '委員、理事',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commissioner']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通り，大通り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['avenue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '和らげる，から取り除く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['relieve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '落胆させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depress']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '抑える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suppress']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '模倣する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['imitate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明らかにする，をさらす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明らかにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reveal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '魅了する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fascinate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '埋める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bury']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '変える，変わる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convert']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分割する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['divide']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '非難，告発する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accuse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '疲れ果てさせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exhaust']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '批判する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['criticize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '否定する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deny']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '縛りつける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bind']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統治する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['govern']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '伝える，を運ぶ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convey']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '直面させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confront']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '恥ずかしがらせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['embarrass']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知覚する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perceive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '台無しにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ruin']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '駄目にする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spoil']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '掃く，を掃くように動かす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sweep']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宣言する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['declare']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '占める，を占領する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['occupy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '成し遂げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accomplish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '制限する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['restrict']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '賞賛する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['admire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '消費する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['consume']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '所有する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['possess']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '取り囲む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surround']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '捨て去る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['abandon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '治療する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '支配する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dominate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '克服する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overcome']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '考え出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['devise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '構成する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['constitute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を乞う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['beg']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鼓舞する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inspire']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '孤立させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['isolate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '限る，を閉じこめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見落とす，を見過ごす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overlook']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '曲げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '吸収する，を没頭させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['absorb']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解釈する，通訳する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['interpret']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '我慢する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bear']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'を課す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['impose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '飲み込む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['swallow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '引き出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['derive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'やめる，終わる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cease']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'まき散らす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scatter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'びっくりさせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['astonish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'つるす，を絞首刑にする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hang']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'つかむ，を理解する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grasp']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'じっと見つめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stare']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '強く促す/願望',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['urge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '平穏を妨げる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disturb']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '跡［起源］を辿る/跡，痕跡',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trace']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '世話を怠る，を省みない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['neglect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '気分を害する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['offend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '下に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['beneath']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '反対する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['oppose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '納得させる，説得する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['convince']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '耐える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['endure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遭遇する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['encounter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'だと主張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['argue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '時間・努力を注ぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['devote']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '罪などを犯す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（文章の）一節，通路',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['passage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（ある場所の）居住者，生息動物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inhabitant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（を）吹く/打撃',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（を）やめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['quit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '強化する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reinforce']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '欠かせない、絶対必要な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['indispensable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食器',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cutlery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '交差点',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intersection']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '信頼できる、信用できる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trustworthy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'その後',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['afterwards']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '含んだ、含めて',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inclusive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '使われている，占領されている',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['occupied']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知識豊富な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['knowledgeable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '思いやりがある、理解がある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['considerate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '素晴らしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['splendid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '疑わしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['doubtful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '堪能な、熟達した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proficient']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '間際での',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['last-minute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '非常に大きな、巨大な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['immense']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '快適な、心地良い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agreeable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '説得力のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prsuasive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有名な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['noted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予測できない、法外な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unpredictable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予定表',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['timeline']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '要求の厳しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demanding']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同時の，同時に起こる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['simultaneous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '試験的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pilot']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有益な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['beneficial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '貨物、輸送、輸送料/輸送する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['freight']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '権威のある、誉れ高い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prestigious']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '怠惰な、活動していない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inactive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '近隣の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['neighboring']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '位置している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['situated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絵のように美しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['picturesque']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最小の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['minimal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '荒れ模様の、厳しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inclement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地方自治体の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['municipal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '判読できる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['legible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '疲れ切った',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exhausted']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'とてもわくわくして、大喜びした',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thrilled']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '許される、許容できる/許容量',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allowable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '洗練された、高性能の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sophisticated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '革命的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revolutionary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有益な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['informative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '義務的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compulsory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '指定された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['designated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '水平の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['horizontal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'おもしろい、愉快な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entertaining']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '許容される、容認できる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['permissible']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '名声',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fame']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '満場一致の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unanimous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '儀式上の、形式的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ceremonial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '少しの、高価ではない、謙虚な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['modest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最高の、トップの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['premier']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '恥ずかしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['embarrassing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '歯科の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dental']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最大限の、これ以上ない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['utmost']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有資格の、公認の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['certified']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有能な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['competent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '垂直な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vertical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自動化された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['automated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '際立って優れた、傑出した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distinguished']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人手が不足して',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shorthanded']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '無駄の多い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wasteful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適任である',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suited']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '1時間単位の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hourly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '恣意的な、任意の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arbitrary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '否定的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unfavorable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絶滅の危機に瀕した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['endangered']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '望ましい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['preferable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '交渉可能な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['negotiable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '良くない、不利な、逆の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adverse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'あらかじめ、事前に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['beforehand']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '簡潔な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['concise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大幅な、急な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['steep']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '連続の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['continuous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不審な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['suspicious']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '気が進まない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reluctant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'やる気が出るような、活気づける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inspiring']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '残念な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regrettable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '数え切れないほどの、無数の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['countless']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '適応する、適応させる、改作する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['adapt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '集中的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intensive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '想定外の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unforeseen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '意欲的な、野心的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ambitious']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '著しく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strikingly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '船に乗って',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aboard']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自発的に、自主的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['voluntarily']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '単独で、独立して',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['independently']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ほどほどの、適度な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['moderate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '目立って、傑出して',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prominently']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '伝えられるところでは',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reportedly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '集中的な、濃縮された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['concentrated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'くだけて、非公式に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['informally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '意図的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intentionally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '十分な、あり余るほどの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ample']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '~を考慮すると、~と仮定すると',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['given']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '議論を引き起こす、議論の的になる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['controversial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '重要な役割を果たす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['instrumental']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '範囲、余地',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scope']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '推測、推量',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['speculation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人手不足の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['understaffed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '材木、製材',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lumber']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '祝う、記念する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commemorate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自主的な、任意の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['voluntary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '奪う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deprive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '解雇する，退出させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dismiss']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '戻る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revert']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '監督する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['oversee']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '（製造・販売が）終了した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['discontinued']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '属する，該当する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pertain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'こぼす、こぼれる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spill']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '多様化する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diversify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '使い果たす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deplete']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '予測する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['speculate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '介在する、口をはさむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intervene']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '求める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['solicit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理解する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comprehend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '新たに現れた、新興の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emerging']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '眺めがいい、景色の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scenic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '絶賛されている、評価された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acclaimed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '譲歩する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['concede']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '委譲する、委任する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['delegate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '耐えられる、抵抗力のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resistant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '普及させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disseminate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拍手する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['applaud']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '似ている',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['resemble']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実地の、実用的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hands-on']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '急落する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plummet']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '従う、一致する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conform']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '起業家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entrepreneur']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '入門の、最初の、お試しの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['introductory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '薄める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dilute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '是正する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rectify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '長期にわたる、冗長な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lengthy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '紛失する、置き忘れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['misplace']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '懐かしむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reminisce']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同時に起こる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coincide']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '先延ばしにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['procrastinate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '弱まる，低下する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subside']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同窓会、再会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reunion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '容易にする、促進する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['facilitate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '終わらせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['terminate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '箇条書きにする，項目別にする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['itemize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '上回る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outweigh']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '免除する、放棄する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['waive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '占有、占有人数',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['occupancy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '論争',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['controversy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '偶然',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coincidence']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資格、経歴、資質',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['credentials']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見落とし、手落ち、監視',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['oversight']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'カーテン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['drapery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '立て直し、好転、処理時間',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['turnaround']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '留め具、金具',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['clasp']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '舗装道路',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pavement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '綿密な調査、凝視',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scrutiny']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '譲歩',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['concession']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見習い、実習生',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['apprentice']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '連絡係、調整',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['liaison']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不景気',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depression']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '休憩時間',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intermission']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '娯楽、生活を便利にするもの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['amenity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '除外',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exclusion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '勢い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['momentum']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '間違い、うっかり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lapse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '任期',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tenure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '行事、順序',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['observance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '儲かっている',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lucrative']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '繁栄している',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prosperous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '復活した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revival']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '輝く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sparkle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'その間に/合間',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['meantime']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '購読者，加入者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subscriber']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '場合，とき，機会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['occation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '返済，償還',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reimbursement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保存，管理，維持',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conservation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分解する，解体する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disassemble']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かなりの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['considerable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '独占禁止法',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['antitrust']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '代わりに，あるいは',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alternatively']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '厳しく，厳密に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['strictly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相互に，お互いに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mutually']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '直す，修正する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ほとんどない',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scarcely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '配偶者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spouse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '流動性の，変わりやすい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fluid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '叱る，叱責する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scold']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理論上の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['theoretical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '再建する，建て直す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rebuild']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '探偵，刑事',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['detective']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '切り分ける，刻む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['carve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '腹，腹部',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['belly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相手，副本，写し',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['counterpart']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '悲しみ，悲哀',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sorrow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '真ん中に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['amid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '光景，壮観',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spectacle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '悪意，いじわる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '炭水化物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['carbohydrate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '神学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['theology']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '這う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crawl']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '酸素',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['oxygen']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '飢える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['starve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '提供者，寄贈者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['donor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'べたつく，粘着した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sticky']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '刺す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sting']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '牧師',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pastor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '降伏する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surrender']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '思いやりのある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sympathetic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '飼いならす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tame']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '探査',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exploration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'それによって',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thereby']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '墓',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tomb']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '波長分布',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spectrum']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '家庭教師',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tutor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '領域',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['realm']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不親切な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unkind']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '皮をむく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['peel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '受取人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recipient']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '緊急の，急ぎの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['urgent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'うぬぼれが強い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'はじく、ひっくり返す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flip']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '偏見，先入観',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bias']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '比喩',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['metaphor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '詩，韻文',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['verse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '司法の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['judicial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実在，実体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['entity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '外交上の，外交官の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diplomatic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '優雅な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['elegant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '消える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vanish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '邪悪な，不正の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wicked']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '重力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gravity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '防止，予防',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prevention']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'あくびをする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['yawn']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最小化する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['minimize']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ばかげた，不合理な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['absurd']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '知らせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acquaint']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '激しい苦痛',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['agony']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '器具，装置',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['apparatus']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '算数',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['arithmetic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '昇る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ascend']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '付き添いの，付帯の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['attendant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '火炎',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blaze']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '退屈',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['boredom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '幅',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['breadth']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'へり，縁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '束',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bundle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '岬',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cape']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '資本主義',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['capitalism']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大聖堂',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cathedral']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '硬い，硬直した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stiff']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '候補者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nominee']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '糖尿病',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diabetes']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有毒な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['toxic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '容疑のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alleged']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '悲しみ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grief']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '収容者，同居人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inmate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '親の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['parental']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '閃光',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flash']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '栄光',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['glory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '押し込む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tuck']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '隠す，隠れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conceal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かすかな，わずかな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faint']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '板ばさみ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dilemma']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '凝縮する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['condense']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '導体，案内人，指揮者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conductor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '浅い，軽薄な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shallow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '競技場',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stadium']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '征服，占領',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conquest']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '団結する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unite']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かご、おり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cage']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '置き棚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rack']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '法廷',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['courtroom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '法令',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['statute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '漫画',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cartoon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '銅',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['copper']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '勇気のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['courageous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ゆりかご',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cradle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '虫、故障',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bug']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '祝福する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bless']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '敵意のある，敵の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hostile']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '構想する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conceive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'すぐに，即座に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['instantly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ずる賢い，狡猾な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cunning']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ワクチン',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vaccine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '反対した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['opposed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '湿った，じめじめした',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['damp']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大胆な，向こう見ずな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['daring']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '啓示',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revelation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宣言',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['declaration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '楽しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['delightful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '本当の，透き通るような',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sheer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '軽蔑する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['despise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '運命',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['destiny']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '免疫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['immune']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '信頼性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['reliability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '茂み',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bush']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '異国情緒の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exotic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鋭角の，鋭い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['acute']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '薄暗い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ふともも',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thigh']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '雄牛',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bull']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不名誉，恥辱',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disgrace']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '変装させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disguise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '世俗の，現世の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['secular']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '嫌な，胸が悪くなる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disgusting']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'タクシー',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cab']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '廃棄する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dispose']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '中立の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['neutral']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生物学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['biology']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '革新的な，進歩的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['progressive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '苦痛，苦悩',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distress']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '陰謀',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conspiracy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実行',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['execution']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'すごい，大変な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['terrific']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひどく怖がる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dread']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '評決，判断',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['verdict']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頭蓋骨',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['skull']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自尊心',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['self-esteem']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '染料',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dye']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '操る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['manipulate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '熱心に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eagerly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '開業医、専門家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['practitioner']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '補助金',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['subsidy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '悲劇的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tragic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '瓶',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['jar']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地震',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['earthquake']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '根底にある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['underlying']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大使館',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['embassy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '同情',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sympathy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '隔離',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['isolation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '直立の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['erect']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '使い走り，用事',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['errand']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '症候群',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['syndrome']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '禁じられた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['forbidden']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '永遠の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eternal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'そよ風',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['breeze']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '誇張する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exaggerate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '叫ぶ，絶叫する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exclaim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'たぶん，おそらく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['presumably']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不確実な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['uncertain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '溶かす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dissolve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統計的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['statistical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '公平さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fairness']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '食料不足，飢饉',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['famine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '別れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['farewell']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '魅惑的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fascinating']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '押しつぶす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crush']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ごちそう，宴会',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['feast']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '崖',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cliff']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '肥沃な，多産な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fertile']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '幻覚，錯覚',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['illusion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '匿名の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anonymous']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'お世辞を言う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flatter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '繁栄する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flourish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'インフルエンザ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['flu']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '流暢な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fluent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '素早く進む，急いでする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scramble']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小さな泡',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['foam']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '腫瘍',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tumor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '脈動，震動',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pulse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '兄弟姉妹',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sibling']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '皮肉',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['irony']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '真ん中',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['midst']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '路地',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['alley']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '家具を備える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['furnish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '固執する，やり通す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['persist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'きらめき',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gleam']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '憂鬱な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gloomy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実り多い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fruitful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '栄光の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['glorious']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '忘れっぽい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['forgetful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '立法府',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['legislature']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '深く悲しむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grieve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '精神的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mentally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '養育する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['foster']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '厳格な，恐ろしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '挽く，すりつぶす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grind']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'だます、いかさま',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cheat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'うめき声',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['groan']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '癒す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['heal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '熱',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fever']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '立ち止まる，停止する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['halt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '偉業',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exploit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生命体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['organism']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '無害な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['harmless']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '急ぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hasten']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '干し草',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hay']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '突き出す，押し出す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shove']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '裏庭',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['backyard']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かたまり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['heap']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '含む，構成する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comprise']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '相続人，承継者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['heir']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '群れ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['herd']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '配置',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['placement']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '孫',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['grandchild']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生態学的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ecological']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '尊敬できる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['honorable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '衣装',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outfit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地平線',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['horizon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遠吠えする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['howl']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ごみ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trash']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '理想的には',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ideally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '馬鹿',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['idiot']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生地',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['texture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '模倣，真似',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['imitation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '莫大に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['immensely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '優雅な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['graceful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'せっかちな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['impatient']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '親権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['custody']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生息する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inhabit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '艦隊',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fleet']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '保険をかける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['insure']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '部外者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['outsider']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '必死に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['desperately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '無理にさせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '象牙',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ivory']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宣言する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['proclaim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '対決',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confrontation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不十分な，不自由な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lame']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '戯れ，冗談',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lark']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '香り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '最後に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lastly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '眉',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eyebrow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '袋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sack']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '受け継ぐ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inherit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'なめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lick']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不快な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nasty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '縮小する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shrink']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '激しい，凶暴な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fierce']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '想像する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['envision']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '壮大な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['magnificent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '威厳，主権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['majesty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '通路',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['aisle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '弱める',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['weaken']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '儀礼，協定',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['protocol']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不公平な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unfair']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地形',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['terrain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '展開する，配置する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deploy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'そらす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['distract']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '中世の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['medieval']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '落ち込んだ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['depressed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'かたまり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chunk']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '電子レンジ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['microwave']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '真昼',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['midday']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '移住',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['migration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'いたずら',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mischief']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '不幸',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['misfortune']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '侵略する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['invade']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分類する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['classify']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'うめき声',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['moan']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大当たり',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coup']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '密度',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['density']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '君主',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['monarch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '協力的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['supportive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '苔',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['moss']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '刺激',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stimulus']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '嘆く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mourn']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ミイラ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mummy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '少し浸す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dip']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'つぶやく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['murmur']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '非公式な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['informal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '羽根',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['feather']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '球体',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sphere']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '軽くたたく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '単独の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sole']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '展開する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['unfold']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '幸福，健康',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['well-being']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '有効性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['validity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生態系',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ecosystem']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '襟',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['collar']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '従順',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['obedience']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '雑草',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['weed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '筋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['streak']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '義務づける',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['oblige']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひと目',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['glimpse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '省略する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['omit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '前進的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['onward']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '考える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deem']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人工物',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['artifact']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'こっそり動く，忍び寄る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sneak']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '指導者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mentor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '東洋の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['oriental']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '装飾',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ornament']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '袖',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sleeve']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '肋骨',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rib']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寝坊する，寝すぎる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['oversleep']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '追い越す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['overtake']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '教区',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['parish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '奴隷制度',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['slavery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '商品',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['commodity']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '途中の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['halfway']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '娯楽',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pastime']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'お墓',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cemetery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '牧草地',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pasture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '可能性',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['likelihood']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頂上に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['atop']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '滅びる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['perish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '悲観的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pessimistic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '縁',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '恥ずかしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['embarrassed']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '孤立した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['isolated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'つまむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pinch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分隊',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['squad']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明白に，率直に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plainly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '突入する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plunge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '複数の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plural']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '人口統計の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['demographic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '冷たさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chill']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '法王',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['pope']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '避難',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refuge']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '操縦する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['steer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '議員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['legislator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '結集する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '県',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prefecture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'そのままの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['intact']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '繁栄する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thrive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '噛む',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chew']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '概念',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conception']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '勝利',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['triumph']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '行列，進行',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['procession']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '良心，善悪の概念',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['conscience']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '司法権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['jurisdiction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '必然的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inevitably']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '繁栄する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prosper']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '男女同権主義者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['feminist']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拘束，強制',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['constraint']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感情的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['emotionally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遠征',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['expedition']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '申し立てによると',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['allegedly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '地方の，田舎の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['provincial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '蓋',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '振りかける，まき散らす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sprinkle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '死亡者数，死亡(率)',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mortality']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '哲学的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['philosophical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '寛容さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tolerance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '休憩，休暇',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['recess']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '農民',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['peasant']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '精製する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拒否',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['refusal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '未亡人',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['widow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '禁じる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['forbid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '著しく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remarkably']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '治療',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['remedy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '残忍な，粗暴な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brutal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '捕食者',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['predator']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '突っつく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['poke']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '選ぶ，選択する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['opt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '舞い上がる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['soar']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '自治',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['autonomy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '制定する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['enact']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '糸',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thread']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '生き返る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['revive']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分数',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fraction']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '敷居',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['threshold']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'とどろく，吠える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['roar']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '強盗',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['robbery']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '神学的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['theological']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '打ち勝つ，はびこる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['prevail']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '拒否',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['denial']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '傷跡',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scar']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '断片',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fragment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '乏しい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['scarce']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ねじ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['screw']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '暖かさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['warmth']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大学生',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['undergraduate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投影',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['projection']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '残酷な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cruel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '輝いた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['shiny']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '観光',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sightseeing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '特異な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['singular']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひったくる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['snatch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'くしゃみ/くしゃみする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sneeze']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '眉をひそめる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['frown']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '取り戻す',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['regain']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'すすり泣く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sob']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ゴム',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['rubber']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '退却',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['retreat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '分子',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['molecule']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '種をまく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '統合された',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['integrated']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '説明責任',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accountability']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '熟考する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contemplate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '驚愕させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['startle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '火花',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spark']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '政治家',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['statesman']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '皮肉なことに',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ironically']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '疲労',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fatigue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '厳格な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stern']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '説教',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['lecture']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '告白',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['confession']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大きく歩く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stride']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '挑発する，怒らせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['provoke']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '大理石',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['marble']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '実質的に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['substantially']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '頑固な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['stubborn']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明らかな',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['explicit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '邪魔な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disturbing']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '監視',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['surveillance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '磁気の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['magnetic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '召喚する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['summon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'つぶやく，ぼそぼそ言う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['mutter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '壊滅的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['devastating']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '座標',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coordinate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '迅速な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['swift']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '交響曲',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['symphony']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '暴動',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['riot']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '誘惑する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tempt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '栄養素',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nutrient']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '厳しく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['severely']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '主権',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['sovereignty']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '温度計',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thermometer']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'とげ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['thorn']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明確にする，はっきり発音する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['articulate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '王位',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['throne']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '密な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dense']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '膨れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['swell']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '非難',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accusation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'たいまつ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['torch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひどく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['terribly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '合図',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cue']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '危険',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['hazard']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '足を踏み入れる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tread']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '説得力のある',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['compelling']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '桶',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['tub']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '黄昏時',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['twilight']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'きらきら光る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['twinkle']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '織る',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['weave']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '嘆願，弁解',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plea']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明らかにする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['uncover']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '脊椎',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spine']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '船着場',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dock']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '霧',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fog']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '純然たる，全くの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['utter']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '外交官',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['diplomat']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宣教師',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['missionary']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '流行性の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['epidemic']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '見事な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['admirable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '致命的な，破滅的な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fatal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '活力',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vigor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '整える',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['trim']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鮮やかな，鮮明な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vivid']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '火山',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['volcano']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '弱った，微弱な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['feeble']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '本来の，生来の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['inherent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '誓い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['vow']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '全国の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['nationwide']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '区画',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ward']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '唾を吐く',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['spit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ひざまずく',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['kneel']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '指示する，書き取らせる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dictate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '機転',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['wit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '海軍の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['naval']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '原告',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['plaintiff']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '急な，不意の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['abrupt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '蓄積する，溜まる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['accumulate']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '期待',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['anticipation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '類人猿',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ape']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'おどけた，滑稽な',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comical']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '建築の',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['architectural']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '上昇',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ascent']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宇宙飛行士',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['astronaut']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '天文学',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['astronomy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '禿げた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bald']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '追放する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['banish']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'くちばし',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['beak']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '裏切り',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['betrayal']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '漂白する',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bleach']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'しみ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blot']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '青写真',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['blueprint']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '賄賂',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['bribe']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明るくする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brighten']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '明るさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brilliance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '小川',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['brook']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ほうき',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['broom']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '峡谷',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['canyon']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '議長',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chairperson']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '肌寒い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['chilly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '粗末な，粗い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['coarse']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '彗星',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['comet']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '満足',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['contentment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '評議員',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['councilor']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '居心地の良い',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['cozy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '湾曲させる',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crook']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'しゃがむ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['crouch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '詐欺，虚偽',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['deceit']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '無視する，逆らう',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['defy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '繊細に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['delicately']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '露',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dew']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '消化',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['digestion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '騒動，妨害',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['disturbance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '溝',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['ditch']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'めまいがする',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dizzy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '恐ろしい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dreadful']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '鈍さ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dullness']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '住居',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['dwelling']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '真剣に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['earnestly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '電子',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['electron']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '忍耐',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['endurance']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '腐敗した',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['corrupt']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '羨ましい',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['envious']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '永遠に',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['eternally']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '誇張',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exaggeration']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '審査官',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['examiner']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遠足',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['excursion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '枯渇、疲労',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['exhaustion']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '作り話',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fable']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遠くの',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['faraway']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '連合',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['federation']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '投げ飛ばす',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fling']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '愚かさ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['folly']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '化石',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fossil']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '遂行，実践',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fulfillment']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '空騒ぎ',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fuss']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => 'ぼやけた',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['fuzzy']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '出入口',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gateway']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '宝石',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gem']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '感謝',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['gratitude']
                ]),
            ],
            [
                'user_id' => $this->userId,
                'question' => '軽く食べる，草を食う',
                'question_type' => 'normal',
                'answer' => json_encode([
                    'english' => ['graze']
                ]),
            ],
        ]);
    }
}
