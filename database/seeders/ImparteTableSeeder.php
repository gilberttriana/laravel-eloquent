<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class ImparteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('imparte')->insert([
            ['c_codclase' => 'C001', 'p_idprofesor' => 'P001', 'a_idaula' => 1],
            ['c_codclase' => 'C002', 'p_idprofesor' => 'P002', 'a_idaula' => 2],
            ['c_codclase' => 'C003', 'p_idprofesor' => 'P003', 'a_idaula' => 3],
            ['c_codclase' => 'C004', 'p_idprofesor' => 'P004', 'a_idaula' => 4],
            ['c_codclase' => 'C005', 'p_idprofesor' => 'P005', 'a_idaula' => 5],
            ['c_codclase' => 'C006', 'p_idprofesor' => 'P006', 'a_idaula' => 6],
        ]);
    }
}
