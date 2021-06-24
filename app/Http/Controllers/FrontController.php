<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index.index');
    }
    public function contactUs()
    {
        return view('front.contact_us.index');
    }
    public function product(Request $request)
    {
        $types = ProductType::get();
        if($request->type_id){
            $products = Product::where('product_type_id',$request->type_id)->get();
        }else{
            $products = Product::get();
        }
        return view('front.product.index',compact('products','types'));
    }

    public function step01()
    {
        return view('front.shopping_cart.step01');
    }
    public function step02()
    {
        return view('front.shopping_cart.step02');
    }
    public function step03()
    {
        return view('front.shopping_cart.step03');
    }
    public function step04()
    {
        return view('front.shopping_cart.step04');
    }
}
