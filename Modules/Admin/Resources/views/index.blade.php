@extends('admin::layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Trang tổng quan</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                                <h2>{{$totalMember}}</h2>
                            <span>Thành viên</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        <div class="text">
                                <h2>{{$totalProduct}}</h2>
                            <span>sản phẩm</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                                <h2>{{$totalArticle}}</h2>
                            <span>Bài viết</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                        <div class="text">
                                <h2>{{$totalRating}}</h2>
                            <span>Đánh giá</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-color" >
        <div class="col-lg-4" style="margin-top: 2%">
            <div class="box-model">
                <h4><b>Thành viên mới đăng kí</b></h4>
                <div class="newstick" >
                    <div class="recent" >
                        <hr>
                        @if(isset($users))
                            @foreach($users as $key => $user)
                                @if($key % 2 == 0)
                                    <div class="row" style="margin: 0px; display: block;">
                                        <img
                                            src="{{ isset($user->avatar) ? pare_url_file($user->avatar) : asset('none.jpg') }}"
                                            class="recent-user-img" alt="image not found">
                                        <h5>
                                            <a href="#" class="text-primary">{{$user->name}}</a>
                                        </h5>
                                        <small>Đăng kí<span class="pull-right">{{date_format($user->created_at,'d-m-Y')}}</span></small>
                                    </div>
                                @else
                                    <div class="row bg-default" style="margin: 0px; display: block;">
                                        <img
                                            src="{{ isset($user->avatar) ? pare_url_file($user->avatar) : asset('none.jpg') }}"
                                            class="recent-user-img" alt="image not found">
                                        <h5>
                                            <a href="#" class="text-primary">{{$user->name}}</a>
                                        </h5>
                                        <small>Đăng kí<span class="pull-right">{{date_format($user->created_at,'d-m-Y')}}</span></small>
                                    </div>
                                @endif
                            @endforeach
                        @endif


                    </div>
                </div>
            </div>
            <div class="box-model">
                <h4><b>Thành viên</b></h4>
                <hr>
                <div class="row">
                    <div class=" col-lg-12 col-xs-12">
                        <div class="registered bg-primary">
                            <div class="row">
                                <div class="col-lg-8 col-xs-8">
                                    <h5><b>TỔNG THÀNH VIÊN</b></h5>
                                </div>

                                <div class="col-lg-4 col-xs-4">
                                    <h3 id="userscount">{{$totalMember}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="registered bg-success" style="background-color: #50a52c">
                            <div class="row">
                                <div class="col-lg-8 col-xs-8">
                                    <h5> <b>TRONG THÁNG</b></h5>
                                </div>

                                <div class="col-lg-4 col-xs-4">
                                    <i class="fa fa-level-up" style="font-size: 48px;"></i>
                                    <h3 id="myTargetElement4.2">{{$memberThisMonth}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="registered bg-warning" style="background-color: #d7c128d6">
                            <div class="row">
                                <div class="col-lg-8 col-xs-8">
                                    <h5><b>TRONG NGÀY</b></h5>
                                </div>
                                <div class="col-lg-4 col-xs-4">
                                    <i class="fa fa-level-up" style="font-size: 48px;"></i>
                                    <h3 id="myTargetElement4.1">{{$memberThisDay}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div >
        <div class="col-lg-8" >
            <div class="col-lg-12" style="margin-top: 5%">
                <div class="au-card-title">
                    <div class="bg-overlay bg-overlay--blue"></div>
                    <h3>
                        <i class="zmdi zmdi-comment-text"></i>Danh sách đơn hàng</h3>
                </div>
                <!-- Basic charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-body table-responsive">
                        <table class="table table-bordered text-center" id="fitness-table">
                            <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Tên khách hàng</th>
                                <th class="text-center">Địa chỉ</th>
                                <th class="text-center">Số điện thoại</th>

                                <th class="text-center">Tổng tiền</th>
                                <th class="text-center">Trạng thái</th>


                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($transactionNews))

                                <?php $i = 1;?>
                                @foreach($transactionNews as $transaction)

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ $transaction->user['name']}}</td>
                                        <td>{{ $transaction->tr_address}}</td>
                                        <td>{{ $transaction->tr_phone}}</td>
                                        <td>{{number_format($transaction->tr_total,0,',','.')}}VNĐ</td>
                                        <td>
                                            <a href="{{route('admin.get.action.transaction',['status',$transaction->id])}}"
                                               class=" {{$transaction->getStatus($transaction->tr_status)['class'] }}">
                                                {{$transaction->getStatus($transaction->tr_status)['name'] }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div >
            <div class="col-lg-12" style="margin-top: 5%">
                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                    <div class="au-card-title">
                        <div class="bg-overlay bg-overlay--blue"></div>
                        <h3>
                            <i class="zmdi zmdi-comment-text"></i>Đánh giá mới nhất</h3>
                    </div>
                    <div class="au-inbox-wrap js-inbox-wrap">
                        <div class="au-message js-list-load">
                            <div class="au-message__noti">
                                <p>Bạn có
                                    <span>2</span>

                                    đánh giá mới
                                </p>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên TV</th>
                                    <th>Sản phẩm</th>
                                    <th>Nội dung</th>
                                    <th>Rating</th>

                                </tr>
                                </thead>

                                <tbody>

                                <?php $i = 1 ?>
                                @if(isset($ratings))
                                    @foreach($ratings as $rating)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$rating->user['name']}}</td>
                                            <td>{{$rating->product['pro_name']}}</td>
                                            <td>{{$rating->ra_content}}</td>
                                            <td style="text-align: center">{{$rating->ra_number}} <i class="fa fa-star"
                                                                                                     style="color: #e9e924f2;font-size: 15px"></i>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
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
@stop
