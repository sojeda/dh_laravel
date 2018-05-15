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


Route::get('home', function () {
    return 'Hello World';
});


Route::get('home/{name}/{lastName}', function ($name, $lastName) {
    return 'Hello ' . $name . ' ' . $lastName;
});


Route::get('post/{post_id}/comments/{comment_id?}', function ($post_id, $comment_id = 'No hay conentarios') {
	return $comment_id;
});


Route::get('post/{post_id}/comments/{comment_id?}', function ($post_id, $comment_id = null) {
	if ($comment_id !== null) {
		return $comment_id;
	} else {
		return 'No hay comentarios';
	}
});



Route::get('saludo/{saludo}', 'SaludoControlador@index'); 

Route::get('saludo', 'Saludos\SaludoControlador@loquesea'); 

Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');   	 

Route::get('peliculas', 'PeliculasController@listado');

Route::get('actores', 'ActorController@directory');

Route::get('actor/{id}', 'ActorController@show');

Route::get('actores/buscar', 'ActorController@search')->name('actor.buscar');

Route::get('peliculas/agregar', 'PeliculasController@create')->name('peliculas.agregar');

Route::post('peliculas/agregar', 'PeliculasController@store')->name('peliculas.guardar');