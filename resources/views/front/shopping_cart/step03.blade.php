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
                        <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #6EE7B7;"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- step 2  -->
                    <div class="rounded-circle text-center text-white"
                        style="width: 40px; height: 40px; line-height: 40px; background-color:#10B981;">2
                    </div>
                    <div class="progress position-absolute" style="width: 17%;max-width: 180px; height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #6EE7B7" ;
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- step 3  -->
                    <div class="rounded-circle text-center text-white"
                        style="width: 40px; height: 40px; line-height: 40px; background-color: #10B981;">3
                    </div>
                    <div class="progress position-absolute"
                        style="width: 17%;max-width: 180px; height: 8px; transform: translateX(148%);">
                        <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #6EE7B7" ;
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
            <form action="{{asset('shopping_cart/step03/check')}}" method="POST" class="payment">
                <h4>寄送資料</h4>
                <div class="container">
                    <div class="col p-0">
                        @csrf
                        <div class="row">
                            <label for="name">姓名</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="王小明">
                        </div>
                        <div class="row">
                            <label for="phone">電話</label>
                            <input id="phone" name="phone" type="text" class="form-control" placeholder="0912345678">
                        </div>
                        <div class="row">
                            <label class="font-weight-normal" for="email">E-mail</label>
                            <input id="email" name="email" type="text" class="form-control" placeholder="abc123@gmail.com">
                        </div>
                        <div class="row p-0">
                            <label>地址</label>
                        </div>
                        <div class="col p-0">
                            <div class="row p-0 city-selector-set">
                                <div class="col-4 p-0">
                                    <!-- 縣市選單 -->
                                    <select class="county form-control"></select>
                                </div>
                                <div class="col-4 p-0">
                                     <!-- 區域選單 -->
                                    <select class="district form-control"></select>
                                </div>
                                <div class="col-4 p-0">
                                    <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                                    <input class="zipcode form-control" name="zipcode" type="text" size="3" readonly placeholder="郵遞區號">
                                </div>
                            </div>
                            <div class="row py-1">
                                <input id="address" name="address" type="text" class="form-control" placeholder="地址">
                            </div>
                        </div>
                        <hr>
                        <div class="total-detail">
                            <div class="container">
                                <div class="row">
                                    <div class="col-9 d-flex flex-column align-items-end">
                                        <div class="row text-muted">數量：</div>
                                        <div class="row text-muted">小計：</div>
                                        <div class="row text-muted">運費：</div>
                                        <div class="row text-muted">總計：</div>
                                    </div>
                                    <div class="col-3 d-flex flex-column align-items-end">
                                        <div class="row ">{{$qty}}</div>
                                        <div class="row">$ {{number_format($subTotal)}}</div>
                                        <div class="row ">$ {{$shippingFee}}</div>
                                        <div class="row ">$ {{number_format($total)}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="action-button d-flex justify-content-between align-items-center">
                            <a href="{{asset('/shopping_cart/step02')}}" class="btn btn-outline-primary btn-lg">上一步</a>
                            <button type="submit" class="btn btn-primary btn-lg">前往付款</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/tw-city-selector.js')}}"></script>
<script>
    new TwCitySelector({
      el: '.city-selector-set',
      elCounty: '.county', // 在 el 裡查找 element
      elDistrict: '.district', // 在 el 裡查找 element
      elZipcode: '.zipcode' // 在 el 裡查找 element
    });
  </script>
@endsection