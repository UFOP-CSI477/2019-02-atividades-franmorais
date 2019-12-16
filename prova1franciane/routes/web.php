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

Route::get('/areageral',['as'=>'areageral','uses'=>'projetocontroller@index']);
Route::get('/areageral/buscaProject',['as'=>'areageral.projetos','uses'=>'projetocontroller@projetos']);
Route::post('/areageral/buscaProf',['as'=>'areageral.buscaProf','uses'=>'projetocontroller@buscaProf']);

Route::get('/areaadmin',['as'=>'areaadmin','uses'=>projetocontroller@inserri']);
Route::get('/areaadmin/inserir',['as'=>'areaadmin.inserir', 'uses'=>'projetocontroller@inserir']);
Route::post('/areaadmin/update',['as'=>'areaadmin.update', 'uses'=>'projetocontroler@update']);

Route::get('/areaadmin/relatorio-alunos',['as'=>'areaadmin.relatorio-alunos', 'uses'=>'projetocontroller@index']);
Route::get('/areaadmin/relatorio-professores',['as'=>'areaadm.relatorio-professores', uses'=>'professorcontroller@professoresIndex']);

