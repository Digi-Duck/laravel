<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Dotenv\Result\Success;
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
        $cartProducts = \Cart::getContent()->sortKeys();
        return view('front.shopping_cart.step01',compact('cartProducts'));
    }
    public function step02()
    {
        return view('front.shopping_cart.step02');
    }
    public function paymentCheck(Request $request)
    {
        dd($request->all());
    }
    public function step03()
    {
        return view('front.shopping_cart.step03');
    }
    public function step04()
    {
        return view('front.shopping_cart.step04');
    }
    public function add(Request $request)
    {
        $product = Product::find($request->productId);
        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(
                'photo'=>$product->photo
            )
        ));
        return 'success';
    }
    public function update(Request $request)
    {
        \Cart::update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->newQty
            ),
        ));
        return 'success';
    }

    public function content()
    {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }
    public function clear()
    {
        \Cart::clear();
        return 'success';
    }
}
