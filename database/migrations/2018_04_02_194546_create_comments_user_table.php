<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_user', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('id_comment')->unique();;
            //$table->foreign('id_comment')->references('id')->on('comment');

            $table->bigInteger('id_user')->unique();;
            //$table->foreign('id_user')->references('id')->on('users');

            $table->integer('mark');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments_user');
    }
}
