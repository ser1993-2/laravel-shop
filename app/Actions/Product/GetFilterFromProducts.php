<?php

namespace App\Actions\Product;

use App\Models\ProductProperty;

class GetFilterFromProducts
{
    public function handle($products)
    {
        $filter = [];

        $filter['price']['min'] = $products->min('price');
        $filter['price']['max'] = $products->max('price');

        $filter['brand'] = $products->map( function ($product) {
            return ['id' => $product->brand->id,
                'title' => $product->brand->title];
        })->unique();

        $filter['model'] = $products->map( function ($product) {
            return ['id' => $product->brandModel->id,
                'title' => $product->brandModel->title];
        })->unique();

        $filter['model'] = $products->map( function ($product) {
            return ['id' => $product->brandModel->id,
                'title' => $product->brandModel->title];
        })->unique();

        $filter['properties'] = [];

        $products->each( function ($product) use (&$filter) {
            $product->productProperties->each(function ($productProperty) use (&$filter) {

                $property = $productProperty->property;
                if (!array_key_exists($property->alias,$filter['properties'])) {
                    $filter['properties'][$property->alias] = ['id' => $property->id,
                        'title' => $property->title,
                        'alias' => $property->alias,
                        'type' => $property->type];

                    $filter['properties'][$property->alias]['values'] = [];
                }

                $propertyValue = $productProperty->value;
                array_push($filter['properties'][$productProperty->property->alias]['values'],$propertyValue);
                $filter['properties'][$property->alias]['values'] = array_unique($filter['properties'][$property->alias]['values'],SORT_REGULAR);

            });
        });


        return $filter;
    }
}
