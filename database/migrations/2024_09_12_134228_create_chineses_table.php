<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chineses', function (Blueprint $table) {
            $table->id(); // これは auto_increment になります
            $table->timestamps();
            $table->timestamp('nextreview_at')->useCurrent(); // デフォルトで現在のタイムスタンプ
            $table->integer('rank'); // ここには auto_increment を指定しない
            $table->string('question', 100);
            $table->longText('answer')->nullable(); // longtext型
            $table->json('additional_data')->nullable(); // json型
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chineses');
    }
};
