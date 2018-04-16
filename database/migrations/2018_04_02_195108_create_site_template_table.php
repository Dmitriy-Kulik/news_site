<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_template', function (Blueprint $table) {
            $table->bigInteger('id');

            $table->bigInteger('id_created_user');
            //$table->foreign('id_created_user')->references('id')->on('users');

            $table->string('name');
            $table->string('background_url');
            $table->longText('header_html');
            $table->boolean('is_active');
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
        Schema::dropIfExists('site_template');
    }
}
