<?php

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

Route::get('/planta', [
			'as'=> 'listagem', 
			'uses' => 'PlantaController@lista'
		]);

Route::get('/planta/visualizar/{id}', 'PlantaController@visualizar')->where('id', '[0-9]+');

Route::put('/planta/editar/{id}', 'PlantaController@editar')->where('id', '[0-9]+');

Route::get('/planta/novo', [
			'as'=> 'novo', 
			'uses' => 'PlantaController@novo'
		]);

Route::post('/planta/adiciona', 'PlantaController@adiciona');

Route::get('/planta/exclui/{id}', 'PlantaController@exclui')->where('id', '[0-9]+');

Route::get('/planta/json', 'PlantaController@listaJson');



