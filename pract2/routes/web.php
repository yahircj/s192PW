<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasControlador;

/* 
Route::get('/', function () {return view('welcome');}); */
/* Route::view('/','welcome' ); */
Route::get('/',[VistasControlador::class, 'inicio'] )->name('inicio');
Route::get('/vistados',[VistasControlador::class, 'view2'] )->name('view2');
Route::get('/vistatres',[VistasControlador::class, 'view3'] )->name('view3');