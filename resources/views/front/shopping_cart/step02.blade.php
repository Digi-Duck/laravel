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
              <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #6EE7B7" ;
                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <!-- step 3  -->
            <div class="rounded-circle text-center"
              style="width: 40px; height: 40px; line-height: 40px; background-color: #ffffff;">3
            </div>
            <div class="progress position-absolute"
              style="width: 17%;max-width: 180px; height: 8px; transform: translateX(148%);">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
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
        <form action="{{asset('shopping_cart/step02/check')}}" method="POST" id="payment" class="payment">
          @csrf
          <h4>付款方式</h4>
          <div class="container">
            <div class="col">
              @php
                  $payment = Session::get('payment');
              @endphp
              <div class="row d-flex align-items-center py-1">
                <input class="mr-2" type="radio" name="payment" value="Credit" @if ($payment == "Credit") checked @endif required>
                <h5 class="m-0">信用卡付款</h5>
              </div>
              <hr />
              <div class="row d-flex align-items-center py-1">
                <input class="mr-2" type="radio" name="payment" value="ATM" @if ($payment == "ATM") checked @endif required>
                <h5 class="m-0">網路ATM</h5>
              </div>
              <hr />
              <div class="row d-flex align-items-center py-1">
                <input class="mr-2" type="radio" name="payment" value="CVS" @if ($payment == "CVS") checked @endif required>
                <h5 class="m-0">超商代碼</h5>
              </div>
            </div>
          </div>
          <hr />
          <div class="shipment">
            @php
              $shipment = Session::get('shipment');
            @endphp
            <h4>運送方式</h4>
            <div class="container">
              <div class="col">
                <div class="row d-flex align-items-center py-1">
                  <input class="mr-2" type="radio" name="shipment" value="Home" @if ($shipment == "Home") checked @endif required>
                  <h5 class="m-0">黑貓宅配</h5>
                </div>
                <hr />
                <div class="row d-flex align-items-center py-1">
                  <input class="mr-2" type="radio" name="shipment" value="C2C" @if ($shipment == "C2C") checked @endif required>
                  <h5 class="m-0">超商店到店</h5>
                </div>
              </div>
            </div>
          </div>
        </form>
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
          <a href="./bootstrap-cart01.html" class="btn btn-outline-primary btn-lg">上一步</a>
          <button class="btn btn-primary btn-lg" id="next">下一步</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script>
      document.querySelector('#next').addEventListener('click',function () {
        var paymentBtns = document.querySelector('input[name="payment"]:checked');
        var shipmentBtns = document.querySelector('input[name="shipment"]:checked');
        
        console.log(paymentBtns,shipmentBtns);
        if(paymentBtns&&shipmentBtns){
          document.querySelector('#payment').submit();  
        }else{
          alert('請先選擇付款及運送方式');
        }
      })
    </script>
@endsection