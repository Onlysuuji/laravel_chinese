<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EnglishPackage extends Controller
{
    public function showList()
    {
        return view('english.package');
    }

    public function installPackage(Request $request)
    {
        $tag = $request->input("tag");
        $userId = Auth::id();
        $user = User::find($userId);

        // 現在のタグをJSONから配列にデコード
        $tags = $user->tags ? json_decode($user->tags, true) : []; // nullの場合は空配列
        $skip_tags = $user->skip_tags ? json_decode($user->skip_tags, true) : [];
        // Seeder を実行
        if (!in_array($tag, $tags) && !in_array($tag, $skip_tags)) {
            $className = "\\Database\\Seeders\\" . $tag;
            $seeder = new $className($user->id);

            $seeder->run();

            $tags[] = $tag;

            // 配列をJSON文字列にエンコードして保存
            $user->tags = json_encode($tags);
            $user->save();

            return response()->json(['message' => 'タグが更新されました', 'tags' => $tags, 'redirect_url' => route('english.package')]);
        } else {
            return response()->json(['message' => '何故か条件に入らない']);
        }

        return response()->json(['message' => 'An error occurred']);
    }
    public function enable(Request $request)
    {
        $tag = $request->input("tag");
        $userId = Auth::id();
        $user = User::find($userId);
        $tags = $user->tags ? json_decode($user->tags, true) : [];
        $skip_tags = $user->skip_tags ? json_decode($user->skip_tags, true) : [];
        //skip_tagsから$tagを取り除いて、tagsに$tagを追加する。

        if (!in_array($tag, $tags) && in_array($tag,$skip_tags)) {

            $tags[] = $tag;
            $skip_tags = array_diff($skip_tags, [$tag]);

            // 配列をJSON文字列にエンコードして保存
            $user->tags = json_encode($tags);
            $user->skip_tags = json_encode($skip_tags);
            $user->save();

            return response()->json(['message' => 'タグが更新されました。このタグが付いている問題を出題するようにします。', 'tags' => $tags, 'redirect_url' => route('english.package')]);
        }
        return response()->json(['message' => 'An error occurred']);
    }

    public function disable(Request $request)
    {
        $tag = $request->input("tag");
        $userId = Auth::id();
        $user = User::find($userId);
        $tags = $user->tags ? json_decode($user->tags, true) : [];
        $skip_tags = $user->skip_tags ? json_decode($user->skip_tags, true) : [];
        //skip_tagsから$tagを取り除いて、tagsに$tagを追加する。

        if (in_array($tag, $tags) && !in_array($tag,$skip_tags)) {

            $tags= array_diff($tags, [$tag]);
            $skip_tags[] = $tag;

            // 配列をJSON文字列にエンコードして保存
            $user->tags = json_encode($tags);
            $user->skip_tags = json_encode($skip_tags);
            $user->save();

            return response()->json(['message' => 'タグが更新されました。このタグが付いている問題は出題されません。', 'tags' => $tags, 'tags' => $tags, 'redirect_url' => route('english.package')]);
        }
        return response()->json(['message' => 'An error occurred']);
    }
}
