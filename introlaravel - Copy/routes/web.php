<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


route::get('/',[controladorVistas::class, 'home'])->name('inicio');

route::get('/form',[controladorVistas::class, 'formulario'])->name('formulario');

route::get('/clientes',[controladorVistas::class, 'consulta'])->name('clientes');
 
Route::view('/componentes', 'componentes')->name('componentes'); 

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('enviar');

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

