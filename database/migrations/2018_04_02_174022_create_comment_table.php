<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->primary('id');

            $table->bigInteger('id_news');
            //$table->foreign('id_news')->references('id')->on('news');

            $table->bigInteger('id_user');
            //$table->foreign('id_user')->references('id')->on('users');

            $table->bigInteger('id_comment');
            //$table->foreign('id_comment')->references('id')->on('comment');

            $table->string('comment_text');
            $table->date('visible_at');
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
        Schema::dropIfExists('comment');
    }
}
