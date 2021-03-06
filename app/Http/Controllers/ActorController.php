<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Pelicula;


class ActorController extends Controller
{
    public function listar(){
      $actores = Actor::paginate(10);
        return view('actores', compact('actores'));
    }

    public function detalle($id){
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
        'rating'         => 'required|numeric'
      ],
      [
        'first_name.required'         => 'Debe completar este campo',
        'rating.required'             => 'Debe completar este campo',
        'favorite_movie_id.required'  => 'Debe completar este campo'
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

    public function editarForm($id){
      $actor = Actor::findOrFail($id);
      return view('editar_actor', compact('actor'));
    }

    public function editar(Request $request, $id){
      $this->validate($request, [
        'first_name'     => 'required',
        'last_name'      => 'required',
        'rating'         => 'required|numeric'
      ],
      [
        'rating.numeric' => 'El valor debe ser numerico'
      ]);
      $actor = Actor::findOrFail($id);
      $actor->fill($request->all());
      $actor->save();
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
