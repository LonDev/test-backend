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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','ContatoController@index');

//define a rota de tratamento do contato
Route::group(['prefix'=>'contato', 'where'=>['id'=>'[0-9]+', 'desc'=>'[A-z]+']],function(){
	
	//lista
	Route::get('/listar','ContatoController@listar');

	//adiciona novo contato
	Route::get('/add','ContatoController@add');

	//altera um contato
	Route::get('/{id}/add','ContatoController@add');

	//deleta um contato
	Route::get('/{id}/add','ContatoController@delete');


});
