<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        $last_eight_products = Product::query()->orderBy('created_at')->take(8)->get();
        return view('home', ['last_eight_products' => $last_eight_products]);
    }

}
