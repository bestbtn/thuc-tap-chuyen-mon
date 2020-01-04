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
                            <li class="breadcrumb-item"><a href="#">Liên hệ</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{asset('images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Liên hệ chúng tôi</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Liên hệ chúng tôi</h1></div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="card mb-0 contact-us">
                    <div class="contact-us__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.9648067258872!2d106.64780768664521!3d10.792928640604403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175294adf5418db%3A0x8f9890b4bacc89ea!2zMTE0IE7Eg20gQ2jDonUsIFBoxrDhu51uZyAxMiwgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1578134548277!5m2!1svi!2s"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">

                        </iframe>
                    </div>
                    <div class="card-body">
                        <div class="contact-us__container">
                            <div class="row">
                                <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                    <h4 class="contact-us__header card-title">Địa chỉ của chúng tôi</h4>
                                    <div class="contact-us__address">
                                        <p>114 năm châu, Phường 12, Quận Tân Bình
                                            <br>Email: thiennhan677@gmail.com
                                            <br>Phone Number: +84 9212 2222</p>
                                        <p><strong>Giờ mở của</strong>
                                            <br>Từ thứ hai đến thứ bảy : 8am-8pm
                                            <br>Thứ bảy: 8am-6pm
                                        <p><strong>Nhận xét</strong>
                                            <br>Nếu có bất cứ việc gì thì vui lòng liên hệ chúng tôi qua số điện thoại, gủi tin nhắn hoặc đến của hàng để đươc hỗ trợ tối đa.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h4 class="contact-us__header card-title">Để lại lời nhắn</h4>
                                    <form method="post" action="" >
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="form-name">Họ tên: </label>
                                                <input type="text" id="form-name" name="name" class="form-control"
                                                       placeholder="tên của bạn" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="form-email">Email</label>
                                                <input type="email" id="form-email" name="email" class="form-control"
                                                       placeholder="Email Address" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-subject">Chủ đề</label>
                                            <input type="text" id="form-subject" name="title" class="form-control"
                                                   placeholder="Chủ đề" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-message">Nội dung</label>
                                            <textarea id="form-message" name="c_content" class="form-control" rows="4" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Gủi tin nhắn</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
