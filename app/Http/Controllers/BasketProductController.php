<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBasketProductRequest;
use App\Http\Requests\UpdateBasketProductRequest;
use App\Models\Basket;
use App\Models\BasketProduct;

class BasketProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basketProducts = BasketProduct::whereHas('basket', function($query) {
            $query->where('uuid', session('basket_uuid'));
        })
            ->with('product')
            ->get();

        return response()->json($basketProducts);
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
    public function store(StoreBasketProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BasketProduct $basketProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BasketProduct $basketProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBasketProductRequest $request, BasketProduct $basketProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($productId)
    {
        return BasketProduct::where('product_id',$productId)
            ->delete();
    }
}
