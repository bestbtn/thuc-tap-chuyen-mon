@extends('admin::layouts.master')
@section('content')
<section class="content-header">
    <!--section starts-->
    <h2>Course Schedule</h2>
    <ol class="breadcrumb">
        <li>
            <a href="{{route('admin.get.dashboard')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('admin.get.list.article')}}">Course Schedule</a>
        </li>
        <li>
            <a href="{{route('admin.get.list.article')}}">Bài viết</a>
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
                        <i class="fa fa-fw fa-user"></i> Danh sách bài viết
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
                                       placeholder="Tên bài viết..." name="name">
                            </div>


                            <button type="submit" style="width: 50px;height: 35px;border-radius: 5px;margin-left: 4px"><i class="fa fa-search"></i></button>
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
                                        <th>Tên bài viết</th>
                                        <th>Hình ảnh</th>
                                        <th>Mô tả</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày tạo</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($articles))
                                        @foreach($articles as $article)
                                        <tr>
                                        <td>{{$article->id}}</td>
                                        <td>{{$article->a_name}}</td>
                                        <td><img  src="{{pare_url_file($article->a_avatar)}}" alt="" width="100px" height="100px"></td>
                                        <td>{{$article->a_description}} </td>
                                        <td>
                                            <a href="{{route('admin.get.action.article',['status',$article->id])}}" class=" {{$article->getStatus($article->a_active)['class'] }}"  >
                                                   {{$article->getStatus($article->a_active)['name'] }}
                                            </a>
                                        </td>
                                        <td>{{$article->created_at}}</td>
                                        <td>
                                            <a class="edit btn btn-primary mar-bm" href="{{route('admin.get.edit.article',$article->id)}}">
                                                <i class="fa fa-fw fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a class="delete btn btn-danger mar-bm" href="{{route('admin.get.action.article',['delete',$article->id])}}">
                                                <i class="fa fa-trash-o"></i> Delete
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
        </div>
    </div>
    <!-- col-md-6 -->
    <!--row -->
    <!--row ends-->
</div>
@stop
