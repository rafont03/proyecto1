<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peliculas;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $peliculas =[
            ['titulo'=>'Codebreaker', 'sinopsis'=>'dwqdqw', 'director'=>'Clare Beaven, Nic Stacey', 'duracion'=>'82'],
            ['titulo'=>'Pacific Rim', 'sinopsis'=>'dwqdwq', 'director'=>'Guillermo del Toro', 'duracion'=>'131'],
            ['titulo'=>'Avengers: Endgame', 'sinopsis'=>'dqwdwq', 'director'=>'Anthony, Joe Russo ', 'duracion'=>'182'],
            ['titulo'=>'Spider-Man: No Way Home', 'sinopsis'=>'dqwdqw', 'director'=>'Jon Watts', 'duracion'=>'148'],
            ['titulo'=>'Ocho apellidos marroquís', 'sinopsis'=>'dqwdwq', 'director'=>'Álvaro Fernández', 'duracion'=>'97'],
            
        ];



        Peliculas::insert($peliculas);


        }
}
