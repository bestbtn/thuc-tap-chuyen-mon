@extends('admin::layouts.master')
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h2>QUẢN LÍ ĐƠN HÀNG</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.get.dashboard')}}">
                    <i class="fa fa-fw fa-home"></i> Trang chủ
                </a>
            </li>
            <li>
                <a href="{{route('admin.get.list.category')}}">Đơn hàng</a>
            </li>
            <li>
                <a href="{{route('admin.get.list.category')}}">Danh sách đơn hàng</a>
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
                                <th class="text-center">Tên khách hàng</th>
                                <th class="text-center">Địa chỉ</th>
                                <th class="text-center">Số điện thoại</th>

                                <th class="text-center">Tổng tiền</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Thao tác</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($transactions))

                                <?php $i =1;?>
                                @foreach($transactions as $transaction)

                                    <tr>
                                        <td >{{$i++}}</td>
                                        <td>{{ $transaction->user['name']}}</td>
                                        <td>{{ $transaction->tr_address}}</td>
                                        <td>{{ $transaction->tr_phone}}</td>
                                        <td >{{number_format($transaction->tr_total,0,',','.')}}VNĐ</td>
                                        <td >
                                            <a href="{{route('admin.get.action.transaction',['status',$transaction->id])}}" class=" {{$transaction->getStatus($transaction->tr_status)['class'] }}"  >
                                                {{$transaction->getStatus($transaction->tr_status)['name'] }}
                                            </a>
                                        </td>
                                        <td class="mot">
                                            <a class="delete btn btn-danger" href="{{route('admin.get.action.transaction',['delete',$transaction->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                                                <i class="fa fa-trash-o"></i> Xóa
                                            </a>
                                            <a class="delete btn btn-success js_order_item" data_id="{{$transaction->id}}" href="{{route('admin.get.view.transaction',$transaction->id)}}">
                                                <i class="fa fa-eye"></i>
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
            {{$transactions->links()}}
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chi tiết mã đơn hàng #<b class="transaction_id"></b></h4>
                </div>
                <div class="modal-body" id="md_content">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>

        </div>
    </div>
@stop

@section('script')
    <script>
        $( ".js_order_item" ).click(function( event ) {
            event.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            $('.transaction_id').text($this.attr('data_id'));

            $("#myModal").modal('show');
            $.ajax({
                url:url,
            }).done(function (result) {
                console.log(result);
                $("#md_content").html('').append(result);
            })
        });

    </script>
@stop

