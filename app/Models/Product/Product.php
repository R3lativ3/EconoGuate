<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_id', 'product_name', 'product_price', 'product_img', 'category_id'
    ];

    public function category(){
        return $this->hasMany(Category::class);
    }
}
