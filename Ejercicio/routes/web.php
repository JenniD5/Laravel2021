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

Route::get('nota/{id}/detalles', function($id){
    return [
        'Detalles del id:' .$id => [
            'nombre',
            'fecha',
            'contenido',
        ]
        ];
});


Route::get('nota/crear', function(){
    return 'Crear una nueva nota';
});

Route:: get('nota/listar', function(){
    return 'aqui se listaran las notas';
});

Route :: get ('nota/editar', function(){
    return 'aqui se editaran las notas';
});
Route:: get('nota/{id}', function($id){
    return 'detalles de la nota con id:' .$id;
});