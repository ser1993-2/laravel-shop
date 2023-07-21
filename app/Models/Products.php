<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $appends = ['title'];
    protected $hidden = ['brand_id','brand_model_id','user_id','created_at','updated_at'];

    public function image()
    {
        return $this->belongsTo(Images::class);
    }

    public function images()
    {
        return $this->hasManyThrough(Images::class,ProductImage::class,'product_id','id','id','image_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function brandModel()
    {
        return $this->belongsTo(BrandModel::class);
    }

    public function getTitleAttribute()
    {
        return $this->brand->title . ' ' . $this->brandModel->title;
    }

}
