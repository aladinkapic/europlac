<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Slider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home__slider', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('header')->nullable();
            $table->string('image')->nullable();
            $table->string('image_mobile')->nullable();
            $table->string('value_one')->nullable();
            $table->string('value_two')->nullable();
            $table->string('value_three')->nullable();
            $table->string('link')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home__slider');
    }
}
