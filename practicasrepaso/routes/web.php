<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\Calculos;

/* Route::get('/', function () {
    return view('welcome');
}); */

route::get('/',[controladorVistas::class, 'home'])->name('inicio');

route::get('/repaso1',[controladorVistas::class, 'calc_mb_gb'])->name('rep');

route::get('/repaso1/calc_mb',[controladorVistas::class, 'calc_mb'])->name('mb');

route::get('/repaso1//calc_gb',[controladorVistas::class, 'calc_gb'])->name('gb');

Route::post('/convertir-gb', [Calculos::class, 'convertirGb'])->name('convertirGb');

Route::post('/convertir-mb', [Calculos::class, 'convertirMb'])->name('convertirMb');