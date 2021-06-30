<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderDetail;
use App\ProductType;
use Dotenv\Result\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
        $qty = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
        $total = $subTotal + $shippingFee;
        return view('front.shopping_cart.step02',compact('qty','subTotal','shippingFee','total'));
    }
    public function paymentCheck(Request $request)
    {
        Session::put('payment',$request->payment);
        Session::put('shipment',$request->shipment);
        return redirect('/shopping_cart/step03');
    }
    public function step03()
    {
        if(Session::has('payment') && Session::has('shipment')){
            $qty = \Cart::getTotalQuantity();
            $subTotal = \Cart::getSubTotal();
            $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
            $total = $subTotal + $shippingFee;
            return view('front.shopping_cart.step03',compact('qty','subTotal','shippingFee','total'));
        }else{
            return redirect('/shopping_cart/step02');
        }
    }
    public function shipmentCheck(Request $request)
    {
        $cartProducts = \Cart::getContent();

        $order = Order::create([
            'order_no' => 'DP'.time().rand(1,999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'county' => $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'price' => 99999999,
            'pay_type' => Session::get('payment'),
            'shipping' => Session::get('shipment'),
            'shipping_fee' => 99999999,
            'shipping_status_id' => 0,
            'order_status_id' => 0,
        ]);

        $totalPrice = 0;
        foreach ($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->id);
            $totalPrice += $product->price * $cartProduct->quantity;

            OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$product->id,
                'qty'=>$cartProduct->quantity,
                'old'=> json_encode($product)
            ]);
        }

        $order->update([
            'price'=>$totalPrice,
            'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
        ]);

        Session::forget('payment');
        Session::forget('shipment');
        \Cart::clear();
        
        return redirect('/shopping_cart/step04')->with('order',$order);
    }
    public function step04()
    {
        if(Session::has('order')){
            return view('front.shopping_cart.step04');
        }else{
            return redirect('/');
        }
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
    public function delete(Request $request)
    {
        \Cart::remove($request->productId);
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
