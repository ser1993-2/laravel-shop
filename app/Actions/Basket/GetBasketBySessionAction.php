<?php

namespace App\Actions\Basket;

use App\Models\Basket;
use Carbon\Carbon;
use Illuminate\Support\Str;


class GetBasketBySessionAction
{
    public function handle()
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

        return $basket;
    }
}
