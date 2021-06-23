@extends('layouts.app')

@section('page-title', '編輯會員')

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
			<li class="breadcrumb-item"><a href="{{ '/admin/home' }}">首頁</a></li>
			<li class="breadcrumb-item"><a href="{{ '/admin/user' }}">會員管理</a></li>
			<li class="breadcrumb-item active" aria-current="page">編輯會員</li>
		</ol>
	</nav>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <h2>編輯會員</h2> </div>

                <div class="card-body">
					<form method="POST" action="{{ asset('/admin/user/update') }}/{{ $record->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">角色</label>
                            <div class="col-md-6">
								<select class="form-control" id="role" name="role" disabled>
									<option @if($record->role == 'admin') selected @endif >admin</option>
									<option @if($record->role == 'user') selected @endif>user</option>
								</select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $record->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" autocomplete="email" readonly value="{{ $record->email }}">
                            </div>
                        </div>

                        @if($record->role == 'user')
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">電話</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ $record->client->phone??'' }}" required autocomplete="phone" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">地址</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address"  value="{{ $record->client->address??'' }}" required autocomplete="address" autofocus>
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    更新
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

@endsection