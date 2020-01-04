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
                            <a href="#"><img src="{{pare_url_file($articleDetail->a_avatar)}}" alt=""></a>
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
                                    <a href="#"><img src="{{asset('images/avatars/avatar-1.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-author__info">
                                    <div class="post-author__name"><a href="#">Tác giả</a></div>
                                    <div class="post-author__about">Thông tin tác giả
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="post__section">
                            <h4 class="post__section-title">Related Posts</h4>
                            <div class="related-posts">
                                <div class="related-posts__list">
                                    <div class="related-posts__item post-card post-card--layout--related">
                                        <div class="post-card__image">
                                            <a href="#"><img src="images/posts/post-1.jpg" alt=""></a>
                                        </div>
                                        <div class="post-card__info">
                                            <div class="post-card__name"><a href="#">Philosophy That Addresses Topics
                                                    Such As Goodness</a></div>
                                            <div class="post-card__date">October 19, 2019</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="post__section">
                            <h4 class="post__section-title">Comments (4)</h4>
                            <ol class="comments-list comments-list--level--0">
                                <li class="comments-list__item">
                                    <div class="comment">
                                        <div class="comment__avatar">
                                            <a href="#"><img src="images/avatars/avatar-1.jpg" alt=""></a>
                                        </div>
                                        <div class="comment__content">
                                            <div class="comment__header">
                                                <div class="comment__author"><a href="#">Jessica Moore</a></div>
                                                <div class="comment__reply">
                                                    <button type="button" class="btn btn-xs btn-light">Reply</button>
                                                </div>
                                            </div>
                                            <div class="comment__text">Aliquam ullamcorper elementum sagittis. Etiam
                                                lacus lacus, mollis in mattis in, vehicula eu nulla. Nulla nec tellus
                                                pellentesque.
                                            </div>
                                            <div class="comment__date">November 30, 2018</div>
                                        </div>
                                    </div>
                                    <div class="comment-list__children">
                                        <ol class="comments-list comments-list--level--1">
                                            <li class="comments-list__item">
                                                <div class="comment">
                                                    <div class="comment__avatar">
                                                        <a href="#"><img src="images/avatars/avatar-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="comment__content">
                                                        <div class="comment__header">
                                                            <div class="comment__author"><a href="#">Adam Taylor</a>
                                                            </div>
                                                            <div class="comment__reply">
                                                                <button type="button" class="btn btn-xs btn-light">
                                                                    Reply
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="comment__text">Ut vitae finibus nisl, suscipit
                                                            porttitor urna. Integer efficitur efficitur velit non
                                                            pulvinar. Aliquam blandit volutpat arcu vel tristique.
                                                            Integer commodo ligula id augue tincidunt faucibus.
                                                        </div>
                                                        <div class="comment__date">December 4, 2018</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comments-list__item">
                                                <div class="comment">
                                                    <div class="comment__avatar">
                                                        <a href="#"><img src="images/avatars/avatar-3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="comment__content">
                                                        <div class="comment__header">
                                                            <div class="comment__author"><a href="#">Helena Garcia</a>
                                                            </div>
                                                            <div class="comment__reply">
                                                                <button type="button" class="btn btn-xs btn-light">
                                                                    Reply
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="comment__text">Suspendisse dignissim luctus metus
                                                            vitae aliquam. Vestibulum sem odio, ullamcorper a imperdiet
                                                            a, tincidunt sed lacus. Sed magna felis, consequat a erat
                                                            ut, rutrum finibus odio.
                                                        </div>
                                                        <div class="comment__date">December 12, 2018</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </li>
                                <li class="comments-list__item">
                                    <div class="comment">
                                        <div class="comment__avatar">
                                            <a href="#"><img src="images/avatars/avatar-4.jpg" alt=""></a>
                                        </div>
                                        <div class="comment__content">
                                            <div class="comment__header">
                                                <div class="comment__author"><a href="#">Ryan Ford</a></div>
                                                <div class="comment__reply">
                                                    <button type="button" class="btn btn-xs btn-light">Reply</button>
                                                </div>
                                            </div>
                                            <div class="comment__text">Nullam at varius sapien. Sed sit amet condimentum
                                                elit.
                                            </div>
                                            <div class="comment__date">December 5, 2018</div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </section>
                        <section class="post__section">
                            <h4 class="post__section-title">Write A Comment</h4>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="comment-first-name">First Name</label>
                                        <input type="text" class="form-control" id="comment-first-name"
                                               placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="comment-last-name">Last Name</label>
                                        <input type="text" class="form-control" id="comment-last-name"
                                               placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="comment-email">Email Address</label>
                                        <input type="email" class="form-control" id="comment-email"
                                               placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment-content">Comment</label>
                                    <textarea class="form-control" id="comment-content" rows="6"></textarea>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Post Comment</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
            @endif
    </div>
@stop
