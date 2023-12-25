<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductType extends Model
{
    use HasFactory;
    protected $table = 'product_type';
    protected $fillable = ['product_type_name'];

    public function product()
    {
        return $this->hasMany(product::class);
    }

}
