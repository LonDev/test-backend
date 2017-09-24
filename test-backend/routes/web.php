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
Route::get('/','ContatoController@index');

//define a rota de tratamento do contato
Route::group(['prefix'=>'contato', 'where'=>['id'=>'[0-9]+', 'desc'=>'[A-z]+']],function(){
	
	//lista todos os contatos
	Route::get('/listar','ContatoController@listar');

	//recupera um contato para edição
	Route::get('/find/{id}','ContatoController@find');

	//adiciona novo contato
	Route::post('/add','ContatoController@create');

	//altera um contato
	Route::post('/edit/{id}','ContatoController@edit');

	//deleta um contato
	Route::get('/delete/{id}','ContatoController@delete');

});

Route::auth();

Route::get('/login', 'Auth\LoginController@index');

Route::post('/login', 'Auth\LoginController@authenticate');

Route::get('/logout', 'Auth\LoginController@logout');