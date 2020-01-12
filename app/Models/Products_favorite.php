<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Products_favorite extends Model
{
    public $timestamps = false;
    protected $table = 'products_favorite';
    protected $guarded = ['*'];
    protected $fillable = ['pf_product_id','pf_user_id'];

}
