<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery_products';
    protected $guarded = ['*'];
    public function product(){
        return $this->belongsTo(Product::class,'image_product_id');
    }
}
