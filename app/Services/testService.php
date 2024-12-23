<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EnglishPackageService
{
    public function installPackage($userId, $tag)
    {
        // データベースにテストデータを挿入
        DB::table('tests')->insert([
            'user_id' => $userId,
            'test_name' => 'English Test',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ユーザーのタグを更新
        $user = Auth::user();
        $tags = $user->tags ? json_decode($user->tags, true) : [];

        // タグを追加（重複回避）
        if (!in_array($tag, $tags)) {
            $tags[] = $tag;
        }

        $user->tags = json_encode($tags);
        $user->save();
    }
}
