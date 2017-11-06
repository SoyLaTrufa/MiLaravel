<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelicula extends Model
{
  use SoftDeletes;

  Protected $table = 'movies';

  protected $fillable = ['title', 'rating', 'release_date', 'length', 'awards'];

  public function genero(){
    return $this->belongsTo(Genero::class, 'genre_id');
  }

  public function peliculasFavoritas(){
    return $this->hasMany(Actor::class, 'favorite_movie_id', 'movie_id');
  }
}
