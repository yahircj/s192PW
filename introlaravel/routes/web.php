<?php

use Illuminate\Support\Facades\Route;


//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */


//ruta tipo view
Route::view('/','welcome' );

Route::view('/form', 'formulario')->name('formulario');

Route::view('/clientes', 'clientes')->name('clientes');

Route::view('/inicio', 'inicio')->name('inicio');