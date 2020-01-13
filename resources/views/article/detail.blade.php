@extends('layouts.app')
@section('content')
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
                            <li class="breadcrumb-item"><a href="#">Tin tức</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @if(isset($articleDetail))
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9 col-xl-8">
                    <div class="block post post--layout--full">
                        <div class="post__header post-header post-header--layout--full">
                            <div class="post-header__categories"><a href="#">Tin mới nhất</a></div>
                            <h1 class="post-header__title">{{$articleDetail->a_name}}</h1>
                            <div class="post-header__meta">
                                <div class="post-header__meta-item">By <a href="#">Thiện Nhân</a></div>
                                <div class="post-header__meta-item"><a href="#">{{date_format($articleDetail->created_at,'d-m-Y') }}</a></div>
                                <div class="post-header__meta-item"><a href="#">4 bình luận</a></div>
                            </div>
                        </div>
                        <div class="post__featured">
                            <a href="#"><img src="{{pare_url_file($articleDetail->a_avatar)}}" alt="{{$articleDetail->a_name}}"></a>
                        </div>
                        <div class="post__content typography typography--expanded">
                            <hr>
                           {!! $articleDetail->a_content !!}
                        </div>
                        <div class="post__footer">
                            <div class="post__tags-share-links">
                                <div class="post__tags tags">
                                    <div class="tags__list"><a href="#">Promotion</a> <a href="#">Power Tool</a> <a
                                            href="#">Wrench</a> <a href="#">Electrodes</a></div>
                                </div>
                                <div class="post__share-links share-links">
                                    <ul class="share-links__list">
                                        <li class="share-links__item share-links__item--type--like"><a href="#">Like</a>
                                        </li>
                                        <li class="share-links__item share-links__item--type--tweet"><a
                                                href="#">Tweet</a></li>
                                        <li class="share-links__item share-links__item--type--pin"><a href="#">Pin
                                                It</a></li>
                                        <li class="share-links__item share-links__item--type--counter"><a
                                                href="#">4K</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-author">
                                <div class="post-author__avatar">
                                    <a href="#"><img src="{{asset('images/avatars/avatar-1.jpg')}}" alt="tác giả"></a>
                                </div>
                                <div class="post-author__info">
                                    <div class="post-author__name"><a href="#">Tác giả</a></div>
                                    <div class="post-author__about">Thông tin tác giả
                                    </div>
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
