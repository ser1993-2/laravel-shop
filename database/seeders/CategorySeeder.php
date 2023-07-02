<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainCategories = [
            ['title' => 'Ноутбуки' , 'description' => '', 'image_id' => 1, 'parent_id' => null],
            ['title' => 'Смартфоны' , 'description' => '', 'image_id' => 2, 'parent_id' => null],
            ['title' => 'Телевизоры' , 'description' => '', 'image_id' => 3, 'parent_id' => null],
            ['title' => 'Мониторы' , 'description' => '', 'image_id' => 4, 'parent_id' => null],
        ];

        Categories::insert($mainCategories);
    }
}
