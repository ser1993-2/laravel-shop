<?php

namespace App\Http\Controllers;

use App\Actions\Basket\GetBasketBySessionAction;
use App\Http\Requests\StoreBasketRequest;
use App\Http\Requests\UpdateBasketRequest;
use App\Models\Basket;
use App\Models\BasketProduct;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param GetBasketBySessionAction $action
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(GetBasketBySessionAction $action)
    {
        $basket = $action->handle();

        return response()->json($basket);
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
    public function store(StoreBasketRequest $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBasketRequest $request,$id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
