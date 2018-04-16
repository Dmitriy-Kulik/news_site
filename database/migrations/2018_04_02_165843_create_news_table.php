<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->primary('id');

            $table->bigInteger('id_created_user');
            //$table->foreign('id_created_user')->references('id')->on('users');

            $table->string('url_img_news');
            $table->string('news_title');
            $table->longText('news_content');
            $table->boolean('is_visible');
            $table->bigInteger('count_readers');
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
        Schema::dropIfExists('news');
    }
}
