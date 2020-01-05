@extends('admin::layouts.master')
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h2>Course Schedule</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.get.dashboard')}}">
                    <i class="fa fa-fw fa-home"></i> Trang chủ
                </a>
            </li>
            <li>
                <a href="{{route('admin.get.list.rating')}}">Quản lí đánh giá</a>
            </li>
            <li>
                <a href="">Các đánh giá</a>
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
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-fw fa-user"></i> Danh sách các đánh giá
                        </h4>
                        <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                    </div>
                    <div class="row" style="margin-top: 2%;margin-left: 5%">
                        <div class="col-sm-12">
                            <form class="form-inline" style="margin-bottom:20px" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{\Request::get('name')}}"
                                           placeholder="tìm kiếm đánh giá..." name="name">
                                </div>
                                <button type="submit"
                                        style="width: 50px;height: 35px;border-radius: 5px;margin-left: 4px"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <div role="tabpanel">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="mon">
                                    <table class="table table-bordered table1">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên thành viên</th>
                                            <th>Sản phẩm</th>
                                            <th>Nội dung</th>
                                            <th>Đánh giá</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i =1 ?>
                                        @if(isset($ratings))
                                            @foreach($ratings as $rating)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$rating->user['name']}}</td>
                                            <td>{{$rating->product['pro_name']}}</td>
                                            <td>{{$rating->ra_content}}</td>
                                            <td>{{$rating->ra_number}} <i class="fa fa-star"></i></td>
                                            <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="delete btn btn-danger mar-bm" href="{{route('admin.get.action.rating',['delete',$rating->id])}}">
                                                    <i class="fa fa-trash-o"></i> Xóa
                                                </a>
                                            </td>

                                        </tr>
                                        @endforeach
                                        <?php $i++ ?>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>

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
