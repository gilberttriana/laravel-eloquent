<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class aulaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('aula')->insert([
            ['id' => 1, 'nombre' => 'Aula 101', 'ubicacion' => 'Primer piso, Edificio A'],
            ['id' => 2, 'nombre' => 'Aula 102', 'ubicacion' => 'Primer piso, Edificio A'],
            ['id' => 3, 'nombre' => 'Aula 201', 'ubicacion' => 'Segundo piso, Edificio A'],
            ['id' => 4, 'nombre' => 'Aula 202', 'ubicacion' => 'Segundo piso, Edificio A'],
            ['id' => 5, 'nombre' => 'Laboratorio de Ciencias', 'ubicacion' => 'Tercer piso, Edificio B'],
            ['id' => 6, 'nombre' => 'Laboratorio de Computación', 'ubicacion' => 'Tercer piso, Edificio B'],
        ]);
    }
}
