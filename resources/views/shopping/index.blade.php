@extends('layouts.app')
@section('content')

    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}} ">Trang chủ</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9')}} "></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Giỏ hàng</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9')}} "></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Giỏ hàng của bạn</h1>
                </div>
                <div class="pull-right " style="float: right;margin: 1%">
                    <a class="cart__coupon-form pull-right" href="{{route('get.destroy.shopping')}}">
                        <button type="button" class="btn btn-warning">Hủy hết sản phẩm</button>
                    </a>
                </div>

            </div>
        </div>
        <div class="cart block">
            <div class="container">
                <form action="{{route('get.update.list.shopping')}}" method="get">
                <table class="cart__table cart-table">
                    <thead class="cart-table__head">
                    <tr class="cart-table__row">
                        <th class="cart-table__column cart-table__column">STT</th>
                        <th class="cart-table__column cart-table__column--product">Tên sản phẩm</th>
                        <th class="cart-table__column cart-table__column--image">Hình ảnh</th>
                        <th class="cart-table__column cart-table__column--price">Giá</th>
                        <th class="cart-table__column cart-table__column--quantity">Số lượng</th>
                        <th class="cart-table__column cart-table__column--total">Thành tiền</th>
                        <th class="cart-table__column cart-table__column--remove"></th>
                    </tr>
                    </thead>

                    <tbody class="cart-table__body">
                    <?php $i = 1 ?>
                    @foreach($products as $key=>$product)
                    <tr class="cart-table__row">
                        <td style="text-align: center">#{{$i}}</td>

                        <td class="cart-table__column cart-table__column--product">
                            <a href="#" class="cart-table__product-name">
                                {{$product->name}}
                            </a>
                        </td>
                        <td class="cart-table__column cart-table__column--image">
                            <a href="#"><img src="{{pare_url_file($product->options['avatar'])}}" alt="{{$product->pro_name}}"></a>
                        </td>
                        <td class="cart-table__column cart-table__column--price" data-title="Price">{{number_format($product->price,0,',','.')}}</td>
                        <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                            <div class="input-number">
                                <input class="form-control input-number__input" id="upCart{{$product->id}}" type="number" min="1" value="{{$product->qty}}" name="quantity[{{$key}}]">
                                <div class="input-number__add"></div>
                                <div class="input-number__sub"></div>
                            </div>
                        </td>
                        <td class="cart-table__column cart-table__column--total" data-title="Total">{{number_format($product->price * $product->qty, 0,',','.')}}Vnđ</td>
                        <td class="cart-table__column cart-table__column--remove">
                            <a href="{{route('delete.shopping.product',$key)}}">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="{{asset('images/sprite.svg#cross-12')}}"></use>
                                </svg>
                            </button>
                            </a>
                        </td>
                    </tr>
                    <?php $i ++ ?>
                    @endforeach

                    </tbody>
                </table>
                <div class="cart__actions">
                    <a class="cart__coupon-form">
                        <input type="text" class="form-control" id="input-coupon-code" placeholder="Mã khuyến mãi">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </a>

                    <div class="cart__buttons"><a href="{{route('get.list.all.product')}}" class="btn btn-secondary">Tiếp tục mua</a>
                        <button type="submit" href="" class="btn btn-primary cart__update-button">Cập nhật giỏ hàng</button></div>
                </div>
                </form>
                <div class="row justify-content-end pt-5">
                    <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Tổng tiền</h3>
                                <table class="cart__totals">

                                    <tfoot class="cart__totals-footer">
                                    <tr>
                                        <td>{{Cart::subtotal(0,0)}} VNĐ</td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="{{route('get.form.pay')}}">Tiến hành thanh toán</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
