<?php

namespace App\Http\Controllers;

use App\Models\English;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EnglishController extends Controller
{
    public function showWord(Request $request)
    {
        // 現在の時刻に基づいて単語を取得
        $userId = Auth::id();
        $word = English::where('user_id', $userId)
            ->where('created_at', '=', 'nextreview_at')
            ->orderBy('nextreview_at', 'asc')
            ->first();

        if (!$word) {
            $word = English::where('user_id', $userId)
                ->where('nextreview_at', '<', Carbon::now())
                ->orderBy('nextreview_at', 'asc')
                ->first();
            
        }

        $question_type = $word->question_type ?? 'noWord';;
        if ($question_type === 'noWord') {
            return view('english/english', compact('question_type'));
        }

        // 初期設定など
        session(['starttime' => time()]);
        
        if($question_type == 'normal') {
            return view('english/english', compact('word','question_type'));
        }
        else if($question_type == 'select'){

            session(['seed' => time()]);
            $choices = json_decode($word->choices, true);
            $choices['option'][] = $word->question_answer;
            return view('english/english', compact('word', 'question_type', 'choices'));

        }
        else{

        }
    }
}
