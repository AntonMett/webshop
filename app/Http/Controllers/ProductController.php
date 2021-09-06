<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProduct($id){
        $item = Product::query()->where('id',$id)->first();
        return view('products.show',['item'=>$item]);
    }
}
