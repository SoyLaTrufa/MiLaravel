<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    Protected $table = 'genres';
    Protected $guarded =[];

    public function pelicula(){
      return $this->hasMany(Pelicula::class, 'genre_id');
    }
}
