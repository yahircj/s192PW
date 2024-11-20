<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;

//cONTROLADOR DE VISTAS

route::get('/', [controladorVistas::class, 'home'])->name('inicio');

route::get('/form', [controladorVistas::class, 'formulario'])->name('formulario');



Route::view('/componentes', 'componentes')->name('componentes');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('enviar');

//CONTROLADOR DE CLIENTE

route::get('/cliente/create', [clienteController::class, 'create'])->name('formulario');

Route::post('/cliente', [clienteController::class, 'store'])->name('enviar');

route::get('/clientes', [clienteController::class, 'index'])->name('clientes');

//Ruta para acceder a la vista de actualización.
route::get('clientes/{id}/Update', [clienteController::class, 'edit'])->name('Actualizar');

//Ruta para actualizar los datos
Route::put('/clientes/{id}', [clienteController::class, 'update'])->name('update');

// Ruta para eliminar un cliente
Route::delete('/clientes/{id}', [clienteController::class, 'destroy'])->name('Eliminar');


//Shift alt a
//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */


//ruta tipo view
/* Route::view('/','welcome' );

Route::view('/form', 'formulario')->name('formulario');

Route::view('/clientes', 'clientes')->name('clientes');

Route::view('/inicio', 'inicio')->name('inicio');

*/
