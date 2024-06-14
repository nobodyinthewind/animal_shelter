<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(AnimalSeeder::class);
//        $this->call(ApplicationSeeder::class);
    }
}