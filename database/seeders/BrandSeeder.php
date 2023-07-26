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
            ['id' => 3, 'title' => 'ASUS' , 'image_id' => 12],
            ['id' => 4, 'title' => 'MSI' , 'image_id' => 12],
            ['id' => 5, 'title' => 'HIPER' , 'image_id' => 12],
            ['id' => 6, 'title' => 'Digma' , 'image_id' => 12],
        ];

        Brand::insert($mainBrand);
    }
}
