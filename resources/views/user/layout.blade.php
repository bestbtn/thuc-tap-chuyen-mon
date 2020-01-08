@extends('layouts.app')
@section('content')
    <div class="site__body">
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
                            <li class="breadcrumb-item"><a href="#">Tài khoản</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>My Account</h1></div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        <div class="account-nav flex-grow-1">
                            <h4 class="account-nav__title">Menu</h4>
                            <ul>
                                <li class="account-nav__item account-nav__item--active">
                                    <a href="{{route('get.user.dashboard') }}">
                                        Trang tổng quan
                                    </a>
                                </li>
                                <li class="account-nav__item"><a href="{{route('get.edit.user',get_data_user('web'))}}">Edit Profile</a></li>
                                <li class="account-nav__item"><a href="{{route('get.change.password',get_data_user('web'))}}">Đổi password</a></li>
                                <li class="account-nav__item"><a href="{{route('get.logout.user')}}" onclick="return confirm('Bạn có muốn thoát?')">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                    @yield('content_small')
                </div>
            </div>
        </div>
    </div>
@stop
