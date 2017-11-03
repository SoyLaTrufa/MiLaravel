@extends('layouts.master')
@section('cuerpo')
  <h2>EDITAR ACTOR</h2>
  <form name="agregarActor" method="POST" action="{{route('editar_actor', $actor)}}">
    {{method_field('PUT')}}
    {{csrf_field()}}
      <div @if ($errors->has('last_name'))
    <span style="color: red;">{{ $errors->first('last_name') }}</span>
  @endif>
          <label for="last_name">Apellido</label>
          <input type="text" name="last_name" value="{{ old('last_name', $actor->last_name) }}">
      <div @if ($errors->has('first_name'))
    <span style="color: red;">{{ $errors->first('first_name') }}</span>
  @endif>
          <label for="first_name">Nombre</label>
          <input type="text" name="first_name" value="{{ old('first_name', $actor->first_name) }}">
      </div>
      <div @if ($errors->has('rating'))
    <span style="color: red;">{{ $errors->first('rating') }}</span>
  @endif>
          <label for="rating">Rating</label>
          <input type="text" name="rating" value="{{ old('rating', $actor->rating) }}">
      </div>
      <div>
				<button type="submit">Editar</button>
			</div>
  </form>





@endsection
@section('titulo')
	<title>Editar Actor!</title>
@endsection
