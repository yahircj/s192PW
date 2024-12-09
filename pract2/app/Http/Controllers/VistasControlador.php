<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasControlador extends Controller
{
    public function inicio(){
        return view('welcome');
    }
    public function view2(){
        return view('view2');
    }
    public function view3(){
        return view('view3');
    }
}
