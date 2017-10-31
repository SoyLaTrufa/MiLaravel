@extends('layouts.master')
@section('cuerpo')
  <h2>{{$actor->getNombreCompleto()}}</h2>
  <ul>
    <li>ID:{{$actor->id}}</li>
    <li>MOVIE ID:{{$actor->favorite_movie_id}}</li>
    <li>RATING:{{$actor->rating}}</li>
  </ul>
@endsection
@section('titulo')
	<title>Actor!</title>
@endsection
