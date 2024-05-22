<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
       // $this->call(PersonaSeeder::class);
       // $this->call(CorreoSeeder::class);
        $this->call([
            ClaseTableSeeder::class,
            ProfesorTableSeeder::class,
            AulaTableSeeder::class,
            ImparteTableSeeder::class,
            MigracionTableSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
