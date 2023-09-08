<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $fillable = ['desc'];

    public function reply()
    {
        // hasmany (關聯,                            要比較的欄位,自己的欄位)
        return $this->hasMany(reply::class,'product_type_id', 'id');
    }
}
