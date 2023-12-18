<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salas;

class SalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $salas =[
            ['nombre'=>'Sala 101', 'capacidad'=>'201'],
            ['nombre'=>'Sala 102', 'capacidad'=>'153'],
            ['nombre'=>'Sala 103', 'capacidad'=>'185'],
            ['nombre'=>'Sala 104', 'capacidad'=>'230'],
            ['nombre'=>'Sala 105', 'capacidad'=>'190'],
        ];
        
        Salas::insert($salas);

    }
}
