<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function getProductImage()
    {
        return $this->hasOne(ProductImage::class,'product_id', 'id');
    }
}
