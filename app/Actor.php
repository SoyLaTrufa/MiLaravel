<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actor extends Model
{
    use SoftDeletes;
    Protected $table = 'actors';
    protected $fillable = ['first_name', 'last_name', 'rating'];

    public function getNombreCompleto(){
      return $this->first_name . " " . $this->last_name;
    }

    public function peliculaFavorita(){
      return $this->hasOne(Actor::class, 'favorite_movie_id', 'movie_id');
    }

    public function peliculas(){
      return $this->belongsToMany(Pelicula::class, 'actor_movie', 'actor_id', 'movie_id');
    }

}
