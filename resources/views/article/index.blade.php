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
                            <li class="breadcrumb-item">
                                <a href="{{route('get.list.article')}}">Tin tức</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Tin mới nhất</h1></div>
            </div>
        </div>
        @if(isset($article))
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="block">
                            <div class="posts-view">
                                <div class="posts-view__list posts-list posts-list--layout--list">
                                    <div class="posts-list__body">
                                        @foreach($article as $ar)
                                            <div class="posts-list__item">
                                                <div class="post-card post-card--layout--list post-card--size--nl">
                                                    <div class="post-card__image">
                                                        <a href="{{route('get.detail.article',[$ar->a_slug,$ar->id])}}"><img src="{{pare_url_file($ar->a_avatar)}}" alt="{{$ar->a_name}}"></a>
                                                    </div>
                                                    <div class="post-card__info">
                                                        <div class="post-card__category"><a href="#">Tin mới nhất</a>
                                                        </div>
                                                        <div class="post-card__name"><a href="{{route('get.detail.article',[$ar->a_slug,$ar->id])}}">{{$ar->a_name}}</a></div>
                                                        <div class="post-card__date">{{date_format($ar->created_at,'d-m-Y') }}</div>
                                                        <div class="post-card__content">{{$ar->a_description}}
                                                        </div>
                                                        <div class="post-card__read-more"><a href="{{route('get.detail.article',[$ar->a_slug,$ar->id])}}"
                                                                                             class="btn btn-secondary btn-sm">Đọc thêm</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                            {{ $article->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="block block-sidebar block-sidebar--position--end">
                            <div class="block-sidebar__item">
                                <div class="widget-search">
                                    <form class="widget-search__body">
                                        <input class="widget-search__input" placeholder="Tìm kiếm bài viết..." type="text"
                                               autocomplete="off" spellcheck="false">
                                        <button class="widget-search__button" type="submit">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('images/sprite.svg#search-20')}}"></use>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="block-sidebar__item">
                                <div class="widget-posts widget">
                                    <h4 class="widget__title">Tin tức mới</h4>
                                    <div class="widget-posts__list">
                                        @foreach($article as $ar)
                                        <div class="widget-posts__item">
                                            <div class="widget-posts__image">
                                                <a href="{{route('get.detail.article',[$ar->a_slug,$ar->id])}}"><img src="{{pare_url_file($ar->a_avatar)}}" alt="{{$ar->a_name}}"></a>
                                            </div>
                                            <div class="widget-posts__info">
                                                <div class="widget-posts__name"><a href="{{route('get.detail.article',[$ar->a_slug,$ar->id])}}">{{$ar->a_name}}</a></div>
                                                <div class="widget-posts__date">{{date_format($ar->created_at,'d-m-Y') }}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="block-sidebar__item">
                                <div class="widget-newsletter widget">
                                    <h4 class="widget-newsletter__title">Our Newsletter</h4>
                                    <form class="widget-newsletter__form" action="#">
                                        <label for="widget-newsletter-email" class="sr-only">Email Address</label>
                                        <input id="widget-newsletter-email" type="text" class="form-control"
                                               placeholder="Email Address">
                                        <button type="submit" class="btn btn-primary mt-3">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            <div class="block-sidebar__item">
                                <div class="widget-tags widget">
                                    <h4 class="widget__title">Tags Cloud</h4>
                                    <div class="tags tags--lg">
                                        <div class="tags__list"><a href="#">Promotion</a> <a href="#">Power Tool</a> <a
                                                href="#">New Arrivals</a> <a href="#">Screwdriver</a> <a
                                                href="#">Wrench</a> <a href="#">Mounts</a> <a href="#">Electrodes</a> <a
                                                href="#">Chainsaws</a> <a href="#">Manometers</a> <a href="#">Nails</a>
                                            <a href="#">Air Guns</a> <a href="#">Cutting Discs</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@stop
