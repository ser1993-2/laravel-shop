<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainProperties = [
            ['id' => 1,'title' => 'Диагональ' ,'alias' => 'diagonal', 'type' => Property::TYPE_CHECKBOX],
            ['id' => 2,'title' => 'ОЗУ' ,'alias' => 'ram', 'type' => Property::TYPE_CHECKBOX],
            ['id' => 3,'title' => 'ПЗУ' ,'alias' => 'rom', 'type' => Property::TYPE_CHECKBOX],
            ['id' => 4,'title' => 'Память' ,'alias' => 'memory', 'type' => Property::TYPE_CHECKBOX],
            ['id' => 5,'title' => 'Интерфейс' ,'alias' => 'interface', 'type' => Property::TYPE_CHECKBOX],
            ['id' => 6,'title' => 'Техпроцесс' ,'alias' => 'technical_process', 'type' => Property::TYPE_CHECKBOX],
        ];

        Property::insert($mainProperties);
    }
}
