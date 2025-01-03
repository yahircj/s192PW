<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VistasControlador;


route::get('/', [VistasControlador::class,'home'])->name('inicio');
route::get('/registro', [VistasControlador::class,'formulario'])->name('Libro');
Route::post('/libro', [VistasControlador::class, 'registroLibro'])->name('enviar');
