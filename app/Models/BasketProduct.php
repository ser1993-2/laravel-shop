<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketProduct extends Model
{
    use HasFactory;

    public function basket() {
        return $this->belongsTo(Basket::class);
    }

    public function product() {
        return $this->belongsTo(Products::class);
    }
}
