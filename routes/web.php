<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//---------------------------------------------
//CALSE 1
// Route::get('/saludar/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
//     if ($apellido!=null) {
//       return 'hola'. $nombre . 'tu apellido es ' . $apellido;
//     }
//     return  'hola '. $nombre . ' no se tu apellido ';
// });

// Route::get('/resultado/{numero}/{otronum?}/', function ($numero, $otronum=null) {
//     if (!$otronum==null) {
//       return $numero * $otronum;
//     } elseif ($numero%2==0) {
//       return  'el numero  es par';
//     }
//     return  'el numero no es par';
// });

//___________________________


//CLASE 2
// Route::get('/saludar/{nombre}', function ($nombre) {
//     return view('saludos.saludo', ['nombre'=>$nombre]);
// });

Route::get('/saludar','SaludarController@saludar')->name('saludo');

// Route::get('/peliculas/{id}','PeliculasController@buscarPeliculaId');
// Route::get('/peliculas/buscar/{nombre}','PeliculasController@buscarPeliculaNombre');
// Route::get('/peliculas','PeliculasController@todasLasPeliculas');

// Route::get('/peliculas/{id}', 'MovieController@BuscarPeliculaId');


// Route::get('/peliculas/buscar/{nombre}', 'MovieController@BuscarPeliculaNombre');


//CLASE 3

Route::get('/database', 'MovieController@listar')->name('listado'); //href router {{'listado'}}
// Route::get('/database/{id}', 'MovieController@detalle');
Route::get('actores', 'ActorController@directory')->name('listado_actores');

Route::get('actor/{id}', 'ActorController@show')->name('show_actor');

?>
