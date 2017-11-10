<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearColumnaDirectorsEnMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('movies', function (Blueprint $table) {
          $table->integer('director_id');
          $table->foreign('director_id')->references('id')->on('directors');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('movies', function (Blueprint $table) {
          $table->dropColumn('director_id');
      });
    }
}
