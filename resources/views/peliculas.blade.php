@extends('layouts.master')
@section('cuerpo')

    <h1>Peliculas</h1>
    <table border="1" width="40%">
    	@forelse($peliculas as $pelicula)
    		<tr>
    			<td>{{ $pelicula->id }}</td>
    			<td>

    				<a href="{{ route('detalle_pelicula', $pelicula) }}">
    					{{ $pelicula->title }}
    				</a>
    			</td>
          <td>
            @if ($pelicula->genero)
              {{$pelicula->genero->name}}
            @endif
          </td>
    			<td>
    				<form method="POST" action="{{ route('eliminar_pelicula', $pelicula) }}" onsubmit="return confirm('seguro?')">
    					{{ method_field('DELETE') }}
    					{{ csrf_field() }}
    					<button type="submit">X</button>

    				</form>
    			</td>
    		</tr>
    	@empty
    		<tr><td>No hay películas</td></tr>
    	@endforelse
    </table>

@endsection
@section('titulo')
	<title>Peliculas!</title>
@endsection
