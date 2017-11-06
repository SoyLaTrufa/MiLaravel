<?php
use Illuminate\Support\Facades\Input;
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
// Route::get('/peliculas','MovieController@todasLasPeliculas')->name('lista_peliculas');

// Route::get('/peliculas/{id}', 'MovieController@BuscarPeliculaId');


// Route::get('/peliculas/buscar/{nombre}', 'MovieController@BuscarPeliculaNombre');


//CLASE 3
// Route::get('actores/redirect', function(){
//   $search = urldecode(e(Input::get('search')));
//   $route = "actores";
//   return redirect($route);
// });
//
// Route::get('actores/{search}', 'ActorController@search');
Route::get('peliculas', 'MovieController@listar')->name('lista_peliculas');
Route::get('pelicula/{id}', 'MovieController@detalle')->name('detalle_pelicula');

Route::get('actores', 'ActorController@listar')->name('listado_actores');
Route::get('actor/{id}', 'ActorController@detalle')->name('detalle_actor');

Route::get('actores/buscar', 'ActorController@search')->name('search_actors');
//-----------------------------------------------
//clase 4
Route::get('peliculas/crear', 'MovieController@crearFormulario')->name('form_crear_pelicula');
Route::post('peliculas/crear', 'MovieController@crear')->name('crear_pelicula');
Route::delete('pelicula/{id}', 'MovieController@eliminar')->name('eliminar_pelicula');

Route::get('actores/crear', 'ActorController@crearForm')->name('form_crear_actor');
Route::post('actores/crear', 'ActorController@crear')->name('crear_actor');
Route::delete('actores/{id}', 'ActorController@eliminar')->name('eliminar_actor');
//----------------------------------------------
// clase 5
Route::get('actores/{id}/editar', 'ActorController@editarForm')->name('editar_form');
Route::put('actores/{id}/editar', 'ActorController@editar')->name('editar_actor');



?>
