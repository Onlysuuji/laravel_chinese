<?php

namespace App\Http\Controllers;

use App\Services\geminiTest;
use App\Models\English;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Helpers\GeminiHelper;
use App\Helpers\OpenAiHelper;
use App\Models\User;

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
        $id = Session::get('id') ?? null;
        if ($id) {
            $word = English::where('user_id', $userId)
                ->where('id', $id)
                ->first();
            $question_type = $word -> question_type;
        } else {
            $userLoop = $user->loop;
            $word = English::where('user_id', $userId)
                ->where('loop', $userLoop)
                ->inRandomOrder() // ランダムな順序に並び替え
                ->first();
            GeminiHelper::gemini($id);
            OpenAiHelper::openai($id);
        }

        $userLoop = $user->loop;
        if (!English::where('user_id', $userId)->first()) {
            $question_type = 'noWord';
            return view('english.english', compact('question_type'));
        }
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


        $question_type = $word->question_type ?? 'noWord';
        if ($question_type === 'noWord') {
            return view('english/english', compact('question_type'));
        }

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
            // API呼び出し
            $content = GeminiHelper::phpfetchFromGemini("指定された英単語に適した説明をその英単語の文字を入れないで日本語で作成してください。$answer");
            $example = GeminiHelper::phpfetchFromGemini("指定された英単語を使用する1行程度の英文を作って出力してください。$answer");
            $exampleanswer = GeminiHelper::phpfetchFromGemini("次の文を日本語に翻訳してそれを出力してください。$example");


            $openai_j = Session::get("openai_j_$id");
                $gemini_j = Session::get("gemini_j_$id");
                $openai_d = Session::get("openai_d_$id");
                $gemini_d = Session::get("gemini_d_$id");

            // セッションに保存
            Session::put('example', $example);
            Session::put('exampleanswer', $exampleanswer);

            // ビューへ渡す
            return view('english/english', compact('word', 'question_type', 'content', 'exampleanswer', 'count'));
        } else if ($question_type == 'select') {

            session(['seed' => time()]);
            $choices = json_decode($word->choices, true);
            $choices['option'][] = $word->question_answer;
            return view('english/english', compact('word', 'question_type', 'choices'));
        }
    }
}
