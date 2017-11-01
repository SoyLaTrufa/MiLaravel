@extends('layouts.master')
@section('cuerpo')

<form action="{{url('actores/buscar')}}" method="get">
  <fieldset>
    <legend>Ingresá un nombre</legend>
    <input type="text" name="search" value="">
    <input type="submit" name="Buscar" value="Buscar">
  </fieldset>
  
</form>
<h1>Actores</h1>
    @foreach ($actores as $actor)
      <a href="{{route('show_actor', $actor)}}">
        {{$actor->getNombreCompleto()}}<br>
      </a>
    @endforeach
@endsection
@section('titulo')
	<title>Actores!</title>
@endsection
