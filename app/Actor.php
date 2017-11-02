<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    Protected $table = 'actors';
    protected $fillable = ['first_name', 'last_name', 'rating', 'favorite_movie_id'];

    public function getNombreCompleto(){
      return $this->first_name . " " . $this->last_name;
    }
}
