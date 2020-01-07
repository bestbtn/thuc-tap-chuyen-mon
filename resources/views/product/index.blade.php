@extends('layouts.app')
@section('content')
    <style>
        a.sort_price {
            color: black !important;
        }

        a.sort_price:hover {
            color: red !important;
        }
    </style>
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
                            @if(isset($cateProduct['c_name']))
                                <li class="breadcrumb-item"><a href="#">Tên danh mục</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                    </svg>
                                </li>

                                <li class="breadcrumb-item active"
                                    aria-current="page">{{$cateProduct['c_name']}}
                                </li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>{{$cateProduct['c_name']}}</h1>
                </div>
                @else
                    <li class="breadcrumb-item"><a href="#">Cửa hàng</a></li>
                @endif
            </div>
        </div>
        <div class="container">
            <div class="shop-layout shop-layout--sidebar--start">
                <div class="shop-layout__sidebar">
                    <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                        <div class="block-sidebar__backdrop"></div>
                        <div class="block-sidebar__body">
                            <div class="block-sidebar__header">
                                <div class="block-sidebar__title">Lọc</div>
                                <button class="block-sidebar__close" type="button">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{asset('images/sprite.svg#cross-20')}}"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="block-sidebar__item">
                                <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse=""
                                     data-collapse-opened-class="filter--opened">
                                    <h4 class="widget-filters__title widget__title">Lọc</h4>
                                    <div class="widget-filters__list">
                                        <div class="widget-filters__item">
                                            <div class="filter filter--opened" data-collapse-item="">
                                                <button type="button" class="filter__title" data-collapse-trigger="">
                                                    Danh mục
                                                    <svg class="filter__arrow" width="12px" height="7px">
                                                        <use
                                                            xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                                    </svg>
                                                </button>
                                                <div class="filter__body" data-collapse-content="">
                                                    <div class="filter__container">
                                                        <div class="filter-categories">
                                                            <ul class="filter-categories__list">
                                                                @foreach($categories as $category)
                                                                    <li class="filter-categories__item filter-categories__item--parent">
                                                                        <a href="{{route('get.list.product',[$category->c_slug,$category->id])}}">{{$category->c_name}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-filters__item">
                                            <div class="filter filter--opened" data-collapse-item="">
                                                <button type="button" class="filter__title" data-collapse-trigger="">Giá
                                                    <svg class="filter__arrow" width="12px" height="7px">
                                                        <use
                                                            xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                                    </svg>
                                                </button>
                                                <div class="filter__body" data-collapse-content="">
                                                    <div class="filter__container">
                                                        <div class="filter-price" data-min="500" data-max="1500"
                                                             data-from="590" data-to="1130">
                                                            <ul>
                                                                <li style="list-style: none;margin: 3%">
                                                                    <a class="sort_price"
                                                                       href="{{request()->fullUrlWithQuery(['price' => '1'])}}">Dưới
                                                                        1 triệu</a>
                                                                </li>
                                                                <li style="list-style: none;margin: 3%">
                                                                    <a class="sort_price"
                                                                       href="{{request()->fullUrlWithQuery(['price' => '3'])}}">Từ
                                                                        1 triệu - 3 triệu</a>
                                                                </li>
                                                                <li style="list-style: none;margin: 3%">
                                                                    <a class="sort_price"
                                                                       href="{{request()->fullUrlWithQuery(['price' => '5'])}}">Từ
                                                                        3 triệu - 5 triệu</a>
                                                                </li>
                                                                <li style="list-style: none;margin: 3%">
                                                                    <a class="sort_price"
                                                                       href="{{request()->fullUrlWithQuery(['price' => '7'])}}">Từ
                                                                        5 triệu - 7 triệu</a>
                                                                </li>
                                                                <li style="list-style: none;margin: 3%">
                                                                    <a class="sort_price"
                                                                       href="{{request()->fullUrlWithQuery(['price' => '10'])}}">Từ
                                                                        7 triệu - 10 triệu</a>
                                                                </li>
                                                                <li style="list-style: none;margin: 3%">
                                                                    <a class="sort_price"
                                                                       href="{{request()->fullUrlWithQuery(['price' => '11'])}}">Trên
                                                                        10 triệu</a>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-layout__content">
                    <div class="block">
                        <div class="products-view">
                            {{-- mobile --}}
                            <div class="products-view__options">
                                <div class="view-options view-options--offcanvas--mobile">
                                    <div class="view-options__filters-button">
                                        <button type="button" class="filters-button">
                                            <svg class="filters-button__icon" width="16px" height="16px">
                                                <use xlink:href="{{asset('images/sprite.svg#filters-16')}}"></use>
                                            </svg>
                                            <span class="filters-button__title">Lọc</span> <span
                                                class="filters-button__counter">3</span></button>
                                    </div>
                                    <div class="view-options__layout">
                                        <div class="layout-switcher">
                                            <div class="layout-switcher__list">
                                                <button data-layout="grid-3-sidebar" data-with-features="false"
                                                        title="Grid" type="button" class="layout-switcher__button">
                                                    <svg width="16px" height="16px">
                                                        <use
                                                            xlink:href="{{asset('images/sprite.svg#layout-grid-16x16')}}"></use>
                                                    </svg>
                                                </button>
                                                <button data-layout="grid-3-sidebar" data-with-features="true"
                                                        title="Grid With Features" type="button"
                                                        class="layout-switcher__button">
                                                    <svg width="16px" height="16px">
                                                        <use
                                                            xlink:href="{{asset('images/sprite.svg#layout-grid-with-details-16x16')}}"></use>
                                                    </svg>
                                                </button>
                                                <button data-layout="list" data-with-features="false" title="List"
                                                        type="button"
                                                        class="layout-switcher__button layout-switcher__button--active">
                                                    <svg width="16px" height="16px">
                                                        <use
                                                            xlink:href="{{asset('images/sprite.svg#layout-list-16x16')}}"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-options__legend">Hiển thị 10 sản phẩm / {{ count($products)}} sản
                                        phẩm
                                    </div>
                                    <div class="view-options__divider"></div>

                                    <div class="view-options__control">
                                        <label for="">Sắp xếp theo</label>
                                        <form id="form_order" method="get">
                                            <div>
                                                <select class="form-control form-control-sm" name="orderby"
                                                        id="orderby">
                                                    <option value="default">Mặc định</option>
                                                    <option
                                                        value="new" {{$orderBy=='new' ?'selected = "selected"' :''}}>Mới
                                                        nhất
                                                    </option>
                                                    <option
                                                        value="asc" {{$orderBy=='asc' ?'selected = "selected"' :''}}>Giá
                                                        tăng dần
                                                    </option>
                                                    <option
                                                        value="desc" {{$orderBy=='desc' ?'selected = "selected"' :''}}>
                                                        Giá giảm dần
                                                    </option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="view-options__control">
                                        <label for="">Show</label>
                                        <div>
                                            <select class="form-control form-control-sm" name="" id="">
                                                <option value="">12</option>
                                                <option value="">24</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end / mobile --}}
                            <div class="products-view__list products-list" data-layout="list"
                                 data-with-features="false">
                                <div class="products-list__body">
                                    @if(isset($products))
                                        @foreach($products as $product)
                                            <div class="products-list__item">
                                                <div class="product-card">
                                                    <button class="product-card__quickview" type="button">
                                                        <svg width="16px" height="16px">
                                                            <use
                                                                xlink:href="{{asset('images/sprite.svg#quickview-16')}}"></use>
                                                        </svg>
                                                        <span class="fake-svg-icon"></span></button>
                                                    <div class="product-card__badges-list">
                                                        <div class="product-card__badge product-card__badge--new">New
                                                        </div>
                                                    </div>
                                                    <div class="product-card__image">
                                                        <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}"><img
                                                                src="{{asset(pare_url_file($product->pro_avatar))}}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__name"><a
                                                                href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a>
                                                        </div>
                                                        <div class="product-card__rating">
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
                                                                class="product-card__rating-legend">{{$product->pro_total_rating}}
                                                                đánh giá
                                                            </div>
                                                        </div>
                                                        <ul class="product-card__features-list">
                                                            <li>{{$product->pro_description}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-card__actions">
                                                        @if($product->pro_number > 0 )
                                                            <div class="product-card__availability">Có sẵn: <span
                                                                    class="text-success">Trong kho</span></div>
                                                        @else
                                                            <div class="product-card__availability">Hết hàng: <span
                                                                    class="text-danger">Trong kho</span></div>
                                                        @endif
                                                        <div
                                                            class="product-card__prices">{{number_format($product->pro_price,0,',','.')}}
                                                            đ
                                                        </div>
                                                        <div class="product-card__buttons">
                                                            <a href="{{route('add.shopping.product',$product->id)}}">
                                                                <button class="btn btn-primary product-card__addtocart"
                                                                        type="button">Add To Cart
                                                                </button>
                                                            </a>
                                                            <a href="{{route('add.shopping.product',$product->id)}}">
                                                                <button
                                                                    class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                                    type="button">Add To Cart
                                                                </button>
                                                            </a>
                                                            <button
                                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                                type="button">
                                                                <svg width="16px" height="16px">
                                                                    <use
                                                                        xlink:href="{{asset('images/sprite.svg#wishlist-16')}}"></use>
                                                                </svg>
                                                                <span
                                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                            </button>
                                                            <button
                                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                                type="button">
                                                                <svg width="16px" height="16px">
                                                                    <use
                                                                        xlink:href="{{asset('images/sprite.svg#compare-16')}}"></use>
                                                                </svg>
                                                                <span
                                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                        {{ $products->appends($query)->links() }}
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        $(function () {
            $("#orderby").change(function () {
                $("#form_order").submit();
            })
        })
    </script>
@stop
