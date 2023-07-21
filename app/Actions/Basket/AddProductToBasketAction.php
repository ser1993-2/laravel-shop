<?php

namespace App\Actions\Basket;

use App\Models\Basket;
use App\Models\BasketProduct;
use Carbon\Carbon;
use Illuminate\Support\Str;


class AddProductToBasketAction
{
    public function handle($data)
    {
        $basketProduct = BasketProduct::where('product_id', $data['product_id'])
            ->where('basket_id', $data['basket_id'])
            ->first();

        if ($basketProduct) {
            $basketProduct->quantity += $data['quantity'];
            $result = $basketProduct->save();
        } else {
            $result = BasketProduct::create($data);
        }

        return $result;
    }
}
