<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasControlador extends Controller
{
    public function home(){
        return view('principal');
    }

    public function formulario(){
        return view('registroLibro');
    }
    
    public function registrarLibro(){
        
        return view('registroLibro');
    }
}
