<?php

namespace App\Http\Controllers;

use App\Models\Chinese;  // 必要に応じてモデルを指定
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class WordListController extends Controller
{
    public function wordlist()
    {
        // データを20件ずつ取得する

        //$request -> 種類

        $items = Chinese::where('user_id', Auth::id())->paginate(20);

        // ビューにデータを渡す
        return view('chinese.wordlist', compact('items'));
    }
}