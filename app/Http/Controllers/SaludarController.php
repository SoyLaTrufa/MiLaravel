<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludarController extends Controller
{
    public function saludar(){
      // return view('saludo', ['persona'=>$nombre]);
      return view('saludo', ['nombre'=>'TRUFA']);
    }
}
