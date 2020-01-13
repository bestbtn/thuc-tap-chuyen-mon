@extends('layouts.app')
@section('content')
    <div class="site__body">
        <!-- .block-slideshow -->
        <div class="block-slideshow block-slideshow--layout--full block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block-slideshow__body">
                            <div class="owl-carousel">
                                <a class="block-slideshow__slide" href="{{route('get.list.all.product')}}">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url( {{asset('images/slides/slide-1-full.jpg')}})"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url({{asset('images/slides/slide-1-mobile.jpg')}})"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Lựa chọn của
                                            <br>các sản phẩm ống nước
                                        </div>
                                        <div class="block-slideshow__slide-text">Sản phẩm chất lượng, Giá cả phải chăng
                                            <br>Số một thị trường.
                                        </div>
                                        <div class="block-slideshow__slide-button">
                                            <span class="btn btn-primary btn-lg">Mua ngay</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="block-slideshow__slide" href="{{route('get.list.all.product')}}">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url({{asset('images/slides/slide-2-full.jpg')}})"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url({{asset('images/slides/slide-2-mobile.jpg')}})"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Máy khoan
                                            <br>Công cụ chuyên nghiệp
                                        </div>

                                        <div class="block-slideshow__slide-text">Sản phẩm chất lượng, Giá cả phải chăng
                                            <br>Số một thị trường.
                                        </div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Mua ngay</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="block-slideshow__slide" href="{{route('get.list.all.product')}}">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                         style="background-image: url({{asset('images/slides/slide-3-full.jpg')}})"></div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                         style="background-image: url({{asset('images/slides/slide-3-mobile.jpg')}})"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">Đồ bảo hộ
                                            <br>PPE
                                        </div>
                                        <div class="block-slideshow__slide-text">Sản phẩm chất lượng, Giá cả phải chăng
                                            <br>Số một thị trường.
                                        </div>
                                        <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Mua ngay</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-slideshow / end -->
        <!-- .block-features -->
        <div class="block block-features block-features--layout--classic">
            <div class="container">
                <div class="block-features__list">
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="{{asset('images/sprite.svg#fi-free-delivery-48')}}"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Miễn phí vận chuyển</div>
                            <div class="block-features__subtitle">Cho đơn hàng từ 10.000.000đ</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="{{asset('images/sprite.svg#fi-24-hours-48')}}"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Hỗ trợ 24/7</div>
                            <div class="block-features__subtitle">Gọi chúng tôi bất cứ lúc nào</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="{{asset('images/sprite.svg#fi-payment-security-48')}}"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">An toàn tuyệt đối</div>
                            <div class="block-features__subtitle">Thanh toán khi nhận hàng</div>
                        </div>
                    </div>
                    <div class="block-features__divider"></div>
                    <div class="block-features__item">
                        <div class="block-features__icon">
                            <svg width="48px" height="48px">
                                <use xlink:href="{{asset('images/sprite.svg#fi-tag-48')}}"></use>
                            </svg>
                        </div>
                        <div class="block-features__content">
                            <div class="block-features__title">Nhiều khuyến mãi</div>
                            <div class="block-features__subtitle">Lên đến 90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-features / end -->
        <!-- sản phẩm hot-->
        @if(isset($productHot))
            <div class="block block-products-carousel" data-layout="grid-4">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">Sản phẩm hot</h3>
                        <div class="block-header__divider"></div>
                        <div class="block-header__arrows-list">
                            <button class="block-header__arrow block-header__arrow--left" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-left-7x11')}}"></use>
                                </svg>
                            </button>
                            <button class="block-header__arrow block-header__arrow--right" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-7x11')}}"></use>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="block-products-carousel__slider">
                        <div class="block-products-carousel__preloader"></div>
                        <div class="owl-carousel">
                            @if(isset($productHot))
                                @foreach($productHot as $proHot)
                                    <div class="block-products-carousel__column">
                                        <div class="block-products-carousel__cell">
                                            <div class="product-card">
                                                <a href="{{ route('get.view.product',$proHot->id) }}" class="product-card__quickview js_product_detail" type="button" >
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="{{asset('images/sprite.svg#quickview-16')}}"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon"></span></a>
                                                @if($proHot->pro_number == 0)
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--out">Tạm hết hàng</div>
                                                </div>
                                                    @else
                                                    <div class="product-card__badges-list">
                                                        <div class="product-card__badge product-card__badge--hot">HOT</div>
                                                    </div>
                                                @endif
                                                <div class="product-card__image">
                                                    <a href="{{route('get.detail.product',[$proHot->pro_slug,$proHot->id])}}"><img
                                                            src="{{pare_url_file($proHot->pro_avatar)}}" alt="{{$proHot->pro_name}}"></a>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a
                                                            href="{{route('get.detail.product',[$proHot->pro_slug,$proHot->id])}}">{{$proHot->pro_name}}</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                @if($proHot->pro_total_rating > 0)
                                                                <?php $rating = round($proHot->pro_total_number_rating / $proHot->pro_total_rating) ?>

                                                                @for($i =1 ; $i <= $rating;$i++)
                                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                                @for($i = 1;$i <= (5- $rating);$i++)
                                                                    <svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
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
                                                                        <svg class="rating__star" width="13px" height="12px">
                                                                            <g class="rating__fill">
                                                                                <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                                            </g>
                                                                            <g class="rating__stroke">
                                                                                <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                                            </g>
                                                                        </svg>
                                                                        <div class="rating__star rating__star--only-edge">
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
                                                        <div class="product-card__rating-legend">{{$proHot->pro_total_rating}} đánh giá</div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>Speed: 750 RPM</li>
                                                        <li>Power Source: Cordless-Electric</li>
                                                        <li>Battery Cell Type: Lithium</li>
                                                        <li>Voltage: 20 Volts</li>
                                                        <li>Battery Capacity: 2 Ah</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Availability: <span
                                                            class="text-success">In Stock</span></div>
                                                    <div class="product-card__prices">{{number_format($proHot->pro_price,0,',','.')}}đ</div>
                                                    <div class="product-card__buttons">
                                                        <a href="{{route('add.shopping.product',$proHot->id)}}">
                                                            <button class="btn btn-primary product-card__addtocart"
                                                                    type="button">Add To Cart
                                                            </button>
                                                        </a>
                                                        <button
                                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                            type="button">Add To Cart
                                                        </button>
                                                        <a href="{{route('user.favorite.add',$proHot->id)}}">
                                                            <button
                                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                                type="button">
                                                                <svg width="16px" height="16px">
                                                                    <use xlink:href="{{asset('images/sprite.svg#wishlist-16')}}"></use>
                                                                </svg>
                                                                <span
                                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                            </button>
                                                        </a>
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="{{asset('images/sprite.svg#compare-16')}}"></use>
                                                            </svg>
                                                            <span
                                                                class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        @endif
    <!--end / sản phẩm hot-->
        <!-- .sản phẩm mới -->
        <div class="block block-products-carousel" data-layout="grid-4">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Sản phẩm mới</h3>
                    <div class="block-header__divider"></div>
                    <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <svg width="7px" height="11px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-left-7x11')}}"></use>
                            </svg>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <svg width="7px" height="11px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-7x11')}}"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="block-products-carousel__slider">
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel">
                        @if(isset($productNew))
                            @foreach($productNew as $proNew)
                                <div class="block-products-carousel__column">
                                    <div class="block-products-carousel__cell">
                                        <div class="product-card">
                                            <a href="{{ route('get.view.product',$proNew->id) }}" class="product-card__quickview js_product_detail" type="button" >
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="{{asset('images/sprite.svg#quickview-16')}}"></use>
                                                </svg>
                                                <span class="fake-svg-icon"></span></a>
                                            @if($proNew->pro_number == 0)
                                                    <div class="product-card__badges-list">
                                                        <div class="product-card__badge product-card__badge--out">Tạm hết hàng</div>
                                                    </div>
                                                @else
                                            <div class="product-card__badges-list">
                                                <div class="product-card__badge product-card__badge--new">Mới</div>
                                            </div>
                                            @endif


                                            <div class="product-card__image">
                                                <a href="{{route('get.detail.product',[$proNew->pro_slug,$proNew->id])}}"><img src="{{pare_url_file($proNew->pro_avatar)}}"
                                                                            alt="{{$proNew->pro_name}}"></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name"><a
                                                        href="{{route('get.detail.product',[$proNew->pro_slug,$proNew->id])}}">{{$proNew->pro_name}}</a></div>
                                                <div class="product-card__rating">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            @if($proNew->pro_total_rating > 0)
                                                                <?php $rating = round($proNew->pro_total_number_rating / $proNew->pro_total_rating) ?>

                                                                @for($i =1 ; $i <= $rating;$i++)
                                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                                @for($i = 1;$i <= (5- $rating);$i++)
                                                                    <svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
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
                                                                    <svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
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
                                                    <div class="product-card__rating-legend">{{$proNew->pro_total_rating}} đánh giá</div>
                                                </div>
                                                <ul class="product-card__features-list">
                                                    <li>Speed: 750 RPM</li>
                                                    <li>Power Source: Cordless-Electric</li>
                                                    <li>Battery Cell Type: Lithium</li>
                                                    <li>Voltage: 20 Volts</li>
                                                    <li>Battery Capacity: 2 Ah</li>
                                                </ul>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__availability">Availability: <span
                                                        class="text-success">In Stock</span></div>
                                                <div class="product-card__prices">{{number_format($proNew->pro_price,0,',','.')}}đ</div>
                                                <div class="product-card__buttons">
                                                    <a href="{{route('add.shopping.product',$proNew->id)}}">
                                                        <button class="btn btn-primary product-card__addtocart"
                                                                type="button">Add To Cart
                                                        </button>
                                                    </a>
                                                    <button
                                                        class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                        type="button">Add To Cart
                                                    </button>
                                                    <a href="{{route('user.favorite.add',$proHot->id)}}">
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="{{asset('images/sprite.svg#wishlist-16')}}"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                    </a>
                                                    <a href="{{route('user.favorite.add',$proHot->id)}}">
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="{{asset('images/sprite.svg#compare-16')}}"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <!-- .sản phẩm mới / end -->
        <!--  banner -->
        <div class="block block-banner">
            <div class="container">
                <a href="#" class="block-banner__body">
                    <div class="block-banner__image block-banner__image--desktop"
                         style="background-image: url({{asset('images/banners/banner-1.jpg')}}"></div>
                    <div class="block-banner__image block-banner__image--mobile"
                         style="background-image: url({{asset('images/banners/banner-1-mobile.jpg')}})"></div>
                    <div class="block-banner__title">Hundreds
                        <br class="block-banner__mobile-br">Hand Tools
                    </div>
                    <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
                    <div class="block-banner__button"><span class="btn btn-sm btn-primary">Shop Now</span></div>
                </a>
            </div>
        </div>
        <!--  banner / end -->
        <!-- . bestseller products -->
        <div class="block block-products block-products--layout--large-first">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Sản phẩm bán chạy nhất</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-products__body">

                    <div class="block-products__list">
                        @if(isset($bestsellers))
                            @foreach($bestsellers as $bestseller)
                        <div class="block-products__list-item">
                            <div class="product-card">
                                <a href="{{ route('get.view.product',$bestseller->id) }}" class="product-card__quickview js_product_detail" type="button" >
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{asset('images/sprite.svg#quickview-16')}}"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span></a>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--hot">Bestseller</div>
                                </div>
                                <div class="product-card__image">
                                    <a href="{{route('get.detail.product',[$bestseller->pro_slug,$bestseller->id])}}">
                                        <img src="{{pare_url_file($bestseller->pro_avatar)}}" alt="{{$bestseller->pro_name}}">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="{{route('get.detail.product',[$bestseller->pro_slug,$bestseller->id])}}">
                                            {{$bestseller->pro_name}}
                                        </a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                @if($bestseller->pro_total_rating > 0)
                                                    <?php $rating = round($bestseller->pro_total_number_rating / $bestseller->pro_total_rating) ?>

                                                    @for($i =1 ; $i <= $rating;$i++)
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                    @for($i = 1;$i <= (5- $rating);$i++)
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
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
                                                        <svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{asset('images/sprite.svg#star-normal')}}"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{asset('images/sprite.svg#star-normal-stroke')}}"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge">
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
                                        <div class="product-card__rating-legend">{{$bestseller->pro_total_rating}} đánh giá</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">{{number_format($bestseller->pro_price,0,',','.')}}đ</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart
                                        </button>
                                        <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart
                                        </button>
                                        <a href="{{route('user.favorite.add',$proHot->id)}}">
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="{{asset('images/sprite.svg#wishlist-16')}}"></use>
                                                </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                            </button>
                                        </a>
                                        <a href="{{route('user.favorite.add',$proHot->id)}}">
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="{{asset('images/sprite.svg#compare-16')}}"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                            @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- . bestseller products / end -->
        <!-- .block-categories -->
        <div class="block block--highlighted block-categories block-categories--layout--compact">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Thông tin danh mục sản phẩm</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-categories__list">
                    @if(isset($categories))
                        @foreach($categories as $cate)
                            <div class="block-categories__item category-card category-card--layout--compact">
                                <div class="category-card__body">
                                    <div class="category-card__image">
                                        <a href="#"><img src="{{asset(pare_url_file($cate->c_avatar))}}" alt="{{$cate->c_name}}"></a>
                                    </div>
                                    <div class="category-card__content">
                                        <div class="category-card__name"><a href="#">{{$cate->c_name}}</a></div>
                                        <div class="category-card__products">572 Products</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- .block-categories / end -->

        <!-- .block-posts -->
        @if(isset($articles))
            <div class="block block-posts block-posts--layout--list-sm" data-layout="list-sm">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">Latest News</h3>
                        <div class="block-header__divider"></div>
                        <div class="block-header__arrows-list">
                            <button class="block-header__arrow block-header__arrow--left" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg>
                            </button>
                            <button class="block-header__arrow block-header__arrow--right" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block-posts__slider">
                        <div class="owl-carousel">
                            @foreach($articles as $article)
                                <div class="post-card">
                                    <div class="post-card__image">
                                        <a href="#"><img src="{{pare_url_file($article->a_avatar)}}" alt=""></a>
                                    </div>
                                    <div class="post-card__info">
                                        <div class="post-card__category"><a href="#">Bài viết mới</a></div>
                                        <div class="post-card__name"><a href="#">{{$article->a_name}}</a></div>
                                        <div class="post-card__date">{{date_format($article->created_at,'d-m-Y')}}</div>
                                        <div class="post-card__content">{{$article->a_description}}
                                        </div>
                                        <div class="post-card__read-more"><a href="{{route('get.detail.product',['$article->a_slug',$article->id])}}" class="btn btn-secondary btn-sm">Read
                                                More</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
            <!-- .block-posts / end -->
            <!-- .block-brands -->
            <div class="block block-brands">
                <div class="container">
                    <div class="block-brands__slider">
                        <div class="owl-carousel">
                            <div class="block-brands__item">
                                <a href="#"><img src="{{asset('images/logos/logo-1.png')}}" alt="đối tác"></a>
                            </div>
                            <div class="block-brands__item">
                                <a href="#"><img src="{{asset('images/logos/logo-2.png')}}" alt="đối tác"></a>
                            </div>
                            <div class="block-brands__item">
                                <a href="#"><img src="{{asset('images/logos/logo-3.png')}}" alt="đối tác"></a>
                            </div>
                            <div class="block-brands__item">
                                <a href="#"><img src="{{asset('images/logos/logo-4.png')}}" alt="đối tác"></a>
                            </div>
                            <div class="block-brands__item">
                                <a href="#"><img src="{{asset('images/logos/logo-5.png')}}" alt="đối tác"></a>
                            </div>
                            <div class="block-brands__item">
                                <a href="#"><img src="{{asset('images/logos/logo-6.png')}}" alt="đối tác"></a>
                            </div>
                            <div class="block-brands__item">
                                <a href="#"><img src="{{asset('images/logos/logo-7.png')}}" alt="đối tác"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-brands / end -->

    </div>


    </div>

@stop

@section('script')
    <script>
        $( ".js_product_detail" ).click(function( event ) {
            event.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            console.log(url);
            $("#myModal").modal('show');
            $.ajax({
                url:url,
            }).done(function (result) {
                console.log(result);
                $('.modal-content').html('').append(result);

            })

        });

    </script>
@stop
