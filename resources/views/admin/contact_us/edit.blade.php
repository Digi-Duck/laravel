@extends('layouts.app')

@section('page-title', '聯絡我們-查看')

@section('css')
    <style>
        .card-header h2 {
            margin-bottom: 0;
        }

    </style>
@endsection


@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/contact_us') }}">聯絡我們管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">聯絡我們-查看</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>聯絡我們管理</h2>
                    </div>

                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
							@csrf
                            <div class="form-group">
                                <label for="name">姓名</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $contactUs->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">信箱</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $contactUs->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="subject">主旨</label>
                                <input type="text" class="form-control" id="subject" name="subject" value="{{ $contactUs->subject }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="content">內文</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10" readonly>{{ $contactUs->content }}</textarea>
                            </div>

							<a href="{{asset('/admin/contact_us')}}" class="btn btn-primary">返回</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

@endsection
