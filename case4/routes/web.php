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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

      
        Route::resource('livros', 'LivroController');
        Route::resource('livroautor', 'CategoriaController');
        Route::resource('categorias', 'LivroAutorController');


    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
