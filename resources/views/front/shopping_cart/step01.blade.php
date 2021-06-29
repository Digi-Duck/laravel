@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="{{asset('css/bootstrap-cart01.css')}}">
@endsection

@section('main')
<div class="cart-block">
    <div class="cart-detail p-5">
        <div class="shopping-progress ">
            <h4 class="font-weight-bold">購物車</h4>
            <div class="pt-3">
                <div class="d-flex justify-content-around position-relative align-items-center">
                    <!-- step 1  -->
                    <div class="rounded-circle text-center text-white"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">1
                    </div>
                    <div class="progress position-absolute"
                        style="width: 17%;max-width: 180px; height: 8px;transform: translateX(-148%);">
                        <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #6EE7B7;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- step 2  -->
                    <div class="rounded-circle text-center"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">2
                    </div>
                    <div class="progress position-absolute" style="width: 17%;max-width: 180px; height: 8px;">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>
                    <!-- step 3  -->
                    <div class="rounded-circle text-center"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">3
                    </div>
                    <div class="progress position-absolute"
                        style="width: 17%;max-width: 180px; height: 8px; transform: translateX(148%);">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>
                    <!-- step 4  -->
                    <div class="rounded-circle text-center"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">4
                    </div>
                </div>
                <div id="process-text" class="d-flex justify-content-around px-2">
                    <div class="pt-2">確認購物車</div>
                    <div class="pt-2 pr-3">付款與運送方式</div>
                    <div class="pt-2 mr-4">填寫資料</div>
                    <div class="pt-2 pr-2">完成訂購</div>
                </div>
            </div>
            <hr />
            <div class="order-detail">
                <h4>訂單明細</h4>
                <div class="container">
                    @foreach ($cartProducts as $product)
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex align-items-center">
                                <img class="rounded-circle" style="width: 60px; height: 60px;" src="{{asset($product->attributes->photo)}}"
                                    alt="" />
                                <div class="food-description ml-2 ">
                                    <p class="m-0">{{$product->name}}</p>
                                    {{-- <p class="m-0 text-muted">#41551</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-end ">
                                <div class="quantity ml-1">
                                    <button type="button" class="btn minus-btn">-</button>
                                    <input class="qty-input" style="width: 30px;" placeholder="1" value="{{$product->quantity}}" data-price="{{$product->price}}" data-id="{{$product->id}}">
                                    <button type="button" class="btn plus-btn">+</button>
                                </div>
                                <div class="price ml-1" data-price="{{$product->price}}">$ {{number_format($product->price * $product->quantity)}}</div>
                            </div>
                        </div>
                        <hr />
                    @endforeach
                    
                </div>
            </div>
            <hr />
            <div class="total-detail">
                <div class="container ">
                    <div class="row  ">
                        <div class="col-9 d-flex flex-column align-items-end">
                            <div class="row text-muted">數量：</div>
                            <div class="row text-muted">小計：</div>
                            <div class="row text-muted">運費：</div>
                            <div class="row text-muted">總計：</div>
                        </div>
                        <div class="col-3 d-flex flex-column align-items-end">
                            <div class="row total-qty"></div>
                            <div class="row sub-total"></div>
                            <div class="row shipping"></div>
                            <div class="row total"></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="action-button d-flex justify-content-between align-items-center">
                <a href="./bootstrap-index.html" class="previous text-body"><i class="fas fa-arrow-left"></i>返回購物</a>
                <a href="./bootstrap-cart02.html"><button class="btn btn-primary ml-auto btn-lg">下一步</button></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function updateQty(element,number) {
        var qtyArea = element.parentElement;
        var input = qtyArea.querySelector('input');
        var qty = Number(input.value);
        var newQty = qty + number;

        //送資料到購物車
        var formData = new FormData();
        formData.append('_token','{{csrf_token()}}');
        formData.append('productId',input.getAttribute('data-id'));
        formData.append('newQty',newQty);

        fetch('/shopping_cart/update',{
            'method':'post',
            'body':formData
        }).then(function (response) {
            return response.text();
        }).then(function (result) {
            if(result=="success"){
                if(newQty < 1){
                    input.value = 1;
                }else{
                    input.value = newQty;
                }
                var price = qtyArea.nextElementSibling;
                price.innerText = '$ ' + (price.getAttribute('data-price') * input.value).toLocaleString();

                updateShoppingCart();   
            }
        })
    }

    function updateShoppingCart(params) {
        var totalQty = 0;
        var subTotal = 0;
        var shipping = 0;
        var total = 0;

        var inputs = document.querySelectorAll('.qty-input');
        inputs.forEach(function (input) {
            totalQty += Number(input.value);
            subTotal += Number(input.value) * input.getAttribute('data-price');
        });
        document.querySelector('.total-qty').innerText = totalQty;
        document.querySelector('.sub-total').innerText = '$ ' + subTotal.toLocaleString();

        if(subTotal > 1000){
            shipping = 0;
        }else{
            shipping = 60;
        }
        document.querySelector('.shipping').innerText = '$ ' + shipping;
        
        total = subTotal + shipping;
        document.querySelector('.total').innerText = '$ ' + total.toLocaleString();

    }

    var plusBtns = document.querySelectorAll('.plus-btn');
    plusBtns.forEach(function (plusBtn) {
        plusBtn.addEventListener('click',function () {
            updateQty(this,1);
        });
    });

    var minusBtns = document.querySelectorAll('.minus-btn');
    minusBtns.forEach(function (minusBtn) {
        minusBtn.addEventListener('click',function () {
            updateQty(this,-1);
        });
    });

    window.addEventListener('load',function () {
        updateShoppingCart();   
    });
</script>
@endsection