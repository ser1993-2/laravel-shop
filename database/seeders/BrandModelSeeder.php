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
        ];

        BrandModel::insert($mainBrandModel);
    }
}
