<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainCategoryImages = [
            ['id' => 1, 'src' => '/images/category/notebook.webp'],
            ['id' => 2, 'src' => '/images/category/smartphone.webp'],
            ['id' => 3, 'src' => '/images/category/tv.webp'],
            ['id' => 4, 'src' => '/images/category/monitor.webp'],
        ];

        Images::insert($mainCategoryImages);
    }
}
