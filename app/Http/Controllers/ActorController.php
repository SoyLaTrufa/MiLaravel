<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\actores;

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
