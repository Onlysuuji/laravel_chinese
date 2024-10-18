<?php

namespace App\Http\Controllers;

use App\Models\Chinese;  // 必要に応じてモデルを指定
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WordListController extends Controller
{
    public function wordlist(Request $request)
    {

        // sortとorderのパラメータを取得（デフォルト: 'created_at', 'desc'）
        $sort = $request->query('sort', 'created_at');
        if (!in_array($sort, ['created_at', 'updated_at'])) {
            $sort = 'created_at';
        }
        $order = $request->query('order', 'desc');
        if (!in_array($order, ['desc', 'asc'])) {
            $order = 'desc';
        }


        // ユーザーIDに基づいて、指定された順序でデータを取得
        $items = Chinese::where('user_id', Auth::id())
            ->orderBy($sort, $order)
            ->paginate(20);

        // ビューにデータを渡す
        return view('chinese.wordlist', compact('items', 'sort', 'order'));
    }
}
