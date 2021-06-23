@extends('layouts.app')

@section('page-title', '會員管理')

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
			<li class="breadcrumb-item active" aria-current="page">會員管理</li>
		</ol>
	</nav>


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <h2>會員管理</h2> </div>

                <div class="card-body">

					<a href="{{ asset('/admin/user/create') }}" class="btn btn-success mb-3">新增</a>

					<table id="my-datatable" class="display" style="width:100%">
						<thead>
							<tr>
								<th>姓名</th>
								<th>信箱</th>
								<th>角色</th>
								<th>電話</th>
								<th>地址</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($lists as $item)
								<tr>
									<td>{{ $item->name }}</td>
									<td>{{ $item->email }}</td>
									<td>{{ $item->role }}</td>
									<td>{{ $item->client->phone??'' }}</td>
									<td>{{ $item->client->address??'' }}</td>
									<td>
										<a class="btn btn-primary btn-sm" href="{{ asset('/admin/user/edit') }}/{{ $item->id }}">編輯</a>
										<form style="display: inline-block" action="{{ asset('/admin/user/delete') }}/{{ $item->id }}" method="POST">
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
								<th>角色</th>
								<th>電話</th>
								<th>地址</th>
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