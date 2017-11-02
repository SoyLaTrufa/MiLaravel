<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
  Protected $table = 'movies';

  protected $fillable = ['title', 'rating', 'release_date', 'length', 'awards'];
}
