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
                <a href="{{route('admin.get.list.category')}}">Profile</a>
            </li>
        </ol>
    </section>
    <br>
    <br>
    <br>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10">
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <img src="{{isset($admin->avatar)? pare_url_file($admin->avatar) :asset('none.jpg')}}" alt="" class="img-rounded img-responsive" />
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <h4>

                                    {{$admin['name']}}</h4>
                                <p>
                                    <i class="glyphicon glyphicon-envelope"></i>{{$admin->email}}
                                    <br />
                                    <i class="glyphicon glyphicon-gift"></i>{{date_format($admin->created_at,'d-m-Y')}}</p>
                                <!-- Split button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary">
                                        Social</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span><span class="sr-only">Mạng xã hội</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                        <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Github</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
