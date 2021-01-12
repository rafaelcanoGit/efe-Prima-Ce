<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('film_id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->integer('rental_duration');
            $table->integer('rental_rate');
            $table->integer('length')->nullable();
            $table->unsignedBigInteger('lenguaje_id');
            $table->foreign('lenguaje_id')->references('id')->on('lenguajes');
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
        Schema::dropIfExists('films');
    }
}
