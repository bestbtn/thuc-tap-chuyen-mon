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

                        <li class="breadcrumb-item active" aria-current="page">Thay đổi mật khẩu</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Thay đổi mật khẩu</h1></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thay đổi mật khẩu</div>

                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">Mật khẩu mới</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">Xác nhận lại mật khẩu</label>

                                <div class="col-md-6">
                                    <input id="password_confirm" type="password" class="form-control"
                                           name="password_confirm" autocomplete="new-password">
                                </div>
                            </div>
                            @error('password_confirm')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Khôi phục mật khẩu
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
