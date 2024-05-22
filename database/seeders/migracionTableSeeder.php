<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class migracionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('migracion')->insert([
            ['id' => 1, 'migration' => 'create_users_table', 'batch' => 1],
            ['id' => 2, 'migration' => 'create_posts_table', 'batch' => 1],
            ['id' => 3, 'migration' => 'create_comments_table', 'batch' => 2],
            ['id' => 4, 'migration' => 'create_likes_table', 'batch' => 2],
            ['id' => 5, 'migration' => 'create_followers_table', 'batch' => 3],
            ['id' => 6, 'migration' => 'create_messages_table', 'batch' => 3],
        ]);
    }
}
