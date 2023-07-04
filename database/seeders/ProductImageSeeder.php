<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainProductImages = [
            ['product_id' => 1, 'image_id' => 5],
            ['product_id' => 1, 'image_id' => 6],
            ['product_id' => 1, 'image_id' => 7],
            ['product_id' => 1, 'image_id' => 8],
            ['product_id' => 1, 'image_id' => 9],
            ['product_id' => 1, 'image_id' => 10],
            ['product_id' => 1, 'image_id' => 11],
        ];

        ProductImage::insert($mainProductImages);
    }
}
