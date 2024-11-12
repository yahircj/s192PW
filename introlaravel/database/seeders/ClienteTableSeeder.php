<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([[
            'nombre'=>'Ivan',
            'apellido'=>'guerra',
            'correo'=>'Guerra@gmail.com',
            'telefono'=>'448403445'
        ],[
            'nombre'=>'Yerps',
            'apellido'=>'Silver',
            'correo'=>'Silver@gmail.com',
            'telefono'=>'44822525'
        ],[
            'nombre'=>'Yerpy',
            'apellido'=>'Gold',
            'correo'=>'Gold@gmail.com',
            'telefono'=>'44843436'
        ]]);
    }
}
