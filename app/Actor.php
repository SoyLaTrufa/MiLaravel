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

  

}
