<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/games/lista', 'GameController@index')->name('index');
Route::get('/games/cadastrar','GameController@create')->name('cadastrar-jogo');
Route::post('/games/cadastrar','GameController@store')->name('validar-jogo');
Route::get('/games/analisar/{id}', 'GameController@show')->name('ver_jogo');
Route::get('/games/editar/{id}', 'GameController@edit')->name('editar_jogo');
Route::post('/games/editar/{id}', 'GameController@update')->name('valEdit_jogo');
Route::get('/games/deletar/{id}', 'GameController@delete')->name('deletar_jogo');
Route::post('/games/deletar/{id}', 'GameController@destroy')->name('excluir_jogo');


Route::get('/', function () {
    return view('welcome');
});
