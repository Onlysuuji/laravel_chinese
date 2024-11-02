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
        Schema::create('english', function (Blueprint $table) {
            $table->id(); // bigint(20), AUTO_INCREMENT
            $table->unsignedBigInteger('user_id'); // bigint(20), FOREIGN KEY
            $table->timestamps(); // created_at, updated_at
            $table->timestamp('nextreview_at')->nullable()->useCurrent(); // TIMESTAMP, DEFAULT current_timestamp()
            $table->integer('rank')->default(0); // int(11), DEFAULT 0
            $table->string('question', 100); // varchar(100)
            $table->text('answer'); // longtext
            $table->longText('choices')->nullable(); // longtext, NULL
            $table->integer('thinkingtime')->nullable(); // int(11), NULL
            $table->string('question_answer', 100)->nullable(); // varchar(100), NULL
            $table->string('question_type', 100)->nullable(); // varchar(100), NULL
            $table->string('comment', 255)->nullable(); // varchar(255), NULL
            
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('english');
    }
}
?>