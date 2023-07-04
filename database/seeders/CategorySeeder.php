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
            ['id' => 1, 'title' => 'Ноутбуки' ,'alias' => 'notebook' , 'description' => '', 'image_id' => 1, 'parent_id' => null],
            ['id' => 2, 'title' => 'Смартфоны' , 'alias' => 'smartphone' , 'description' => '', 'image_id' => 2, 'parent_id' => null],
            ['id' => 3, 'title' => 'Телевизоры' , 'alias' => 'tv' , 'description' => '', 'image_id' => 3, 'parent_id' => null],
            ['id' => 4, 'title' => 'Мониторы' , 'alias' => 'monitor' , 'description' => '', 'image_id' => 4, 'parent_id' => null],
            ['id' => 5, 'title' => 'Комплектующие для ПК' , 'alias' => 'computer_component' , 'description' => '', 'image_id' => 13, 'parent_id' => null],
        ];

        $childCategories = [
            ['id' => 6,'title' => 'Видеокарты' ,'alias' => 'videocard' , 'description' => '', 'image_id' => 14, 'parent_id' => 5],
        ];

        Categories::insert($mainCategories);
        Categories::insert($childCategories);
    }
}
