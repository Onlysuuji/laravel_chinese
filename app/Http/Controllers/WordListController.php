<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordListController extends Controller
{
    public function wordlist(Request $request){
        return view('chinese/wordlist');
    }

}
