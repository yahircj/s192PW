<?php

use Illuminate\Support\Facades\Route;

Route::view('/','principal' )->name('inicio');
Route::view('/form','formularioContacto' )->name('formulario');
Route::view('/lista','ListadoContactos' )->name('contactos');
