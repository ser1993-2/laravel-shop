<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperty extends Model
{
    use HasFactory;

    public function property()
    {
        return $this->hasOne(Property::class,'id','property_id');
    }

    public static function getProductPropertyByProductIdAndPropertyId($productId,$propertyId)
    {
        return ProductProperty::where('product_id', $productId)
            ->where('property_id', $propertyId)
            ->value('value');
    }
}
