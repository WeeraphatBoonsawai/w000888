<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\ProductType;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'product_name',
        'product_desc',
        'product_img_url',
        'product_type_id',
        'brand_id',
    ];

    public function product_type()
    {
        return $this->belongsTo(ProductType::class,'product_type_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
