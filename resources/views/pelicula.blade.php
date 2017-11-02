@extends('layouts.master')
@section('cuerpo')
  <h2>{{$pelicula->title}}</h2>
  <ul>
    <li>ID:{{$pelicula->id}}</li>
    <li>RATING:{{$pelicula->rating}}</li>
    <li>AWARDS:{{$pelicula->awards}}</li>
    <li>RELEASE DATE:{{$pelicula->release_date}}</li>
    <li>DURACIÓN:{{$pelicula->length}}</li>
  </ul>
@endsection
@section('titulo')
	<title>Pelicula!</title>
@endsection
