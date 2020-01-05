<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = ['*'];
    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    protected $status = [
        1 => [
            'name' => 'Đã xử lí',
            'class'=> 'default3'
        ],
        0 => [
            'name' => 'Chưa xử lí',
            'class'=> 'default2'
        ]
    ];
    public function getStatus(){
        return array_get($this->status,$this->tr_status,['N\A']);
    }
    public function user(){
        return $this->belongsTo(User::class,'tr_user_id');
    }

}
