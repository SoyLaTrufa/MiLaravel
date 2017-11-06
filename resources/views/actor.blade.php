@extends('layouts.master')
@section('cuerpo')
  <h2>{{$actor->getNombreCompleto()}}</h2>
  <ul>
    <li>ID:{{$actor->id}}</li>
    <!-- @if ($actor->favorite_movie_id) -->
    <li>PELICULA FAVORITA:{{$actor->favorite_movie_id}}</li>
    <!-- @endif -->
    <li>RATING:{{$actor->rating}}</li>


  </ul>
@endsection
@section('titulo')
	<title>Actor!</title>
@endsection
