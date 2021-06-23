@extends('layouts.app')

@section('page-title', 'page-title')

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
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Library</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data</li>
		</ol>
	</nav>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <h2>標題</h2> </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

@endsection