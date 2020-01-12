@extends('layouts.app')
@section('content')
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Danh sách yêu thích</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @if(isset($products))
            <div class="block">
                <div class="container">
                    <table class="wishlist" ">
                        <thead class="wishlist__head">
                        <tr class="wishlist__row">
                            <th class="wishlist__column wishlist__column--image">Hình ảnh</th>
                            <th class="wishlist__column wishlist__column--product">Tên sản phẩm</th>
                            <th class="wishlist__column wishlist__column--price">Giá</th>
                            <th class="wishlist__column wishlist__column--tocart"></th>
                            <th class="wishlist__column wishlist__column--remove"></th>
                        </tr>
                        </thead>
                        <tbody class="wishlist__body">

                        @foreach($products as $product)
                        <tr class="wishlist__row">
                            <td class="wishlist__column wishlist__column--image">
                                <a href="#"><img src="{{pare_url_file($product->pro_avatar)}}" alt=""></a>
                            </td>
                            <td class="wishlist__column wishlist__column--product">
                                <a href="#" class="wishlist__product-name">{{$product->pro_name}}</a>
                                <div class="wishlist__product-rating">
                                    <div class="rating">
                                        <div class="rating__body">
                                            @if($product->pro_total_rating > 0)
                                                <?php $rating = round($product->pro_total_number_rating / $product->pro_total_rating) ?>

                                                @for($i =1 ; $i <= $rating;$i++)
                                                    <svg
                                                        class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use
                                                                xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                @endfor
                                                @for($i = 1;$i <= (5- $rating);$i++)
                                                    <svg class="rating__star" width="13px"
                                                         height="12px">
                                                        <g class="rating__fill">
                                                            <use
                                                                xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            @else
                                                @for($i = 1;$i <= 5;$i++)
                                                    <svg class="rating__star" width="13px"
                                                         height="12px">
                                                        <g class="rating__fill">
                                                            <use
                                                                xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use
                                                                xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            @endif
                                        </div>
                                    </div>
                                    <div
                                        class="wishlist__product-rating-legend">{{$product->pro_total_rating}}
                                        đánh giá
                                    </div>
                                </div>
                            </td>
                            <td class="wishlist__column wishlist__column--price">{{number_format($product->pro_price,0,',','.')}}đ</td>
                            <td class="wishlist__column wishlist__column--tocart">
                                <a href="{{route('add.shopping.product',$product->id)}}">
                                    <button class="btn btn-primary product-card__addtocart"
                                            type="button">Add To Cart
                                    </button>
                                </a>
                            </td>
                            <td class="wishlist__column wishlist__column--remove">
                                <a href="{{route('user.favorite.remove',$product->id)}}">
                                <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                    <svg width="12px" height="12px">
                                        <use xlink:href="{{asset('images/sprite.svg#cross-12')}}"></use>
                                    </svg>
                                </button>
                                </a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
    </div>
@stop
