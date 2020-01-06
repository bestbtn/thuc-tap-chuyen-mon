@extends('admin::layouts.master')
@section('content')
        <section class="content-header">
            <!--section starts-->
            <h2>QUẢN LÍ DANH MỤC</h2>
            <ol class="breadcrumb" >
                <li>
                    <a href="{{route('admin.get.dashboard')}}">
                        <i class="fa fa-fw fa-home"></i> Trang chủ
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.get.list.category')}}">Danh mục</a>
                </li>
                <li>
                    <a href="{{route('admin.get.list.category')}}">Danh sách danh mục</a>
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
                                    <th class="text-center">Tên danh mục</th>
                                    <th class="text-center">Title SEO</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Thao tác</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($categories))
                                    <?php $i =1;?>
                                    @foreach($categories as $category)

                                <tr>
                                    <td >{{$i++}}</td>
                                    <td>{{$category->c_name}}</td>
                                    <td >{{$category->c_title_seo}}</td>
                                    <td >
                                        <a href="{{route('admin.get.action.category',['status',$category->id])}}" class=" {{$category->getStatus($category->c_active)['class'] }}"  >
                                            {{$category->getStatus($category->c_active)['name'] }}
                                        </a>
                                    </td>
                                    <td class="mot">
                                        <a class="edit btn btn-primary" href="{{route('admin.get.edit.category',$category->id)}}">
                                            <i class="fa fa-fw fa-edit"></i> Sửa
                                        </a>

                                        <a class="delete btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{route('admin.get.action.category',['delete',$category->id])}}">
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
