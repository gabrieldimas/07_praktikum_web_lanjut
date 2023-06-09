<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Mahasiswa::factory(20)->create();
        $this->call([
            PostSeeder::class,
        ]);
        // $this->call([UserSeeder::class,]);
        Post::factory(100)->create();
    }
}
