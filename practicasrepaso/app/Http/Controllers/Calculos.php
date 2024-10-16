<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculos extends Controller
{

    public function convertirGb(Request $request)
    {
        $gb = $request->input('gb');
        $mb = $gb * 1024;

        return view('gb', ['resultado' => $mb, 'gb' => $gb]);
    }

    public function convertirMb(Request $request)
    {
        $mb = $request->input('mb');
        $gb = $mb / 1024;

        return view('mb', ['resultado' => $gb, 'mb' => $mb]);
    }

}
