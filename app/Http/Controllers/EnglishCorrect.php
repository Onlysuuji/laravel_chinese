<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\English;
use Illuminate\Support\Facades\Auth;

class EnglishCorrect extends Controller
{
    public function changeToCorrect($id)
    {
        $word = English::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
        $word->loop += 3;
        $word->save();
        return redirect()->route('english')->with('success', 'データが変更されました。');
    }
}
