<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [''];
    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    const HOT_ON = 1;
    const HOT_OFF = 0;
    protected $status = [
        1 => [
            'name' => 'Public',
            'class'=> 'default1'
        ],
        0 => [
            'name' => 'Private',
            'class'=> 'default2'
        ]
    ];
    protected $hot = [
        1 => [
            'name' => 'Có',
            'class'=> 'default1'
        ],
        0 => [
            'name' => 'Không',
            'class'=> 'default2'
        ]
    ];
    public function getStatus(){
        return array_get($this->status,$this->pro_active,['N\A']);
    }
    public function getHot(){
        return array_get($this->hot,$this->pro_hot,['N\A']);
    }
    public function category(){
        return $this->belongsTo(Category::class,'pro_category_id');
    }
    public function user(){
        return $this->belongsToMany(User::class,Products_favorite::class,'pf_product_id','pf_user_id');
    }
}
