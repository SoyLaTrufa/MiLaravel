@extends('layouts.master')
@section('cuerpo')
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="title" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="premios"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="release_date" id="duracion"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <input type="date" name="" value="">
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
        @endsection
        @section('titulo')
        	<title>Agregar Pelicula!</title>
        @endsection
