<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chinese;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class ChineseController extends Controller
{
    public function showWord(Request $request)
    {
        // 現在の時刻に基づいて単語を取得
        $userId = Auth::id();
        $word = Chinese::where('user_id', $userId)
            ->where('created_at', '=', 'nextreview_at')
            ->orderBy('nextreview_at', 'asc')
            ->first();

        if (!$word) {
            $word = Chinese::where('user_id', $userId)
                ->where('nextreview_at', '<', Carbon::now())
                ->orderBy('nextreview_at', 'asc')
                ->first();
            
        }

        if (!$word) {
            return view('chinese/chinese', ['question_type' => 'noWord', 'id' => NULL]);
        }

        // 初期設定など
        session(['starttime' => time()]);
        $question_type = $word->question_type;
        
        if($question_type == 'normal') {
            return view('chinese/chinese', ['id' => $word->id, 'question' => $word->question, 'question_type' => $word->question_type]);
        }
        else if($question_type == 'select'){

            session(['seed' => time()]);
            $choices = json_decode($word->choices, true);
            $choices['option'][] = $word->question_answer;
            return view('chinese/chinese', compact('word', 'question_type', 'choices'));

        }
    }
}
