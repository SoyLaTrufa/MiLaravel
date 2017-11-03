<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    Protected $table = 'genres';

    public function pelicula(){
      return $this->hasMany(Pelicula::class, 'genr<e_id');
    }
}
