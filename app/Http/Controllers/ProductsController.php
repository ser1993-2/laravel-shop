<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }

    public function getQueryForProducts()
    {
        return Products::query()->with(['image','brand','brandModel']);
    }

    public function getProductsByCategoryId($categoryId)
    {
        return $this->getQueryForProducts()
            ->where('category_id', $categoryId);
    }

    public function getProductsByCategoryAlias($categoryAlias)
    {
        $category = Categories::where('alias',$categoryAlias)
            ->first();

        if ($category) {
            $products = $this->getProductsByCategoryId($category->id)
                ->paginate(10);

            return response()->json($products);
        }

        return response()->json(false, 400);
    }

    public function getFilterByCategoryAlias($categoryAlias)
    {
        $category = Categories::where('alias',$categoryAlias)
            ->first();

        if ($category) {
            $products = $this->getProductsByCategoryId($category->id)
                ->get();

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

            return response()->json($filter);
        }

        return response()->json(false, 400);
    }

    public function getProductsByFilter(Request $request)
    {

        $category = Categories::where('alias',$request->category_alias)
            ->first();

        if ($category) {
            $products = $this->getProductsByCategoryId($category->id)
                ->filter()
                ->paginate(10);

            return response()->json($products);
        }

        return response()->json(false, 400);
    }
}
