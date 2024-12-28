<?php

namespace App\Http\Controllers;

use App\Services\geminiTest;
use App\Models\English;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Helpers\ApiHelper;
use App\Models\User;
use Spatie\FlareClient\Api;

class EnglishController extends Controller
{

    protected $service;

    public function __construct(geminiTest $service)
    {
        $this->service = $service;
    }

    public function showWord(Request $request)
    {
        // 現在の時刻に基づいて単語を取得
        $userId = Auth::id();
        $user = User::find($userId); // ユーザー情報を取得
        if (!English::where('user_id', $userId)->exists()) {
            return view('english/english', ['question_type' => 'noWord']);
        }
        /*
        $id = Session::get('id') ?? null;
        $latestRecordId = English::where('user_id', $userId)
            ->orderBy('updated_at', 'desc') // 'updated_at' を降順でソート
            ->value('id'); // 最新のレコードの 'id' を取得

        if (isset($id) || $id != $latestRecordId) {
            $word = English::where('user_id', $userId)
                ->where('id', $id)
                ->first();
        } else {
            $userLoop = $user->loop;
            $word = English::where('user_id', $userId)
                ->where('loop', $userLoop)
                ->inRandomOrder() // ランダムな順序に並び替え
                ->first();

            while (!$word) {
                $userLoop++;
                // 最新のloop値を取得
                $userLoop = User::where('id', $userId)->value('loop');

                // 条件に合致するwordを検索
                $word = English::where('user_id', $userId)
                    ->where('loop', $userLoop)
                    ->inRandomOrder() // ランダムな順序に並び替え
                    ->first();
            }
            $user->loop = $userLoop;
            $user->save();
            ApiHelper::openai($word->id);
        }
        */
        $userLoop = $user->loop;
        $word = English::where('user_id', $userId)
            ->where('loop', $userLoop)
            ->inRandomOrder() // ランダムな順序に並び替え
            ->first();

        while (!$word) {
            $userLoop++;
            // 最新のloop値を取得
            $userLoop = User::where('id', $userId)->value('loop');

            // 条件に合致するwordを検索
            $word = English::where('user_id', $userId)
                ->where('loop', $userLoop)
                ->inRandomOrder() // ランダムな順序に並び替え
                ->first();
        }
        $id = $word->id;

        $user->loop = $userLoop;
        $user->save();
        ApiHelper::openai($word->id);

        $question_type = $word->question_type;


        // 初期設定など
        session(['starttime' => time()]);

        if ($question_type == 'normal') {
            // JSONをデコード
            $decodedAnswer = json_decode($word->answer, true);

            // 配列から値を取得
            $answer = $decodedAnswer['english'][0];
            // 今日の日付を取得
            $today = Carbon::today();

            // 今日の日付と一致するレコードを取得してカウント
            $count = English::where('user_id', $userId)
                ->whereDate('nextreview_at', $today)
                ->count();

            $openai_j = Session::get("openai_j_$id");
            $gemini_j = Session::get("gemini_j_$id");
            $openai_d = Session::get("openai_d_$id");
            $gemini_d = Session::get("gemini_d_$id");

            // ビューへ渡す
            return view('english/english', compact('word', 'question_type',  'openai_j', 'gemini_j', 'openai_d', 'gemini_d', 'count'));
        } else if ($question_type == 'select') {

            session(['seed' => time()]);
            $choices = json_decode($word->choices, true);
            $choices['option'][] = $word->question_answer;
            return view('english/english', compact('word', 'question_type', 'choices'));
        }
    }
}
