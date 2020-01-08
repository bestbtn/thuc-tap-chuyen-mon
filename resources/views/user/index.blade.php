@extends('user.layout')
@section('content_small')
    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
        <div class="dashboard">
            <div class="dashboard__profile card profile-card">
                <div class="card-body profile-card__body">
                    <div class="profile-card__avatar"><img src="{{get_data_user('web','avatar') ? pare_url_file(get_data_user('web','avatar')) : asset('none.jpg') }}" alt=""></div>
                    <div class="profile-card__name">{{get_data_user('web','name')}}</div>
                    <div class="profile-card__email">{{get_data_user('web','email')}}</div>
                    <div class="profile-card__edit"><a href="account-profile.html" class="btn btn-secondary btn-sm">Chỉnh sửa profile</a></div>
                </div>
            </div>
            <div class="dashboard__address card address-card address-card--featured">
                <div class="address-card__badge">Default</div>
                <div class="address-card__body">
                    <div class="address-card__name">{{get_data_user('web','name')}}</div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Số điện thoại</div>
                        <div class="address-card__row-content">{{get_data_user('web','phone')}}</div>
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">Email Address</div>
                        <div class="address-card__row-content">{{get_data_user('web','email')}}</div>
                    </div>
                </div>
            </div>
            <div class="dashboard__orders card">
                <div class="card-header">
                    <h5>Đơn hàng gần đây</h5></div>
                <div class="card-divider"></div>
                <div class="card-table">
                    <div class="table-responsive-sm">
                        <table>
                            <thead>
                            <tr>
                                <th>Đơn hàng</th>
                                <th>Ngày</th>
                                <th>Trạng thái</th>
                                <th>Tổng tiền</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($transactions))
                                @foreach($transactions as $transaction)
                            <tr>
                                <td><a href="#">#{{$transaction->id}}</a></td>
                                <td>{{date_format($transaction->updated_at,'d-m-Y')}}</td>
                                <td >
                                    {{$transaction->getStatus($transaction->tr_status)['name'] }}
                                </td>
                                <td>{{ number_format($transaction->tr_total,0,',','.') }} đ</td>
                                <td>
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
            <div class="modal-content" style="width: 150%;position: absolute;right: -25%">
                <div class="modal-header">
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
