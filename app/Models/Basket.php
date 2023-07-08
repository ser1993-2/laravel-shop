<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $fillable = ['uuid', 'created_at'];
    protected $hidden = ['id','created_at','updated_at'];

    public function products() {
        return $this->hasManyThrough(Products::class,BasketProduct::class,'basket_id','id','id','product_id');
    }
}
