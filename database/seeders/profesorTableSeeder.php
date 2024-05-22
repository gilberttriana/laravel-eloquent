<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('profesor')->insert([
            ['id' => 'P001', 'nombre' => 'Juan', 'apellido' => 'Pérez', 'titulo' => 'lic'],
            ['id' => 'P002', 'nombre' => 'María', 'apellido' => 'González', 'titulo' => 'ing'],
            ['id' => 'P003', 'nombre' => 'Carlos', 'apellido' => 'Martínez', 'titulo' => 'msc'],
            ['id' => 'P004', 'nombre' => 'Ana', 'apellido' => 'Rodríguez', 'titulo' => 'doc'],
            ['id' => 'P005', 'nombre' => 'Luis', 'apellido' => 'López', 'titulo' => 'lic'],
            ['id' => 'P006', 'nombre' => 'Sofía', 'apellido' => 'Hernández', 'titulo' => 'ing'],
        ]);
    }
}
