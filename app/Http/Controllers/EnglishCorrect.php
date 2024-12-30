<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\English;
use Illuminate\Support\Facades\Auth;

class EnglishCorrect extends Controller
{
    public function changeToCorrect(Request $request, $id)
    {
        $changeCorrect = $request->input('changeCorrect');
        if (!$changeCorrect) {
            return redirect()->route('english');
        }
        $word = English::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
        if (!$word) {
            return redirect()->route('english');
        }
        $word->loop += (3) * exp(-($word->thinkingTime) / 40);
        $word->save();
        return redirect()->route('english')->with('success', 'データが変更されました。');
    }
}
