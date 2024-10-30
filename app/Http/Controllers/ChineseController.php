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

        $question_type = $word->question_type ?? 'noWord';;
        if ($question_type === 'noWord') {
            return view('chinese/chinese', compact('question_type'));
        }

        // 初期設定など
        session(['starttime' => time()]);
        
        if($question_type == 'normal') {
            return view('chinese/chinese', compact('word','question_type'));
        }
        else if($question_type == 'select'){

            session(['seed' => time()]);
            $choices = json_decode($word->choices, true);
            $choices['option'][] = $word->question_answer;
            return view('chinese/chinese', compact('word', 'question_type', 'choices'));

        }
        else{

        }
    }
}
