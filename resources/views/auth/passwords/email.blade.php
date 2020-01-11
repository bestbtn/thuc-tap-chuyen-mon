@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                            </svg>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">Khôi phục mật khẩu</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Khôi phục mật khẩu</h1></div>
        </div>
    </div>
    <div class="container" style="margin-top: 1%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="padding: 2%">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div align="center">Vui lòng nhập địa chỉ email để lấy lại mật khẩu.
                            <hr>
                        </div>
                        <form method="POST" action="">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Gửi link khôi phục mật khẩu') }}
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
