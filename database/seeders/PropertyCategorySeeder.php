<?php

namespace Database\Seeders;

use App\Models\PropertyCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainPropertyCategory = [
            ['id' => 1, 'property_id' => 1 , 'category_id' => 1],
            ['id' => 2, 'property_id' => 2 , 'category_id' => 1],
            ['id' => 3, 'property_id' => 3 , 'category_id' => 1],

            ['id' => 4, 'property_id' => 4 , 'category_id' => 6],
            ['id' => 5, 'property_id' => 5 , 'category_id' => 6],
            ['id' => 6, 'property_id' => 6 , 'category_id' => 6],
        ];

        PropertyCategory::insert($mainPropertyCategory);
    }
}
