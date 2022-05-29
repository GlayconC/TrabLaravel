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

Route::delete('/produto_delete/{id}', 
    'App\Http\Controllers\ProdutosController@deletar');    