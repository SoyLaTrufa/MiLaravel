@extends('layouts.master')
@section('cuerpo')

  <div style="margin:20px 0;">
  	<form method="post" enctype="multipart/form-data">
  		{{ csrf_field() }}
  		<div style="margin:20px 0;">
  			<label>Archivo:</label>
  			<input type="file" name="imagen">
  		</div>

  		<div>
  			<button type="submit">Subir imagen</button>
  		</div>

  	</form>
  </div>


@endsection
@section('titulo')
	<title>Subir!</title>
@endsection
