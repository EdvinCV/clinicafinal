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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Pacientes
Route::get('/pacientes', 'PacientesController@index');
Route::get('/searchp', 'PacientesController@search');
Route::get('/createPaciente','PacientesController@create');
Route::post('/pacientes/store','PacientesController@store');
Route::get('/pacientes/{id}/eliminar','PacientesController@delete');
Route::get('/pacientes/{id}/editar','PacientesController@info');
Route::post('/pacientes/update/{id}','PacientesController@update');
Route::get('/pacientes/delete/{id}','PacientesController@delete');

//Medicamentos
Route::get('/medicamentos','MedicamentoController@index');
Route::get('/searchm','MedicamentoController@search');
Route::get('/medicamentos/create','MedicamentoController@create');
Route::post('/medicamentos/store','MedicamentosController@store');

//Consultas
Route::get('/consultas/{id}/create','ConsultasController@create');
Route::post('/consultas/store','ConsultasController@store');

//Historial
Route::get('/historial/{id}', 'HistorialController@show');
Route::get('/print/{id}', 'HistorialController@print');
Route::get('/historial/delete/{id}','HistorialController@delete');

//Users
Route::get('/users','UserController@index');
Route::get('/users/create','UserController@create');
Route::post('/users/store','UserController@store');