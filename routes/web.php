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


Route::get('hola/{codigo}', function ($codigo) {
    return 'hola '.$codigo;
})->where('codigo','[0-9]+');

Route::get('usuario/{nombre}', function ($nombre) {
    return 'hola '.$nombre;
})->where('nombre','[A-Za-z]+');

Route::get('escritorio',[
    'as'=> 'escritorio','uses'=> 'EscritorioController@index'
]);

Route::get('usuarioo','Usuario\UsuarioController@index');
Route::get('crear','Producto\ProductoController@create');
Route::get('producto','producto\ProductoController@index');

route::get('panel','Usuario\UsuarioController@panel');

route::resource('productos','Producto\ProductoController');