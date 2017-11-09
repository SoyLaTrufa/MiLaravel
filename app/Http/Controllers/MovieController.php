<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Actor;

class MovieController extends Controller
{

  public function listar(){
    $peliculas = Pelicula::all();
        // with('genero')->get()
        // ->take(5)
        // ->get();
        // ->tosql(); debug return$peliculas;
        // dd($peliculas); debugging
    return view('peliculas', compact('peliculas'));
  }

  public function detalle($id){
    $pelicula = Pelicula::Find($id);

    // $pelicula = Pelicula::first();
    // $genero = $pelicula->genero;
    $actores = $pelicula->actores;
    return view('pelicula', compact('pelicula', 'actores'));
  }

  public function crearFormulario(){

    return view('crear_pelicula');
  }

  public function crear(request $request){
    $this->validate($request, [
      'title'        => 'required|unique:movies',
      'rating'       => 'required|numeric|between:1,10',
      'release_date' => 'required|date',
      'awards'       => 'required|numeric',
      'length'       => 'required|numeric'
    ],
    [
      'title.unique'    => 'No puede haber 2 películas con el mismo título.',
      'title.required'  => 'Debe completar este campo.',
      'rating.required' => 'Debe completar este campo.',
      'rating.between'  => 'El puntaje debe estar entre 1 y 10.',
      'rating.numeric'  => 'Debe ingresar un numero',
      'release_date.required'  => 'Debe completar este campo.',
      'awards.required'  => 'Debe completar este campo.',
      'awards.numeric'  => 'Debe ingresar un numero',
      'length.required'  => 'Debe completar este campo',
      'length.numeric'  => 'Debe ingresar un numero',
    ]);

    $pelicula = new Pelicula ($request->all());
    $pelicula ->save();

    return redirect(route('lista_peliculas'));
  }

  public function eliminar($id){
    $pelicula = Pelicula::findOrFail($id);
    $pelicula->delete();
    return redirect(route('lista_peliculas'));
  }



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
  // public function todasLasPeliculas(){
  //   $peliculas = [
  //       1 => "toy story",
  //       2 => "buscando A Nemo",
  //       3 => "avatar",
  //       4 => "Star Wars",
  //       5 => "up",
  //       6 => "mary and max"
  //   ];
  //     return view ('peliculas', compact('peliculas'));
  //   }

}
