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
                            <li class="breadcrumb-item"><a href="#">Breadcrumb</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Brandix Screwdriver SCREW1500ACC</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="block">
            @if(isset($productDetail))
            <div class="container">
                <div class="product product--layout--standard" data-layout="standard">
                    <div class="product__content">
                        <!-- .product__gallery -->
                        <div class="product__gallery">
                            <div class="product-gallery">
                                {{-- ảnh bự --}}
                                <div class="product-gallery__featured">
                                    <button class="product-gallery__zoom">
                                        <svg width="24px" height="24px">
                                            <use xlink:href="{{asset('images/sprite.svg#zoom-in-24')}}"></use>
                                        </svg>
                                    </button>
                                    <div class="owl-carousel owl-loaded owl-drag" id="product-image">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2655px;">
                                                <div class="owl-item active" style="width: 531px;">
                                                    <a href="{{pare_url_file($productDetail->pro_avatar)}}" target="_blank"><img
                                                            src="{{pare_url_file($productDetail->pro_avatar)}}" alt=""> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <button type="button" role="presentation" class="owl-prev"><span
                                                    aria-label="Previous">‹</span></button>
                                            <button type="button" role="presentation" class="owl-next"><span
                                                    aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                                {{-- ảnh bự / end --}}
                                {{-- ảnh nhỏ--}}
                                <div class="product-gallery__carousel">
                                    <div class="owl-carousel owl-loaded owl-drag" id="product-carousel">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 545px;">
                                                <div class="owl-item active" style="width: 99px; margin-right: 10px;">
                                                    <a href="{{asset('images/products/product-16.jpg')}}"
                                                       class="product-gallery__carousel-item product-gallery__carousel-item--active"><img
                                                            class="product-gallery__carousel-image"
                                                            src="{{asset('images/products/product-16.jpg')}}" alt=""> </a>
                                                </div>
                                                <div class="owl-item active" style="width: 99px; margin-right: 10px;">
                                                    <a href="{{asset('images/products/product-16-1.jpg')}}"
                                                       class="product-gallery__carousel-item"><img
                                                            class="product-gallery__carousel-image"
                                                            src="{{asset('images/products/product-16-1.jpg')}}" alt=""> </a>
                                                </div>
                                                <div class="owl-item active" style="width: 99px; margin-right: 10px;">
                                                    <a href="{{asset('images/products/product-16-2.jpg')}}"
                                                       class="product-gallery__carousel-item"><img
                                                            class="product-gallery__carousel-image"
                                                            src="{{asset('images/products/product-16-2.jpg')}}" alt=""> </a>
                                                </div>
                                                <div class="owl-item active" style="width: 99px; margin-right: 10px;">
                                                    <a href="{{asset('images/products/product-16-3.jpg')}}"
                                                       class="product-gallery__carousel-item"><img
                                                            class="product-gallery__carousel-image"
                                                            src="{{asset('images/products/product-16-3.jpg')}}" alt=""> </a>
                                                </div>
                                                <div class="owl-item active" style="width: 99px; margin-right: 10px;">
                                                    <a href="{{asset('images/products/product-16-4.jpg')}}"
                                                       class="product-gallery__carousel-item"><img
                                                            class="product-gallery__carousel-image"
                                                            src="{{asset('images/products/product-16-4.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <button type="button" role="presentation" class="owl-prev"><span
                                                    aria-label="Previous">‹</span></button>
                                            <button type="button" role="presentation" class="owl-next"><span
                                                    aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                                {{-- ảnh nhỏ / end --}}
                            </div>
                        </div>
                        <!-- .product__gallery / end -->
                        <!-- .product__info -->
                        <div class="product__info">
                            <div class="product__wishlist-compare">
                                <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                                        data-placement="right" title="" data-original-title="Wishlist">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{asset('images/sprite.svg#wishlist-16')}}"></use>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                                        data-placement="right" title="" data-original-title="Compare">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{asset('images/sprite.svg#compare-16')}}"></use>
                                    </svg>
                                </button>
                            </div>
                            <h1 class="product__name">{{$productDetail->pro_name}}</h1>
                            <div class="product__rating">
                                <div class="product__rating-stars">
                                    <div class="rating">
                                        <div class="rating__body">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="product__rating-legend"><a href="#">7 Reviews</a><span>/</span><a href="#">Write
                                        A Review</a></div>
                            </div>
                            <div class="product__description">{{$productDetail->pro_description}}
                            </div>
                            <ul class="product__meta">
                                <li class="product__meta-availability">Availability: <span
                                        class="text-success">In Stock</span></li>
                            </ul>
                        </div>
                        <!-- .product__info / end -->
                        <!-- .product__sidebar -->
                        <div class="product__sidebar">
                            <div class="product__availability">Availability: <span class="text-success">In Stock</span>
                            </div>
                            <div class="product__actions-item product__actions-item--wishlist">
                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg"
                                        data-toggle="tooltip" title="" data-original-title="Wishlist">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{asset('images/sprite.svg#wishlist-16')}}"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="product__actions-item product__actions-item--compare">
                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg"
                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{asset('images/sprite.svg#compare-16')}}"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="product__prices">{{number_format($productDetail->pro_price,0,',','.')}} Vnđ</div>
                            <!-- .product__options -->
                            <form class="product__options">
                                <div class="form-group product__option">
                                    <label class="product__option-label" for="product-quantity">Số lượng</label>
                                    <div class="product__actions">
                                        <div class="product__actions-item">
                                            <div class="input-number product__quantity">
                                                <input id="product-quantity"
                                                       class="input-number__input form-control form-control-lg"
                                                       type="number" min="1" value="1">
                                                <div class="input-number__add"></div>
                                                <div class="input-number__sub"></div>
                                            </div>
                                        </div>
                                        <div class="product__actions-item product__actions-item--addtocart">
                                            <button class="btn btn-primary btn-lg">Thêm vào giỏ hàng</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <!-- .product__options / end -->
                        </div>
                        <!-- .product__end -->

                        <div class="product__footer">
                            <div class="product__tags tags">
                                <div class="tags__list"><a href="#">Mounts</a> <a href="#">Electrodes</a> <a href="#">Chainsaws</a>
                                </div>
                            </div>
                        </div><hr>
                        <div class="product__share-links share-links">
                            <ul class="share-links__list">
                                <li class="share-links__item share-links__item--type--like"><a href="#">Like</a>
                                </li>
                                <li class="share-links__item share-links__item--type--tweet"><a href="#">Tweet</a>
                                </li>
                                <li class="share-links__item share-links__item--type--pin"><a href="#">Pin It</a>
                                </li>
                                <li class="share-links__item share-links__item--type--counter"><a href="#">4K</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <!-- .Sản phẩm liên quan -->
        <div class="block block-products-carousel" data-layout="grid-5">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Sản phẩm liên quan</h3>
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
                <div class="block-products-carousel__slider">
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-1792px, 0px, 0px); transition: all 0s ease 0s; width: 7170px; padding-left: 1px; padding-right: 1px;">
                                <div class="owl-item cloned" style="width: 212px; margin-right: 12px;">
                                    <div class="block-products-carousel__column">
                                        <div class="block-products-carousel__cell">
                                            <div class="product-card">
                                                <button class="product-card__quickview" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__image">
                                                    <a href="product.html"><img src="images/products/product-9.jpg"
                                                                                alt=""></a>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.html">Spanner
                                                            Wrench</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star" width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating-legend">9 Reviews</div>
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
                                                    <div class="product-card__prices">$19.00</div>
                                                    <div class="product-card__buttons">
                                                        <button class="btn btn-primary product-card__addtocart"
                                                                type="button">Add To Cart
                                                        </button>
                                                        <button
                                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                            type="button">Add To Cart
                                                        </button>
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg>
                                                            <span
                                                                class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg>
                                                            <span
                                                                class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 212px; margin-right: 12px;">
                                    <div class="block-products-carousel__column">
                                        <div class="block-products-carousel__cell">
                                            <div class="product-card">
                                                <button class="product-card__quickview" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__image">
                                                    <a href="product.html"><img src="images/products/product-11.jpg"
                                                                                alt=""></a>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.html">Hand Tool
                                                            Kit</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star" width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating-legend">9 Reviews</div>
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
                                                    <div class="product-card__prices">$149.00</div>
                                                    <div class="product-card__buttons">
                                                        <button class="btn btn-primary product-card__addtocart"
                                                                type="button">Add To Cart
                                                        </button>
                                                        <button
                                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                            type="button">Add To Cart
                                                        </button>
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg>
                                                            <span
                                                                class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg>
                                                            <span
                                                                class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 212px; margin-right: 12px;">
                                    <div class="block-products-carousel__column">
                                        <div class="block-products-carousel__cell">
                                            <div class="product-card">
                                                <button class="product-card__quickview" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__image">
                                                    <a href="product.html"><img src="images/products/product-12.jpg"
                                                                                alt=""></a>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.html">Ash's
                                                            Chainsaw 3.5kW</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <svg class="rating__star rating__star--active"
                                                                     width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use
                                                                            xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating-legend">11 Reviews</div>
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
                                                    <div class="product-card__prices">$666.99</div>
                                                    <div class="product-card__buttons">
                                                        <button class="btn btn-primary product-card__addtocart"
                                                                type="button">Add To Cart
                                                        </button>
                                                        <button
                                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                            type="button">Add To Cart
                                                        </button>
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg>
                                                            <span
                                                                class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                        <button
                                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                            type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg>
                                                            <span
                                                                class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .Sản phẩm liên quan  / end -->
    </div>
@stop
