<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_id', 'category_name'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
