<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistaControlador;

Route::get('/', function () {
    return view('formUsuarios');
});

Route::post('/registrarCliente', [VistaControlador::class, 'registrarClientes'])->name('registrar');