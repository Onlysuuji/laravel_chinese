<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class English extends Model
{
    use HasFactory;
    public $timestamps = true; 
    protected $table = 'english';  // 使用するテーブル名
    protected $fillable = ['user_id', 'question_answer', 'rank', 'question', 'answer', 'nextreview_at', 'reviewed_at', 'thinkingTime', 'updated_at'];
}
