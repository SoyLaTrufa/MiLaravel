<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPivotMoviesDirectors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('director_movie', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->integer('director_id')->unsigned();
          $table->foreign('director_id')->references('id')->on('directors');
          $table->integer('movie_id');
          $table->foreign('movie_id')->references('id')->on('movies');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('director_movie');
    }
}
