<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('user_id')->default(0);
            $table->string('upload_img');
            $table->string('title');
            $table->text('description');
            $table->integer('category_id');
            $table->string('localisation');
            $table->float('price');
           // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}