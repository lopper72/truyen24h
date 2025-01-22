<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('client.product', ['products' => $products]);
    }
    public function trend()
    {
        $products = Product::all();
        return view('client.trend', ['products' => $products]);
    }
    public function detail($slug)
    {
        $product = Product::where('slug', '=', $slug)->get();
        return view('client.product-detail', ['product' => $product]);
    }
    public function chap($slug,$number)
    {
        return view('client.content');
    }
}
