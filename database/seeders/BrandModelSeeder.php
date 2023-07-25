<?php

namespace Database\Seeders;

use App\Models\BrandModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainBrandModel = [
            ['id' => 1, 'title' => 'MateBook D 15'],
            ['id' => 2, 'title' => 'MateBook D 14'],
            ['id' => 3, 'title' => 'GeForce RTX 3060'],
        ];

        BrandModel::insert($mainBrandModel);
    }
}
