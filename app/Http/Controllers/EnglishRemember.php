<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\English;
use Carbon\Carbon;

class EnglishRemember extends Controller
{
    public function rememberWord($id)
    {
        try {
            $userId = Auth::id();
            $word = English::where('id', $id)
                ->where('user_id', $userId)
                ->firstOrFail();

            // データの更新
            $word->nextreview_at = Carbon::now()->addYears(10);

            // 更新を保存
            $word->save();

            return redirect()->route('english');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // レコードが見つからない場合のエラー処理
            return response()->json(['error' => 'no data found for userId ' . $userId . '  id = ' . $id], 404);
        } catch (\Illuminate\Database\QueryException $e) {
            // データベースクエリエラーの処理
            return response()->json(['error' => 'データベースエラー: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            // その他の例外処理
            return response()->json(['error' => '予期しないエラー: ' . $e->getMessage()], 500);
        }
    }
}
