<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ImageSeeder::class,
            CategorySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            UserRoleSeeder::class,
        ]);
    }
}
