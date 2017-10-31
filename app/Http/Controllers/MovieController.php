<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class MovieController extends Controller
{

  public function listar(){
    $peliculas = Pelicula::where('rating', '>', 8)
        ->take(5)
        ->get();
        // ->tosql(); debug return$peliculas;
        // dd($peliculas); debugging
    return view('peliculas', compact('peliculas'));
  }

  // public function detalle($id){
  //   $pelicula = Pelicula::find($id);
  //   $pelicula = Pelicula::first();
  //   return view('peliculas', compact('pelicula'));
  // }


  // public function BuscarPeliculaId($id){
  //
  //   $peliculas = [
  //     1 => 'Toy Story',
  //     2 => 'Buscando a Nemo',
  //     3 => 'Avatar',
  //     4 => 'Star Wars',
  //     5 => 'Up',
  //     6 => 'Mary and Max'
  //   ];
  //
  //     return $peliculas[$id];
  // }
  //
  // public function BuscarPeliculaNombre($nombre){
  //
  //   $pelicula = [
  //     1 => 'Toy Story',
  //     2 => 'Buscando a Nemo',
  //     3 => 'Avatar',
  //     4 => 'Star Wars',
  //     5 => 'Up',
  //     6 => 'Mary and Max'
  //   ];
  //    $listaPeliculas = implode(',', $pelicula);
  //    $find = stripos($listaPeliculas, $nombre);
  //    return  view('peliculas', compact('find', 'nombre'));
  // }

}
