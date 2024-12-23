<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class EnglishSeeder extends Controller
{
    public function runSeeder(Request $request)
    {
        // 現在のユーザー ID を取得
        $userId = Auth::id();
        // Seeder を実行
        Artisan::call('db:seed', [
            '--class' => 'Database\\Seeders\\EnglishTest',
            '--user_id' => $userId, // ユーザー ID をオプションとして渡す
        ]);

        return response()->json(['message' => 'Seeder executed successfully']);
    }
}
