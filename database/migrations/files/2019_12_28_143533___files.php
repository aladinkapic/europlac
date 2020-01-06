<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Files extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('__files', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('file_name')->nullable();
            $table->string('real_name')->nullable();
            $table->string('type')->nullable(); // Image - or file - or ..

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
        Schema::dropIfExists('__files');
    }
}
