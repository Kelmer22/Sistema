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
    return view('welcome');
});


/*Route::get('/medicamentos', function () {
    return view('consulta-medicamentos');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');

/*Route::get('/consulta', 'PacienteController@consulta');
Route::get('/exame', 'ExamesController@homeExame');
Route::get('/medicamentos', 'MedicamentoController@listaMedicamento');
Route::post('/paciente', 'PacienteController@lista');*/

Route::get('/consulta', ['uses'=>'HomeController@consulta','as'=>'consultaUsuario.index']);
Route::get('/exame', ['uses'=>'ExamesController@listaExame','as'=>'exame.index']);
Route::get('/perfil', ['uses'=>'HomeController@perfil','as'=>'perfil.index']);
Route::post('/perfil', ['uses'=>'HomeController@perfilAtualiza','as'=>'perfil.index']);

Route::get('/agenda', ['uses'=>'HomeController@agenda','as'=>'agenda.index']);

