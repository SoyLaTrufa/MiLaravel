@extends('layouts.master')
@section('cuerpo')
  <h2>{{$pelicula->title}}</h2>
  <ul>
    <li>ID:{{$pelicula->id}}</li>
    <li>RATING:{{$pelicula->rating}}</li>
    <li>AWARDS:{{$pelicula->awards}}</li>
    <li>RELEASE DATE:{{$pelicula->release_date}}</li>
    <li>DURACIÓN:{{$pelicula->length}}</li>
    <li>GENERO:{{$pelicula->genero->name}}</li>
    <li>ACTORES:</li>
    @foreach ($actores as $actor)
    <li>{{$actor->first_name}} {{$actor->last_name}} </li>
    @endforeach

  </ul>
@endsection
@section('titulo')
	<title>Pelicula!</title>
@endsection
