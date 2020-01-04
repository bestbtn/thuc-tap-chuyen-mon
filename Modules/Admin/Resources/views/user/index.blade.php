@extends('admin::layouts.master')
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h2>QUẢN LÍ THÀNH VIÊN</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.get.dashboard')}}">
                    <i class="fa fa-fw fa-home"></i> Trang chủ
                </a>
            </li>
            <li>
                <a href="{{route('admin.get.list.category')}}">Thành viên</a>
            </li>
            <li>
                <a href="{{route('admin.get.list.category')}}">Danh sách thành viên</a>
            </li>
        </ol>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i> Danh mục
                        </h4>
                        <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-bordered text-center" id="fitness-table">
                            <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Họ & tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Thao tác</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($users))
                                <?php $i =1;?>
                                @foreach($users as $user)

                                    <tr>
                                        <td >{{$i++}}</td>
                                        <td>{{$user->name}}</td>
                                        <td >{{$user->email}}</td>
                                        <td >{{$user->phone}}</td>
                                        <td >
                                            <a href="{{route('admin.get.action.user',['status',$user->id])}}" class=" {{$user->getStatus($user->active)['class'] }}"  >
                                                {{$user->getStatus($user->active)['name'] }}
                                            </a>
                                        </td>
                                        <td class="mot">
                                            <a class="delete btn btn-danger" href="{{route('admin.get.action.user',['delete',$user->id])}}">
                                                <i class="fa fa-trash-o"></i> Xóa
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
