<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 13:52:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Welcome to Fit2Go Admin Dashboard</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- global css -->
    <link type="text/css" href="{{asset('theme_admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('theme_admin/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('theme_admin/css/custom_css/metisMenu.css')}}" rel="stylesheet" />
    <!-- Date picker -->
    <link href="{{asset('theme_admin/vendors/air-datepicker-master/dist/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!-- page level css -->
    <link type="text/css" href="{{asset('theme_admin/css/dashboard.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('theme_admin/css/custom_css/fitness.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('theme_admin/css/custom_css/panel.css')}}" rel="stylesheet" />
    <link type="text/css" href="{{asset('theme_admin/css/custom_css/admin_dashboard.css')}}" rel="stylesheet">
    <!-- end of page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme_admin/css/custom_css/user_profile.css')}}" />
    <link href="{{ asset('theme_admin/css/theme.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
<div class="se-pre-con"></div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top">
        <a href="" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="{{asset('theme_admin/img/logo.png')}}" alt="image not found">
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-navicon"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw fa-envelope-o black"></i>
                        <span class="label label-success">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages table-striped">
                        <li class="dropdown-title">New Messages</li>
                        <li>
                            <a href="#" class="message striped-col">
                                <img class="message-image img-circle" alt="image" src="{{asset('theme_admin/img/authors/avatar7.jpg')}}">
                                <div class="message-body"><strong>Ernest Kerry</strong>
                                    <br> Can we Meet?
                                    <br>
                                    <small>Just Now</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message">
                                <img class="message-image img-circle" alt="image" src="{{asset('theme_admin/img/authors/avatar.jpg')}}">
                                <div class="message-body"><strong>John</strong>
                                    <br> Dont forgot to call...
                                    <br>
                                    <small>5 minutes ago</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message striped-col">
                                <img class="message-image img-circle" alt="image" src="{{asset('theme_admin/img/authors/avatar5.jpg')}}">
                                <div class="message-body">
                                    <strong>Wilton Zeph</strong>
                                    <br> If there is anything else &hellip;
                                    <br>
                                    <small>14/10/2014 1:31 pm</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message">
                                <img class="message-image img-circle" alt="image" src="{{asset('theme_admin/img/authors/avatar1.jpg')}}">
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br> Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message striped-col">
                                <img class="message-image img-circle" alt="image" src="{{asset('theme_admin/img/authors/avatar.jpg')}}">
                                <div class="message-body">
                                    <strong>Tony</strong>
                                    <br> Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer">View All messages</li>
                    </ul>
                </li>
                <!--tasks-->
                <li class="dropdown tasks-menu hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-edit black"></i>
                        <span class="label label-primary">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="dropdown-title">You Have 4 Tasks</li>
                        <li>
                            <a href="#" class="message striped-col">
                                Design some buttons
                                <small class="pull-right">20%</small>
                                <div class="message-body">
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-primary" style="width: 20%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message">
                                Create a nice theme
                                <small class="pull-right">40%</small>
                                <div class="message-body">
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-success" style="width: 40%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message striped-col">
                                Some task I need to do
                                <small class="pull-right">60%</small>
                                <div class="message-body">
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message">
                                Make beautiful transitions
                                <small class="pull-right">80%</small>
                                <div class="message-body">
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-warning" style="width: 80%"
                                             role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer">View All Tasks</li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle toggle-right">
                        <i class="fa fa-fw fa-comments-o black1"></i>
                        <span class="label label-danger">0</span>
                    </a>
                </li>
                <!-- Notifications: style can be found in dropdown-->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-fw fa-bell-o black1"></i>
                        <span class="label label-warning">9</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="dropdown-title">You have 9 notifications</li>
                        <li>
                            <a href="#" class="message icon-not striped-col">
                                <i class="fa fa-fw fa-users info"></i>
                                <div class="message-body">
                                    <strong>John Doe</strong>
                                    <br> 5 members joined today
                                    <br>
                                    <span class="noti-date">Just now</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message icon-not">
                                <i class="fa fa-fw fa-users warning"></i>
                                <div class="message-body">
                                    <strong>Tony</strong>
                                    <br> likes a photo of you
                                    <br>
                                    <span class="noti-date">5 min</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message icon-not striped-col">
                                <i class="fa fa-fw fa-user danger"></i>
                                <div class="message-body">
                                    <strong>John</strong>
                                    <br> Dont forgot to call...
                                    <br>
                                    <span class="noti-date">11 min</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message icon-not">
                                <i class="fa fa-fw fa-info-circle dange"></i>
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br> Very long description here...
                                    <br>
                                    <span class="noti-date">1 Hour</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message icon-not striped-col">
                                <i class="fa fa-fw fa-thumbs-o-up success"></i>
                                <div class="message-body">
                                    <strong>Ernest Kerry</strong>
                                    <br> 2 members joined today
                                    <br>
                                    <span class="noti-date">3 Days</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer">View All Notifications</li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="{{asset('theme_admin/img/authors/avatar1.jpg')}}" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                        <div class="riot">
                            <div>
                                {{get_data_user('admins','name')}}
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('theme_admin/img/authors/avatar1.jpg')}}" class="img-circle" alt="User Image">
                            <p> {{get_data_user('admins','name')}}</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="pad-3">
                            <a href="{{route('admin.get.profile')}}">
                                <i class="fa fa-fw fa-user"></i> Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                                <a href="{{route('admin.get.logout')}}">
                                    <i class="fa fa-fw fa-sign-out"></i> Đăng xuất
                                </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- menu -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <!-- profile -->
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="{{asset('theme_admin/img/authors/avatar1.jpg')}}" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">Thien Nhan</h4>
                            <span class="text-default">Admin</span>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li class="active" id="active">
                        <a href="{{route('admin.get.dashboard')}}">
                            <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                            <span class="mm-text ">Trang chủ</span>
                        </a>
                    </li>
{{--                    danh muc--}}
                    <li class="menu-dropdown">
                        <a href="">
                            <i class="text-info menu-icon fa fa-fw fas fa-align-justify"></i>
                            <span class="mm-text">Danh mục</span>
                            <span class="fa fa-angle-down pull-right"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('admin.get.list.category')}}">
                                    <i class="text-primary menu-icon fa fa-inbox"></i> Danh sách
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.get.create.category')}}">
                                    <i class="menu-icon text-success fa fa-plus-circle"></i> Thêm danh mục
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--sản phẩm--}}
                    <li class="menu-dropdown">
                        <a href="{{route('admin.get.list.product')}}">
                            <i class="text-warning menu-icon fa fa-fw fa-graduation-cap"></i>
                            <span class="mm-text">Sản phẩm</span>
                            <span class="fa fa-angle-down pull-right"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('admin.get.list.product')}}">
                                    <i class="text-primary fa fa-fw fa-th"></i> Danh sách sản phẩm
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.get.create.product')}}">
                                    <i class="text-danger fa fa-fw fas fa-plus-circle"></i> Thêm sản phẩm
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- đánh giá --}}
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="text-info menu-icon fa fa-fw fa fa-star"></i>
                            <span class="mm-text">Đánh giá</span>
                            <span class="fa fa-angle-down pull-right"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('admin.get.list.rating')}}">
                                    <i class="text-primary menu-icon fa fa-star"></i> Quản lí đánh giá
                                </a>
                            </li>

                        </ul>
                    </li>

                    {{--tin tức--}}
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="text-info menu-icon fa fa-fw fa-calendar"></i>
                            <span class="mm-text">Tin tức</span>
                            <span class="fa fa-angle-down pull-right"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('admin.get.list.article')}}">
                                    <i class="text-primary menu-icon fa fa-inbox"></i> Danh sách tin tức
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.get.create.article')}}">
                                    <i class="menu-icon text-success fa fa-plus-circle"></i> Thêm tin tức
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{--đơn hàng--}}
                    <li class="menu-dropdown">
                        <a href="{{route('admin.get.list.transaction')}}">
                            <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                            <span class="mm-text">Đơn hàng</span>
                            <span class="fa fa-angle-down pull-right"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('admin.get.list.transaction')}}">
                                    <i class="text-primary menu-icon fa fa-inbox"></i> Danh sách đơn hàng
                                </a>
                            </li>

                        </ul>
                    </li>
                    {{--user--}}
                    <li class="menu-dropdown">
                        <a href="{{route('admin.get.list.user')}}">
                            <i class="text-default menu-icon fa fa-fw fa-users"></i>
                            <span class="mm-text">Users</span>
                            <span class="fa fa-angle-down pull-right"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('admin.get.list.user')}}">
                                    <i class="text-primary fa fa-fw fa-users"></i> Danh sách Users
                                </a>
                            </li>
                            <li>
                                <a href="admin_userprofile.html">
                                    <i class="text-success fa fa-fw fa-user"></i> User Profile
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-side right-padding">
        @if(Session::has('success'))
            <div class="alert alert-success" style="margin-top: 5%;float: right;margin-right: 2%">
                <strong>Thành công!</strong> {{ Session::get('success') }}
            </div>
        @endif
        @if(Session::has('wrong'))
            <div class="alert alert-danger " style="margin-top: 5%;float: right;margin-right: 2%">
                <strong>Thất bại!</strong> {!! Session::get('wrong') !!}
            </div>
        @endif


    @yield('content')
    </aside>
</div>
<!-- global js -->
<script src="{{asset('theme_admin/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme_admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('theme_admin/js/custom_js/app.js')}}" type="text/javascript"></script>
<script src="{{asset('theme_admin/js/custom_js/metisMenu.js')}}" type="text/javascript"></script>
<script src="{{asset('theme_admin/js/custom_js/backstretch.js')}}"></script>
<!-- end of global level js -->
<script src="{{asset('theme_admin/vendors/holder/holder.js')}}" type="text/javascript"></script>
<!-- date picker -->
<script src="{{asset('theme_admin/vendors/air-datepicker-master/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('theme_admin/vendors/air-datepicker-master/dist/js/i18n/datepicker.en.js')}}"></script>
<!-- date picker end -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#out_img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#input_img").change(function() {
        readURL(this);
    });
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@yield('script')


</body>


</html>

