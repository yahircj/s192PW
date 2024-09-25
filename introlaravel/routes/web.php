<?php

use Illuminate\Support\Facades\Route;


//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */


//ruta tipo view
Route::view('/','welcome' );

route::view('/form', 'formulario');