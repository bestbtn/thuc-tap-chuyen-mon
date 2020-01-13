<?php
function getCurrentPageURL() {
    global $_SERVER;
    $pageURL = 'http';
    if(isset($_SERVER["HTTPS"]))
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    $pageURL = explode("/page/", $pageURL);
    return $pageURL[0];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<h1 style="display:none">Stroyka - chuyên cung cấp thiết bị công nghiệp</h1>
<h2 style="display:none">Stroyka - chuyên cung cấp thiết bị công nghiệp</h2>
    <link rel="alternate" hreflang="x-default" href="<?php echo getCurrentPageURL();?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <meta name = "description" content = "Stroyka - chuyên cung cấp thiết bị công nghiệp"/>
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/photoswipe/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/photoswipe/default-skin/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="{{asset('fonts/stroyka/stroyka.css')}}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Google Search Console -->
    <meta name="google-site-verification" content="kcPSEERC6-McNnBoelugc-r5qrPzJBvwRsvnGXTzjVw" />
    <!-- End | Google Search Console -->
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156136461-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156136461-1');
</script>
<!-- END Global site tag -->
<!-- Meta Geo Location -->
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="Phường 11" />
<meta name="geo.position" content="10.79125;106.64988" />
<meta name="ICBM" content="10.79125, 106.64988" />
<!-- End| Meta Geo Location -->
</head>

<body>
<!-- site -->
<div class="site">
{{--header--}}
@include('components.header')
{{--end-header--}}
<!-- site__body -->
    @if(Session::has('warning'))
        <div class="alert alert-warning" style="margin-right: 2%;position: absolute;right: 0;top: 25%;z-index: 25;">
            <strong>Cảnh báo!</strong> {{ Session::get('warning') }}
        </div>
    @endif
    @if(Session::has('wrong'))
        <div class="alert alert-danger" style="margin-right: 2%;position: absolute;right: 0;top: 25%;z-index: 25;">
            <strong>Thông báo!</strong> {{ Session::get('wrong') }}
            @if(Session::has('wrong1'))
                <br>{{ Session::get('wrong1') }}
                @endif
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success" style="margin-right: 2%;position: absolute;right: 0;top: 25%;z-index: 25;">
            <strong>Thành công!</strong> {{ Session::get('success') }}
        </div>
    @endif
    @yield('content')

    <!-- site__body / end -->
    <!-- site__footer -->
@include('components.footer')
<!-- site__footer / end -->
</div>
<!-- site / end -->
<!-- quickview-modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">

        <!-- Modal content-->
        <div class="modal-content">

        </div>
    </div>

</div>
<!-- quickview-modal / end -->
<!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home</a></div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Categories</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Power Tools</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Engravers</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Wrenches</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Wall Chaser</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Pneumatic Tools</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Machine Tools</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Thread Cutting</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Chip Blowers</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Sharpening Machines</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Pipe Cutters</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Slotting machines</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Lathes</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop Grid</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">3 Columns Sidebar</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="shop-grid-4-columns-full.html" class="mobile-links__item-link">4 Columns Full</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="shop-grid-5-columns-full.html" class="mobile-links__item-link">5 Columns Full</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="shop-list.html" class="mobile-links__item-link">Shop List</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="product.html" class="mobile-links__item-link">Product</a>
                                    <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                        <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="product.html" class="mobile-links__item-link">Product</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="product-alt.html" class="mobile-links__item-link">Product Alt</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="product-sidebar.html" class="mobile-links__item-link">Product Sidebar</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="cart.html" class="mobile-links__item-link">Cart</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="cart-empty.html" class="mobile-links__item-link">Cart Empty</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="checkout.html" class="mobile-links__item-link">Checkout</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="wishlist.html" class="mobile-links__item-link">Wishlist</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="compare.html" class="mobile-links__item-link">Compare</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="track-order.html" class="mobile-links__item-link">Track Order</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="account-login.html" class="mobile-links__item-link">Account</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="account-login.html" class="mobile-links__item-link">Login</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="account-dashboard.html" class="mobile-links__item-link">Dashboard</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="account-profile.html" class="mobile-links__item-link">Edit Profile</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="account-orders.html" class="mobile-links__item-link">Order History</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="account-addresses.html" class="mobile-links__item-link">Address Book</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="account-password.html" class="mobile-links__item-link">Change Password</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Blog</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-list.html" class="mobile-links__item-link">Blog List</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post.html" class="mobile-links__item-link">Post Page</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Pages</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="about-us.html" class="mobile-links__item-link">About Us</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="contact-us.html" class="mobile-links__item-link">Contact Us</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="contact-us-alt.html" class="mobile-links__item-link">Contact Us Alt</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="404.html" class="mobile-links__item-link">404</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="terms-and-conditions.html" class="mobile-links__item-link">Terms And Conditions</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="faq.html" class="mobile-links__item-link">FAQ</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="components.html" class="mobile-links__item-link">Components</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="typography.html" class="mobile-links__item-link">Typography</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a data-collapse-trigger class="mobile-links__item-link">Currency</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">€ Euro</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">£ Pound Sterling</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">$ US Dollar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">₽ Russian Ruble</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a data-collapse-trigger class="mobile-links__item-link">Language</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">English</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">French</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">German</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Russian</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Italian</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- mobilemenu / end -->
<!-- photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- photoswipe / end -->
<!-- js -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('vendor/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{asset('vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('vendor/select2/js/select2.min.js')}}"></script>
<script src="{{asset('js/number.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('vendor/svg4everybody/svg4everybody.min.js')}}"></script>
<script>
    svg4everybody();
</script>
@yield('script')
</body>
<!-- Mirrored from stroyka.html.themeforest.scompiler.ru/themes/red-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 01:53:38 GMT -->

</html>
