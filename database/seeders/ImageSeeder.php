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
            ['id' => 1, 'src' => '/images/category/notebook.png'],
            ['id' => 2, 'src' => '/images/category/smartphone.png'],
            ['id' => 3, 'src' => '/images/category/tv.png'],
            ['id' => 4, 'src' => '/images/category/monitor.png'],
            ['id' => 5, 'src' => '/images/category/processor.png'],
            ['id' => 6, 'src' => '/images/category/computer.png'],
        ];

        Images::insert($mainCategoryImages);
    }
}
