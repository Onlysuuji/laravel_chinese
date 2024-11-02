<?php

namespace App\Http\Controllers;

use App\Models\English;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EnglishDelete extends Controller
{
    public function destroy($id)
    {
        $previous = url()->previous();

        // 前のURLが '/english/answer' で始まっている場合、'/english' に置き換え
        if (Str::startsWith($previous, url('/english/answer'))) {
            $previous = url('/english');
        }

        // データの削除処理
        $item = English::where('user_id', Auth::id())->findOrFail($id);
        $item->delete();

        // 削除後にリダイレクト
        return redirect()->to($previous)->with('success', 'データが削除されました。');
    }
}
