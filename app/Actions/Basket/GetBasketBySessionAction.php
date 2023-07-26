<?php

namespace App\Actions\Basket;

use App\Models\Basket;
use Carbon\Carbon;
use Illuminate\Support\Str;


class GetBasketBySessionAction
{
    public function handle()
    {
        $basket = Basket::with('products')
            ->where('uuid', session('basket_uuid'))
            ->first();

        if (!$basket) {

            if (!session('basket_uuid')) {
                session(['basket_uuid' => Str::uuid()]);
            }

            Basket::create([
                'uuid' => session('basket_uuid'),
                'created_at' => Carbon::now()
            ]);

            $basket = Basket::with('products')
                ->where('uuid', session('basket_uuid'))
                ->first();
        }

        return $basket;
    }
}
