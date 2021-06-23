@extends('layouts.app')

@section('page-title', '聯絡我們管理')

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
                <li class="breadcrumb-item active" aria-current="page">聯絡我們管理</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>聯絡我們管理</h2>
                    </div>

                    <div class="card-body">

                        <table id="my-datatable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>姓名</th>
                                    <th>信箱</th>
                                    <th>主旨</th>
                                    <th width="100">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ asset('/admin/contact_us/edit') }}/{{ $item->id }}">查看</a>
                                            <form style="display: inline-block"
                                                action="{{ asset('/admin/contact_us/delete') }}/{{ $item->id }}"
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
                                    <th>姓名</th>
                                    <th>信箱</th>
                                    <th>主旨</th>
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
