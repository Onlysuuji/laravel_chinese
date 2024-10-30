<?php

namespace App\Http\Controllers;

use App\Models\Chinese;  // 必要に応じてモデルを指定
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

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


        $categories = $request->query('category', ['normal','select']);

        $searchKeyword = $request->query('search', null); // 検索キーワード（リクエストから取得）

        $words = Chinese::where('user_id', Auth::id())
            ->whereIn('question_type', $categories)
            ->when($searchKeyword, function ($query) use ($searchKeyword) {
                // 検索キーワードがある場合、複数カラムで部分一致検索
                return $query->where(function ($query) use ($searchKeyword) {
                    $query->where('question', 'LIKE', "%{$searchKeyword}%")
                        ->orWhere('answer', 'LIKE', "%{$searchKeyword}%")
                        ->orWhere('choices', 'LIKE', "%{$searchKeyword}%")
                        ->orWhere('comment', 'LIKE', "%{$searchKeyword}%");
                });
            })
            ->orderBy($sort, $order)
            ->paginate(20); // ページネーションで10件ずつ表示


        return view('chinese.wordlist', compact('words','sort', 'order', 'searchKeyword'));
    }
}
