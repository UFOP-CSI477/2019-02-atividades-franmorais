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

Route::get('h','homeController@index' )->name('home');

Route::get('/home', 'homeController@index');
Auth::routes();


Route::get('/about', ['as' => 'about', 'uses' => 'homeController@about']);

Route::group(['middleware' => ['web']], function () {
    //routes here

		Route::get('/relatorios', ['as' => 'geral.relatorio', 'uses' => 'homeController@relatorios']);
		Route::get('/listaaluno', ['as' => 'geral.listaaluno', 'uses' => 'alunocontroller@index']);
		Route::get('/listap', ['as' => 'geral.listap', 'uses' => 'professorcontroller@professoresindex']);
		Route::get('/incluir', ['as' => 'geral.incluir', 'uses' => 'projetocontroller@addIndex']);
		Route::get('/inserir', ['as' => 'geral.adicionar', 'uses' => 'projetocontroller@adicionar']);
		Route::post('/salvar', ['as' => 'geral.salvar', 'uses' => 'projetocontroller@salvar']);




});


