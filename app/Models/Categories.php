<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo(Images::class);
    }

    public function childCategories()
    {
        return $this->hasMany(Categories::class,'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Products::class,'category_id');
    }
}
