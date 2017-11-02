<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;


class ActorController extends Controller
{
    public function directory(){
      $actores = Actor::all();
        return view('actores', compact('actores'));
    }

    public function show($id){
        $actor = Actor::find($id);

      return view('actor', compact('actor'));
    }

    public function crearForm(){
      return view('crear_actor');
    }

    public function crear(request $request){
      $this->validate($request, [
        'first_name'     => 'required',
        'last_name'      => 'required',
        'rating'         => 'required|numeric',
        'favorite_movie_id' => 'required'
      ],
      [
        'first_name.required'         => 'Debe completar este campo',
        'rating.required'             => 'Debe completar este campo',
        'favorite_movie_id.required'     => 'Debe completar este campo'
      ]);

      $actor = new Actor($request->all());
      $actor->save();
      return redirect(route('listado_actores'));
    }

    public function eliminar($id){
      $actor = Actor::findOrFail($id);
      $actor->delete();
      return redirect(route('listado_actores'));
    }

    // public function search($search){
    //     $actoresBuscados = Actor::where('first_name', 'like', '%dg%')->get();
    //     $actoresBuscados = urldecode($actoresBuscados);
    //     return view('actores', compact('actoresBuscados'));
    //       return urldecode($search);
    //       $actoresBuscados = Actor::where('first_name', 'LIKE', '%' . $search . '%')
    //             ->get();
    // }
    public function search(){
      $actoresBuscados = Actor::WHERE('first_name', 'like', '%' .$algo . '%')
            ->get();
      return view('actores', compact('actoresBuscados'));
    }
}
