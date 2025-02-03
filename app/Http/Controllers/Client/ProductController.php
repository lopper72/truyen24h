<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index()
    {
        $request_uri = $_SERVER['REQUEST_URI'];
        parse_str(parse_url($request_uri, PHP_URL_QUERY), $query_params);
        if(isset($query_params['order'])){
            return $this->order($query_params['order']);
        }else{
            $products = Product::where('is_active', '=', '1')->orWhereNull('is_active')->orderBy('created_at', 'desc')->get();
            return view('client.product', ['products' => $products, 'order' => '']);
        }
    }
    public function trend()
    {
        $top_products = Product::where('is_active', '=', '1')->orWhereNull('is_active')->orderBy('id', 'desc')->limit(8)->get();
        $trend_products = Product::where('is_active', '=', '1')->orWhereNull('is_active')->orderBy('created_at', 'desc')->get();
        return view('client.trend', [
            'top_products' => $top_products,
            'trend_products' => $trend_products
        ]);
    }
    public function detail($slug)
    {
        $product = Product::where('slug', '=', $slug)->get();
        $chaps = ProductDetail::where('product_id', '=', $product[0]->id)->orderBy('number_order','desc')->get();
        $trend_products = Product::where('is_active', '=', '1')->orWhereNull('is_active')->orderBy('id', 'asc')->limit(4)->get();
        $list_brands =  json_decode(str_replace('"', '', $product[0]->brand_ids), true);
        $brands = [];
        for ($i=0; $i < count($list_brands); $i++) { 
            $brands[] = Brand::where('id', '=', $list_brands[$i])->orderBy('name', 'asc')->get();
        }    
        return view('client.product-detail', [
            'product' => $product[0],
            'chaps' => $chaps,
            'trend_products' => $trend_products,
            'brands' => $brands
        ]);
    }
    public function chap($slug,$number)
    {
        session_start();
        $product = Product::where('slug', '=', $slug)->get();
        if(isset($_SESSION['product_id']) && in_array($product[0]->id,$_SESSION['product_id'])){
            $_SESSION['show_url_shopee'] = 'n';
        }else{
            $_SESSION['show_url_shopee'] = 'y';
        }
        $chap = ProductDetail::where('product_id', '=', $product[0]->id)->where('number_order', '=', $number)->get();
        $chaps = ProductDetail::where('product_id', '=', $product[0]->id)->orderBy('number_order', 'asc')->get();
        return view('client.content',[
            'product' => $product[0],
            'chap' => $chap[0],
            'chaps' => $chaps
        ]);
    }

    public function checkUrlShopee(){
        session_start();
        if (!isset($_SESSION['product_id'])) {
            $_SESSION['product_id'][] = $_POST['idProduct'];
        }else {
            if (!in_array($_POST['idProduct'],$_SESSION['product_id'])) {
                $_SESSION['product_id'][] = $_POST['idProduct'];
            }
        }
        $_SESSION['show_url_shopee'] = 'n';
        return response()->json(['message' => 'completed']);
    }

    public function order($order)
    {   
        switch ($order) {
            case 'atoz':
                $columnOrder = "name";
                $statusOrder = "asc";
                break;
            case 'ztoa':
                $columnOrder = "name";
                $statusOrder = "desc";
                break;
            default:
                $columnOrder = "created_at";
                $statusOrder = "desc";
                break;
        }
        $products = Product::where('is_active', '=', '1')->orWhereNull('is_active')->orderBy($columnOrder, $statusOrder)->get();
        return view('client.product', ['products' => $products,'order' => $order]);
    }
}
