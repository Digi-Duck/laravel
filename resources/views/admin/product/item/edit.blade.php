@extends('layouts.app')

@section('page-title', '產品品項編輯')

@section('css')
    <style>
        .card-header h2 {
            margin-bottom: 0;
        }

        .del-img-btn {
            position: absolute;
            right: 10px;
            top: -10px;
            width: 25px;
            height: 25px;
            background-color: red;
            color: white;
            text-align: center;
            line-height: 22px;
            font-size: 16px;
            border-radius: 50%;
            cursor: pointer;
        }

    </style>
@endsection


@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">Home</a></li>
                <li class="breadcrumb-item" active>產品管理</li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/product/item') }}">產品品項管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">產品品項編輯</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>產品品項編輯</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ asset('/admin/product/item/update') }}/{{ $record->id }}" method="POST" enctype="multipart/form-data">
							@csrf

                            <div class="form-group">
                                <label for="product_type_id">產品種類</label>
                                <select class="form-control" id="product_type_id" name="product_type_id">
                                    @foreach ($type as $item)
                                        <option @if($item->id === $record->type->id) selected  @endif value="{{ $item->id }}">{{ $item->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="product_name">產品品項名稱</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $record->product_name }}">
                            </div>

                            <div class="form-group">
                                <label for="price">價格</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $record->price }}">
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-12" for="">產品主要圖片</label>
                                <div class="col-md-3">
                                    <img class="w-100" src="{{ $record->photo }}" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="photo">修改產品主要圖片</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                            <hr>
                            {{-- 要讓使用者可以在編輯資料時砍掉關聯的圖片 --}}
                            <div class="form-group row">
                                <label class="col-12" for="">產品其他圖片</label>
                                @foreach ($record->photos as $photo)
                                <div class="col-md-3">
                                    {{-- 點選到圖片刪除按鈕時，將該圖片的 ID 記錄下來，傳到後端 --}}
                                    {{-- 後端根據 ID 找到該筆資料，進行刪除 --}}
                                    <div data-id="{{ $photo->id }}" class="del-img-btn">x</div>
                                    <img class="w-100" src="{{ $photo->photo }}" alt="">
                                </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="photos">新增產品其他圖片</label>
                                <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="discript">產品描述</label>
                                <textarea class="form-control" name="discript" id="discript" cols="30" rows="10">{{ $record->discript }}</textarea>
                            </div>

							<button type="submit" class="btn btn-primary">編輯</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        var delBtns = document.querySelectorAll('.del-img-btn');
        delBtns.forEach(function(delBtn){
            delBtn.addEventListener('click',function () {
                var id = this.getAttribute('data-id');
                var parentElement = this.parentElement;
                var formData = new FormData();
                formData.append('_token','{{csrf_token()}}');
                formData.append('id',id);

                fetch('/admin/product/item/deleteImage',{
                    'method':'POST',
                    'body':formData
                })
                .then(function (response) {
                    return response.text();
                })
                .then(function (result) {
                    if(result == 'success'){
                        alert('刪除成功');
                        parentElement.remove();
                    }
                })
            });
        });

    </script>
@endsection
