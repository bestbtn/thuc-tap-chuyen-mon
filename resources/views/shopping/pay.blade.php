@extends('layouts.app')
@section('content')
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Breadcrumb</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Checkout</h1></div>
            </div>
        </div>
        <div class="checkout block">
            <div class="container">
                <div class="col-12 mb-3">
                    <div class="alert alert-lg alert-primary">Returning customer? <a href="#">Click here to
                            login</a></div>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-7">
                            <div class="card mb-lg-0">
                                <div class="card-body">
                                    <h3 class="card-title">Chi tiết hóa đơn</h3>
                                    <div class="form-group">
                                        <label for="checkout-street-address">Địa chỉ</label>
                                        <input type="text" name="address" class="form-control" id="checkout-street-address"
                                               placeholder="địa chỉ nhận hàng">
                                    </div>
                                    <div class="form-group">
                                        <label for="checkout-street-address">Địa chỉ Email</label>
                                        <input type="text" class="form-control" name="email" id="checkout-street-address"
                                               placeholder="Email address" value="{{get_data_user('web','email')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="checkout-phone">Số điện thoại</label>
                                        <input type="text" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" value="{{get_data_user('web','phone')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="checkout-street-address">Ghi chú</label>
                                        <textarea name="note" id="note" cols="30" rows="10" class="form-control"></textarea>
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-xl btn-block">Tiến hành đặt hàng
                                    </button>
                                </div>
                                <div class="card-divider"></div>


                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <h3 class="card-title">Đơn đặt hàng của bạn</h3>
                                    <table class="checkout__totals">
                                        <thead class="checkout__totals-header">
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>Sản phẩm</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                        </thead>
                                        @if(isset($products))
                                            <tbody class="checkout__totals-products">
                                            @foreach($products as $pro)
                                                <tr>
                                                    <td><img width="50px" height="50px"
                                                             src="{{pare_url_file($pro->options['avatar'])}}" alt="{{$pro->pro_name}}">
                                                    </td>
                                                    <td>{{$pro->name. " x " .$pro->qty}}</td>
                                                    <td>{{number_format($pro->price*$pro->qty,0,',','.')}}đ</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        @endif

                                        <tfoot class="checkout__totals-footer">
                                        <tr>
                                            <th colspan="2">Tổng cộng</th>
                                            <td>{{Cart::subtotal(0,1)}}đ</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    {{--  <div class="payment-methods">
                                          <ul class="payment-methods__list">
                                              <li class="payment-methods__item payment-methods__item--active">
                                                  <label class="payment-methods__item-header"><span
                                                          class="payment-methods__item-radio input-radio"><span
                                                              class="input-radio__body"><input class="input-radio__input"
                                                                                               name="checkout_payment_method"
                                                                                               type="radio" checked="checked"> <span
                                                                  class="input-radio__circle"></span> </span>
                                                  </span><span class="payment-methods__item-title">Direct bank transfer</span></label>
                                                  <div class="payment-methods__item-container">
                                                      <div class="payment-methods__item-description text-muted">Make your
                                                          payment directly into our bank account. Please use your Order ID as
                                                          the payment reference. Your order will not be shipped until the
                                                          funds have cleared in our account.
                                                      </div>
                                                  </div>
                                              </li>
                                              <li class="payment-methods__item">
                                                  <label class="payment-methods__item-header"><span
                                                          class="payment-methods__item-radio input-radio"><span
                                                              class="input-radio__body"><input class="input-radio__input"
                                                                                               name="checkout_payment_method"
                                                                                               type="radio"> <span
                                                                  class="input-radio__circle"></span> </span>
                                                  </span><span
                                                          class="payment-methods__item-title">Check payments</span></label>
                                                  <div class="payment-methods__item-container">
                                                      <div class="payment-methods__item-description text-muted">Please send a
                                                          check to Store Name, Store Street, Store Town, Store State / County,
                                                          Store Postcode.
                                                      </div>
                                                  </div>
                                              </li>
                                              <li class="payment-methods__item">
                                                  <label class="payment-methods__item-header"><span
                                                          class="payment-methods__item-radio input-radio"><span
                                                              class="input-radio__body"><input class="input-radio__input"
                                                                                               name="checkout_payment_method"
                                                                                               type="radio"> <span
                                                                  class="input-radio__circle"></span> </span>
                                                  </span><span
                                                          class="payment-methods__item-title">Cash on delivery</span></label>
                                                  <div class="payment-methods__item-container">
                                                      <div class="payment-methods__item-description text-muted">Pay with cash
                                                          upon delivery.
                                                      </div>
                                                  </div>
                                              </li>
                                              <li class="payment-methods__item">
                                                  <label class="payment-methods__item-header"><span
                                                          class="payment-methods__item-radio input-radio"><span
                                                              class="input-radio__body"><input class="input-radio__input"
                                                                                               name="checkout_payment_method"
                                                                                               type="radio"> <span
                                                                  class="input-radio__circle"></span> </span>
                                                  </span><span class="payment-methods__item-title">PayPal</span></label>
                                                  <div class="payment-methods__item-container">
                                                      <div class="payment-methods__item-description text-muted">Pay via
                                                          PayPal; you can pay with your credit card if you don’t have a PayPal
                                                          account.
                                                      </div>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>--}}


                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
