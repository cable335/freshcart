<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypeImg extends Model
{
    protected $table = 'products_types_imgs';
    protected $fillable = ['img_path', 'product_type_id'];

    public function productType()
    {
        // hasone (關聯,                          要比較的欄位,自己的欄位)
        return $this->hasOne(ProductType::class, 'id','product_type_id');
    }
}
