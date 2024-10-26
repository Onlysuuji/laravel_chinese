<?php

namespace App\Http\Controllers;

use App\Models\Chinese;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DeleteController extends Controller
{
    public function destroy($id)
    {
        $previous = url()->previous();

        // 前のURLが '/chinese/answer' で始まっている場合、'/chinese' に置き換え
        if (Str::startsWith($previous, url('/chinese/answer'))) {
            $previous = url('/chinese');
        }

        // データの削除処理
        $item = Chinese::where('user_id', Auth::id())->findOrFail($id);
        $item->delete();

        // 削除後にリダイレクト
        return redirect()->to($previous)->with('success', 'データが削除されました。');
    }
}
