<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
  Protected $table = 'movies';

  protected $fillable = ['title', 'rating', 'release_date', 'length', 'awards'];

  public function genero(){
    return $this->belongsTo(Genero::class, 'genre_id');
  }
}
