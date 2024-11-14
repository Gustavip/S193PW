<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([[
                'nombre'=>'Juan',
                'apellido'=>'Perex',
                'correo'=>'juan@gmail.com',
                'telefono'=>'+1234567890',

        ],[
                'nombre'=>'Juaco',
                'apellido'=>'zarcutia',
                'correo'=>'Juaco@gmail.com',
                'telefono'=>'+4456789022', 
        ],[
                  'nombre'=>'Erik',
                'apellido'=>'violante',
                'correo'=>'erick@gmail.com',
                'telefono'=>'+44567890894', 
        ]
        ]);
    }
}
