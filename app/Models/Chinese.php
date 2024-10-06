<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chinese extends Model
{
    use HasFactory;
    protected $table = 'chineses';  // 使用するテーブル名
    protected $fillable = ['user_id', 'question_answer', 'rank', 'question', 'answer', 'nextreview_at', 'reviewed_at', 'thinkingTime', 'updated_at'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
