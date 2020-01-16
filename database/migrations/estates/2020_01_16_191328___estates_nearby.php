<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EstatesNearby extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates_nearby', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('estate_id');
            $table->integer('category')->nullable();
            $table->string('icon')->nullable();
            $table->string('name')->nullable();
            $table->string('distance')->nullable();
            $table->string('stars')->nullable();

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
        Schema::dropIfExists('estates_nearby');
    }
}
