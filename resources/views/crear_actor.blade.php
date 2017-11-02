@extends('layouts.master')
@section('cuerpo')

<form name="agregarActor" method="POST" action="{{route('crear_actor')}}">
  {{csrf_field()}}
    <div @if ($errors->has('last_name'))
  <span style="color: red;">{{ $errors->first('last_name') }}</span>
@endif>
        <label for="last_name">Apellido</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}">
    <div @if ($errors->has('first_name'))
  <span style="color: red;">{{ $errors->first('first_name') }}</span>
@endif>
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}">
    </div>
    <div @if ($errors->has('rating'))
  <span style="color: red;">{{ $errors->first('rating') }}</span>
@endif>
        <label for="rating">Rating</label>
        <input type="text" name="rating" value="{{ old('rating') }}">
    </div>
    <div @if ($errors->has('favorite_movie_id'))
  <span style="color: red;">{{ $errors->first('favorite_movie_id') }}</span>
@endif>
        <label for="favorite_movie">Pelicula favorita</label>
        <input type="text" name="favorite_movie_id" value="{{ old('favorite_movie_id') }}">
    </div>
    <input type="submit" value="Agregar Pelicula" name="submit"/>
</form>


@endsection

@section('titulo')
	<title>Crear-Actor!</title>
@endsection
