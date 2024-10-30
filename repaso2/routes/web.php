<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

route::view('/registro', 'registroLibro')->name('Libro');