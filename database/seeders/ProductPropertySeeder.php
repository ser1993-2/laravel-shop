<?php

namespace Database\Seeders;

use App\Models\ProductProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainProductProperties = [
            ['id' => 1,'property_id' => 1 ,'product_id' => 2, 'value' => '14'],
            ['id' => 2,'property_id' => 1 ,'product_id' => 3, 'value' => '15'],
            ['id' => 3,'property_id' => 1 ,'product_id' => 6, 'value' => '14'],
            ['id' => 4,'property_id' => 1 ,'product_id' => 7, 'value' => '16'],

            ['id' => 5,'property_id' => 2 ,'product_id' => 2, 'value' => '2'],
            ['id' => 6,'property_id' => 2 ,'product_id' => 3, 'value' => '6'],
            ['id' => 7,'property_id' => 2 ,'product_id' => 6, 'value' => '2'],
            ['id' => 8,'property_id' => 2 ,'product_id' => 7, 'value' => '4'],

            ['id' => 9,'property_id' => 3 ,'product_id' => 2, 'value' => '128'],
            ['id' => 10,'property_id' => 3 ,'product_id' => 3, 'value' => '512'],
            ['id' => 11,'property_id' => 3 ,'product_id' => 6, 'value' => '128'],
            ['id' => 12,'property_id' => 3 ,'product_id' => 7, 'value' => '256'],

            ['id' => 13,'property_id' => 4 ,'product_id' => 1, 'value' => '4'],
            ['id' => 14,'property_id' => 4 ,'product_id' => 4, 'value' => '4'],
            ['id' => 15,'property_id' => 4 ,'product_id' => 5, 'value' => '6'],

            ['id' => 16,'property_id' => 5 ,'product_id' => 1, 'value' => 'PCI-E 3.0'],
            ['id' => 17,'property_id' => 5 ,'product_id' => 4, 'value' => 'PCI-E 4.0'],
            ['id' => 18,'property_id' => 5 ,'product_id' => 5, 'value' => 'PCI-E 4.0'],

            ['id' => 19,'property_id' => 6 ,'product_id' => 1, 'value' => '8 нм'],
            ['id' => 20,'property_id' => 6 ,'product_id' => 4, 'value' => '12 нм'],
            ['id' => 21,'property_id' => 6 ,'product_id' => 5, 'value' => '6 нм'],
        ];

        ProductProperty::insert($mainProductProperties);
    }
}
