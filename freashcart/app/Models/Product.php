<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['name', 'img_path' , 'price' , 'status' , 'desc'];

    public function cart(){
        return $this->hasMany(Cart::class,'user_id','id');
    }
}
