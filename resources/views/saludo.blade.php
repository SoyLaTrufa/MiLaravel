@extends('layouts.master')

@section('cuerpo')
	Hola, cómo estás, <strong>{{ $nombre }}</strong><br>

@endsection

@section('titulo')
	<title>Saludo!</title>
@endsection
