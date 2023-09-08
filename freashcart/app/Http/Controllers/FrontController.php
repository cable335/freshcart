<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // status
        $products = Product::Where('status','=', 1)->get();
        return view('shopping-car',compact('products'));
    }
}
