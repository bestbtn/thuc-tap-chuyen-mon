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
                <a href="{{route('admin.get.list.article')}}">Bài viết</a>
            </li>
            <li>
                <a href="{{route('admin.get.create.article')}}">Thêm bài viết</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
   @include("admin::article.form")

@stop
