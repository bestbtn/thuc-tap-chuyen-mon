@extends('admin::layouts.master')
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h2>Thêm danh mục</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.get.dashboard')}}">
                    <i class="fa fa-fw fa-home"></i> Trang chủ
                </a>
            </li>
            <li>
                <a href="{{route('admin.get.list.category')}}">Danh mục</a>
            </li>
            <li>
                <a href="{{route('admin.get.create.category')}}">Cập nhật danh mục</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
    <div class="container-fluid">
        <!--main content-->
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic charts strats here-->
                <div class="panel panel-success">
                    <div class="panel-heading" style="margin-bottom: 20px">
                        <h4 class="panel-title">
                            <i class="fa fa-fw fa-file-text-o"></i> Cập nhật danh mục
                        </h4>
                        <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                            @include('admin::category.form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- col-md-6 -->
        <!--row -->
        <!--row ends-->
    </div>
@stop
