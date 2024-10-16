<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        return view('formulario');
    }

    public function consulta(){
        return view('clientes');
    }
    
    public function procesarCliente(Request $peticion){
        /* return 'La información ha llegado al controlador'; */

        //devuelve todo lo que contiene la petición
        //return $peticion->all();

        //devuelve la ruta desde la que se hizo la petición
        //return $peticion->path();

        //Devuelve la url desde la que se realiza la petición
        //return $peticion->url();
    
        //Devuelve la ip desde la que se realiza la peticion
        //return $peticion->ip();

        return $peticion->ip();
    }


}


