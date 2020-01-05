@if(isset($orders))
    <div class="panel-body table-responsive">
        <table class="table table-bordered text-center" id="fitness-table">
            <thead>
            <tr>
                <th class="text-center">STT</th>
                <th class="text-center">Tên sản phẩm</th>
                <th class="text-center">Hình ảnh</th>
                <th class="text-center">Giá</th>

                <th class="text-center">Số lượng</th>
                <th class="text-center">Thành tiền</th>
                <th class="text-center">Thao tác</th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 1;?>
            @foreach($orders as $key=>$order)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $order->product['pro_name']}}</td>
                    <td><img width="75px" height="75px"
                             src="{{ isset($order->product['pro_avatar']) ? pare_url_file($order->product['pro_avatar']) :''}}"
                             alt=""></td>
                    <td>{{ $order->product['pro_price']}}</td>
                    <td>{{ $order->or_qty}}</td>
                    <td>{{number_format($order->or_price,0,',','.')}}VNĐ</td>
                    <td class="mot">
                        <a class="delete btn btn-danger"
                           href="{{route('admin.get.action.transaction',['delete',$order->id])}}"
                           onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                            <i class="fa fa-trash-o"></i> Xóa
                        </a>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endif
