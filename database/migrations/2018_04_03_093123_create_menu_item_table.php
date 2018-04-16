<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_item', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');

            $table->bigInteger('id_user');
            //$table->foreign('id_user')->references('id')->on('users');

            $table->bigInteger('id_category');
            //$table->foreign('id_category')->references('id')->on('category');

            $table->bigInteger('id_news');
            //$table->foreign('id_news')->references('id')->on('news');

            $table->bigInteger('id_tag');
            //$table->foreign('id_tag')->references('id')->on('tag');

            $table->bigInteger('id_menu_item');
            //$table->foreign('id_menu_item')->references('id')->on('menu_item');

            $table->integer('order');
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
        Schema::dropIfExists('menu_item');
    }
}
