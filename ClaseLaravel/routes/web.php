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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function(){
    return 'Hola MUNDO';
});

Route::get ('/', function(){
    return [
        'Clases' => [
            'instalacion de laravel',
            'rutas basicas de laravel',
            'controllers de laravel',
            ]
        ];
});

Route::get('clases', function(){
    return 'aqui se listaran todas las clases';
});

Route::get('clases/crear', function(){
    return 'aqui se crearan todas las clases';
});

Route::get('clases/{id}/editar', function($id){
    return 'edita la clase con clase id:' .$id ;
});


