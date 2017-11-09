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
    <p><a href="{{route('crear_actor')}}"><h2>Crear Actor</h2></a></p>
    <table border="1" width="40%">
      <td>NOMBRE</td>
      <td></td>
    @foreach ($actores as $actor)
    <tr>
      <td><a href="{{ route('detalle_actor', $actor) }}">
        {{ $actor->getNombreCompleto() }}
      </a></td>
      <td><a href="{{ route('editar_form', $actor) }}">editar</a></td>
      <td><form method="POST" action="{{ route('eliminar_actor', $actor) }}" onsubmit="return confirm('seguro?')">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit">X</button></td>
    </tr>
    @endforeach
    </table>

    {{$actores->links()}}


@endsection
@section('titulo')
	<title>Actores!</title>
@endsection
