<?php

namespace App\Http\Controllers;

use App\Models\Chinese;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function destroy($id)
    {
        // データの削除処理
        $item = Chinese::where('user_id', Auth::id())->findOrFail($id);
        $item->delete();

        // 削除後にリダイレクト
        return redirect()->to(url()->previous())->with('success', 'データが削除されました。');
    }
}
