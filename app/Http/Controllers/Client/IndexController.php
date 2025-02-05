<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;

class IndexController extends Controller
{
    public function forgot_password(){
        return view('client.forgot_password');
    }
    public function index()
    {   
        $top_products = Product::where('is_active', '=', '1')->orWhereNull('is_active')->orderBy('view', 'desc')->orderBy('created_at', 'desc')->limit(8)->get();
        $new_products = Product::where('is_active', '=', '1')->orWhereNull('is_active')->orderBy('created_at', 'desc')->limit(12)->get();
        $trend_products = Product::where('is_active', '=', '1')->orWhereNull('is_active')->orderBy('view', 'desc')->orderBy('name', 'asc')->limit(4)->get();
        $brands = Brand::orderBy('name', 'desc')->get();
        return view('client.index', [
            'top_products' => $top_products,
            'new_products' => $new_products,
            'trend_products' => $trend_products,
            'brands' => $brands
        ]);
    }
}
