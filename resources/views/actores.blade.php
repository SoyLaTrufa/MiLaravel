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
    <table border="1" width="40%">
    @foreach ($actores as $actor)
    <tr>
      <td><a href="{{ route('show_actor', $actor) }}">
        {{ $actor->getNombreCompleto() }}
      </a></td>
      <td><form method="POST" action="{{ route('eliminar_actor', $actor) }}" onsubmit="return confirm('seguro?')">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit">X</button></td>
    </tr>
    @endforeach
    </table>


@endsection
@section('titulo')
	<title>Actores!</title>
@endsection
