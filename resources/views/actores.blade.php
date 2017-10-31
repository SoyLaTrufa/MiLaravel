@extends('layouts.master')
@section('cuerpo')
<h1>Actores</h1>
    @forelse ($actores as $actor)
      <a href="{{route('show_actor', $actor)}}">
        {{$actor->getNombreCompleto()}}<br>
      </a>
    @endforeach
@endsection
@section('titulo')
	<title>Actores!</title>
@endsection

<h3>BUSCADOR</h3>


</html>
