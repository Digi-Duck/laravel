<?php

namespace App\Http\Middleware;

use Closure;

class ShoppingCartCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(\Cart::isEmpty()){
            return redirect('/product')->with('message','請選擇商品再進行結帳。');
        }else{
            return $next($request);
        }
    }
}
