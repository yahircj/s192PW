<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VistasControlador;


route::get('/', [VistasControlador::class,'home'])->name('inicio');
route::get('/registro', [VistasControlador::class,'formulario'])->name('Libro');
Route::post('/registrarLibro', [VistasControlador::class, 'registrarLibro'])->name('enviar');