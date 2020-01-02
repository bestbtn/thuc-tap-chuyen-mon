@extends('admin::layouts.master')
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h2>Courses</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.get.dashboard') }}">
                    <i class="fa fa-fw fa-home"></i> Trang chủ
                </a>
            </li>
            <li>
                <a href="{{route('admin.get.list.product')}}">Sản phẩm</a>
            </li>
            <li>
                <a >Cập nhật sản phẩm</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
    @include("admin::product.form")

@stop
