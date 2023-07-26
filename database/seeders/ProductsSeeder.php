<?php

namespace Database\Seeders;

use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainProducts = [
            ['id' => 1,
                'image_id' => 16,
                'category_id' => 6,
                'price' => 40150,
                'brand_id' => 2,
                'brand_model_id' => 3,
                'user_id' => 1,
                'created_at' => Carbon::now()],
            ['id' => 2,
                'image_id' => 5,
                'category_id' => 1,
                'price' => 31150,
                'brand_id' => 1,
                'brand_model_id' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now()],
            ['id' => 3,
                'image_id' => 5,
                'category_id' => 1,
                'price' => 25150,
                'brand_id' => 1,
                'brand_model_id' => 2,
                'user_id' => 1,
                'created_at' => Carbon::now()],
            ['id' => 4,
                'image_id' => 16,
                'category_id' => 6,
                'price' => 28150,
                'brand_id' => 3,
                'brand_model_id' => 3,
                'user_id' => 1,
                'created_at' => Carbon::now()],
            ['id' => 5,
                'image_id' => 16,
                'category_id' => 6,
                'price' => 36150,
                'brand_id' => 4,
                'brand_model_id' => 6,
                'user_id' => 1,
                'created_at' => Carbon::now()],
            ['id' => 6,
                'image_id' => 5,
                'category_id' => 1,
                'price' => 46150,
                'brand_id' => 5,
                'brand_model_id' => 4,
                'user_id' => 1,
                'created_at' => Carbon::now()],
            ['id' => 7,
                'image_id' => 5,
                'category_id' => 1,
                'price' => 25150,
                'brand_id' => 6,
                'brand_model_id' => 5,
                'user_id' => 1,
                'created_at' => Carbon::now()],
        ];

        Products::insert($mainProducts);
    }
}
