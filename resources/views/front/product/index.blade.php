@extends('layouts.template')

@section('css')
    <style>
      .product-img{
        width: 100%;
        height: 300px;
        background-size: cover;
        background-position: center;
      }
    </style>
@endsection

@section('main')
    <div class="container my-3">
      <div class="row">
        <a href="/product" class="btn btn-primary mr-2">All</a>
        @foreach ($types as $type)
          <a href="/product?type_id={{$type->id}}" class="btn btn-primary mr-2">{{$type->type_name}}</a>
        @endforeach
      </div>
    </div>
    <div class="container">
        <div class="row">
          @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <div class="product-img" style="background-image: url('{{asset($product->photo)}}')"></div>
                <div class="card-body">
                  <h5 class="card-title">{{$product->product_name}}</h5>
                  <p class="card-text">{{$product->discript}}</p>
                  <a href="#" class="btn btn-primary">加入購物車</a>
                </div>
            </div>
          @endforeach
        </div>
    </div>
@endsection

@section('js')
    
@endsection