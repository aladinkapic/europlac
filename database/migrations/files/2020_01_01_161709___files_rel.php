<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FilesRel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('__files_rel', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('model')->nullable();
            $table->integer('property_id')->nullable();
            $table->integer('file_id')->nullable();

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
        Schema::dropIfExists('__files_rel');
    }
}
