<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/cadastro', function () {
    return view('auth.cadastro');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/planta', 'PlantaController@lista');

Route::get(	'/planta/visualizar/{id}', 'PlantaController@visualizar')->where('id', '[0-9]+');

Route::get('/planta/novo', 'PlantaController@novo');

Route::get('/planta/exclui/{id}', 'PlantaController@exclui');

Route::get('/planta/adiciona', 'PlantaController@adiciona');
