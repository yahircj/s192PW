<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function calc_mb_gb(){
        return view('repaso1');
    }

    public function calc_mb(){
        return view('mb');
    }

    public function calc_gb(){
        return view('gb');
    }
}
