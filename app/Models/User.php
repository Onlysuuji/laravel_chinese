<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

//class User extends Authenticatable implements MustVerifyEmail
/**
 * @property string|null $tags
 * @method bool save() Save the model to the database
 */
class User extends Authenticatable #implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public static function check_tag($tag)
    {
        // 認証済みユーザーを取得
        $user = Auth::user();

        // ユーザーが認証されていない場合は false を返す
        if (!$user) {
            return false;
        }

        // tags カラムを JSON 形式でデコード
        $tags = $user->tags ? json_decode($user->tags, true) : [];


        // 指定されたタグが存在するか確認
        return in_array($tag, $tags);
    }

    /**
     * 指定したタグが存在するか確認
     *
     * @param string $tag
     * @return bool
     */
    public static function check_skip_tag($tag)
    {
        // 認証済みユーザーを取得
        $user = Auth::user();

        // ユーザーが認証されていない場合は false を返す
        if (!$user) {
            return false;
        }

        $skip_tags = $user->skip_tags ? json_decode($user->skip_tags, true) : [];

        // 指定されたタグが存在するか確認
        return in_array($tag, $skip_tags);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tags',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function chineses()
    {
        return $this->hasMany(Chinese::class);
    }
}
