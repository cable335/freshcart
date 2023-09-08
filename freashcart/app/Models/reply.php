<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    protected $table = 'message_reply';
    protected $fillable = ['desc', 'product_type_id'];

    public function Message()
    {
        // hasone (一對一  關聯,               要比較的欄位,自己的欄位)
        // return $this->hasOne(Message::class, 'id', 'product_type_id');

        // belongsTo(一對一 關聯                     自己的欄位,要比較的欄位)
        return $this->belongsTo(Message::class,'product_type_id','id');
    }
}
