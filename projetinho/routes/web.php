<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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


Route::get('/produtos', 
    'App\Http\Controllers\ProdutosController@listagem');

Route::get('/cidades', 
    'App\Http\Controllers\CidadeController@listagem');

Route::get('/estados', 
    'App\Http\Controllers\EstadosController@listagem');

Route::get('/pessoas', 
    'App\Http\Controllers\PessoasController@listagem');    

Route::delete('/produto_delete/{id}', 
    'App\Http\Controllers\ProdutosController@deletar');
    
Route::delete('/pessoas_delete/{id}', 
    'App\Http\Controllers\PessoasController@deletar');     

Route::delete('/cidade_delete/{id}', 
    'App\Http\Controllers\CidadeController@deletar');

Route::get('/pessoas/edit/{id}', 
    'App\Http\Controllers\PessoasController@editar');     

Route::put('/pessoas_update/{id}', 
    'App\Http\Controllers\PessoasController@update'); 

    