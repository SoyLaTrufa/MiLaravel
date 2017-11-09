<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubirImagenController extends Controller
{
    public function mostrarSubir(){

      return view ('subir-imagen');
    }

    public function subir(Request $request){

      $nombre = 'fotos.' . $request->file('imagen')->extension();
      $path = $request->file('imagen')->storePubliclyAs('public/fotos', $nombre);

      return redirect('/subir');
    }
}
