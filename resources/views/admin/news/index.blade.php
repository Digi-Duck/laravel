@extends('layouts.app')

@section('page-title', '最新消息管理')

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
                <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">最新消息管理</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>最新消息管理</h2>
                    </div>

                    <div class="card-body">

                        <a href="{{ asset('/admin/news/create') }}" class="btn btn-success mb-3">新增</a>

                        <table id="my-datatable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>分類</th>
                                    <th>日期</th>
                                    <th>標題</th>
                                    <th>圖片</th>
                                    <th>內容</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $item)
                                    <tr>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->publish_date }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
											<img style="width: 200px" src="{{ asset($item->img) }}" alt="">	
										</td>
                                        <td>{{ $item->content }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ asset('/admin/news/edit') }}/{{ $item->id }}">編輯</a>
                                            <form style="display: inline-block"
                                                action="{{ asset('/admin/product/type/delete') }}/{{ $item->id }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>分類</th>
                                    <th>日期</th>
                                    <th>標題</th>
                                    <th>圖片</th>
                                    <th>內容</th>
                                    <th>操作</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
	<script>
		$(document).ready(function() {
			$('#my-datatable').DataTable();
		} );
	</script>
@endsection
