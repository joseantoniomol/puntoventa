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


// asi se toma una ruta para una vista
Route::get('/login', function () {
    return view('login');
});


// asi se envian parametros en una ruta el ? es para que el parametro sea opcional, todo lo de el array se hagarra al otro lado como una variable normal

// tambien se pueden hacer condiciones
Route::get('/listausuario/{usuario?}', function ($usuario = 'no hay nada seleccionado') {
    return view('login' , array(
    	'usuario'=> $usuario
    	));
});
