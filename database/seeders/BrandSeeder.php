<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainBrand = [
            ['id' => 1, 'title' => 'Huawei' , 'image_id' => 12],
            ['id' => 2, 'title' => 'Palit' , 'image_id' => 12],
        ];

        Brand::insert($mainBrand);
    }
}
