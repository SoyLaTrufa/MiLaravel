@extends('layouts.master')
@section('cuerpo')
<!-- @if(count($errors)>0)
<p>
  <ul>
    @foreach($errors->all() as $error)
      <li style="color:red">{{ $error }}</li>
    @endforeach
  </ul>
</p>
@endif -->
<form id="agregarPelicula" name="agregarPelicula" method="POST" action="{{route('crear_pelicula')}}">
  {{csrf_field()}}
    <div @if ($errors->has('title'))
	<span style="color: red;">{{ $errors->first('title') }}</span>
@endif>
        <label for="titulo">Titulo</label>
        <input type="text" name="title" value="{{ old('title') }}">
    </div>
    <div @if ($errors->has('rating'))
	<span style="color: red;">{{ $errors->first('rating') }}</span>
@endif>
        <label for="rating">Rating</label>
        <input type="text" name="rating" value="{{ old('rating') }}">
    </div>
    <div @if ($errors->has('awards'))
	<span style="color: red;">{{ $errors->first('awards') }}</span>
@endif>
        <label for="premios">Premios</label>
        <input type="text" name="awards" value="{{ old('awards') }}">
    </div>
    <div @if ($errors->has('length'))
	<span style="color: red;">{{ $errors->first('length') }}</span>
@endif>
        <label for="duracion">Duracion</label>
        <input type="text" name="length" value="{{ old('length') }}">
    </div>
    <div @if ($errors->has('release_date'))
	<span style="color: red;">{{ $errors->first('release_date') }}</span>
@endif>
        <label>Fecha de Estreno</label>
        <input type="date" name="release_date" value="{{ old('release_date') }}">
    </div>
    <input type="submit" value="Agregar Pelicula" name="submit"/>
</form>
@endsection

@section('titulo')
	<title>Crear-Pelicula!</title>
@endsection
