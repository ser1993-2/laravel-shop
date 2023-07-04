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
            ['category_id' => 1,
                'brand_id' => 1,
                'brand_model_id' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now()],
        ];

        Products::insert($mainProducts);
    }
}
