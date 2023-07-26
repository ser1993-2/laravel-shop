<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    const TYPES = ['range', 'checklist'];
    const TYPE_RANGE = 'range';
    const TYPE_CHECKBOX = 'checklist';

    public function properties()
    {
        return $this->hasManyThrough(Property::class,ProductProperty::class,'product_id','id','id','property_id');
    }

    public function productProperties()
    {
        return $this->hasMany(ProductProperty::class,'id','property_id');
    }
}
