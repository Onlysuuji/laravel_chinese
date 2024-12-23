<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLoopToEnglishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('english', function (Blueprint $table) {
            $table->integer('loop')->default(0); // 'column_name' は適切なカラム名に置き換えてください
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('english', function (Blueprint $table) {
            $table->dropColumn('loop');
        });
    }
}
