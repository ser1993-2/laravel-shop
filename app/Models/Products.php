<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function properties()
    {
        return $this->hasManyThrough(Property::class,ProductProperty::class,'product_id','id','id','property_id');
    }

    public function productProperties()
    {
        return $this->hasMany(ProductProperty::class,'product_id','id');
    }

    public function getTitleAttribute()
    {
        return $this->brand->title . ' ' . $this->brandModel->title;
    }

    public function scopeFilter(Builder $query) {

        $query->with(['image','productProperties' => function($q) {
            $q->with('property');
        }
        ]);

        $query->whereBetween('price', [request('price.min',0), request('price.max',1000000)] );

        if (empty(request('brand'))) {
            $query->with(['brand']);
        } else {
            $query->whereHas('brand' , function($q) {
                $q->whereIn('id', request('brand'));
            });
        }

        if (empty(request('model'))) {
            $query->with(['brandModel']);
        } else {
            $query->whereHas('brandModel' , function($q) {
                $q->whereIn('id', request('model'));
            });
        }

        if (empty(request('properties'))) {
            $query->with(['properties']);
        } else {
            foreach (request('properties') as $alias => $values) {

                if (empty($values)) {
                    continue;
                }

                $query->whereHas('productProperties' , function($queryProductProperties) use ($alias,$values) {
                    $queryProductProperties->whereHas('property' ,function($queryProperty) use ($alias) {
                        $queryProperty->where('alias', $alias);
                    });
                    $queryProductProperties->whereIn('value', $values);
                });
            }
        }

        return $query;
    }

}
