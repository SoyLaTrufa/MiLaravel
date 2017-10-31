<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Peliculas</title>
  </head>
  <body>
    <h1>Pelicula</h1>

    {{-- @if (!$find)
    la pelicula {{$nombre}} no existe
    @else tenemos la pelicula {{$nombre}}
    @endif --}}
    @foreach ($peliculas as $key => $value)
      {{$value->title}} . <br>
    @endforeach


  </body>
</html>
