<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuarios;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $usuarios =[
            ['nombre'=>'Raúl', 'apellido'=>'Font, García', 'contraseña'=>'123456'],
            ['nombre'=>'Óscar', 'apellido'=>'Font, García', 'contraseña'=>'2354586'],
            ['nombre'=>'David', 'apellido'=>'Font, García', 'contraseña'=>'8459657'],


        ];

        Usuarios::insert($usuarios);
    }
}
