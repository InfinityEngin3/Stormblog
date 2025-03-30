<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

# Seeders
use Database\Seeders\BlogSeeder;
use Database\Seeders\MemberSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            MemberSeeder::class,
            BlogSeeder::class
        ]);

    }
}
