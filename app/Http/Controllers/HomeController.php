<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
  public function index()
  {
    return view('home');
  }
}
