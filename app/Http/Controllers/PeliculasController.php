<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    // public function buscarPeliculaId($id){
    //   $peliculas = [
    //       1 => "toy story",
    //       2 => "Buscando A Nemo",
    //       3 => "Avatar",
    //       4 => "Star Wars",
    //       5 => "Up",
    //       6 => "Mary and Max"
    //   ];
    //   return $peliculas[$id];
    // }


    // public function buscarPeliculaNombre($nombre){
    //   $peliculas = [
    //       1 => "toy story",
    //       2 => "buscando A Nemo",
    //       3 => "avatar",
    //       4 => "Star Wars",
    //       5 => "up",
    //       6 => "mary and max"
    //   ];
    //   $titulos = implode(',', $peliculas);
    //   if (strpos($titulos, $nombre)) {
    //     return $nombre;
    //   }else echo 'esta pelicula no existe';
    // }

    public function todasLasPeliculas(){
      $peliculas = [
          1 => "toy story",
          2 => "buscando A Nemo",
          3 => "avatar",
          4 => "Star Wars",
          5 => "up",
          6 => "mary and max"
      ];
        return view ('peliculas', compact('peliculas'));
      }
}
