<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Categories;
use App\Models\Products;

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
        return Products::query();
    }

    public function getProductsByCategoryId($categoryId)
    {
        return $this->getQueryForProducts()
            ->where('category_id', $categoryId)
            ->paginate(10);
    }

    public function getProductsByCategoryAlias($categoryAlias)
    {
        $category = Categories::where('alias',$categoryAlias)
            ->first();

        if ($category) {
            $products = $this->getProductsByCategoryId($category->id);

            return response()->json($products);
        }

        return response()->json(false, 400);
    }
}
