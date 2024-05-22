<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('clase')->insert([
            ['codclase' => 'C001', 'nombre' => 'Matemáticas', 'credito' => 3],
            ['codclase' => 'C002', 'nombre' => 'Literatura', 'credito' => 2],
            ['codclase' => 'C003', 'nombre' => 'Física', 'credito' => 4],
            ['codclase' => 'C004', 'nombre' => 'Química', 'credito' => 3],
            ['codclase' => 'C005', 'nombre' => 'Historia', 'credito' => 2],
            ['codclase' => 'C006', 'nombre' => 'Educación Física', 'credito' => 1],
        ]);
    }
}
