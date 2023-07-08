<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBasketRequest;
use App\Http\Requests\UpdateBasketRequest;
use App\Models\Basket;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session('basket_uuid')) {
            $basket = Basket::with('products')
                ->where('uuid', session('basket_uuid'))
                ->first();
        } else {
            session(['basket_uuid' => Str::uuid()]);

            $basket = Basket::create([
                'uuid' => session('basket_uuid'),
                'created_at' => Carbon::now()
            ]);
        }

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
        //
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
    public function update(UpdateBasketRequest $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
