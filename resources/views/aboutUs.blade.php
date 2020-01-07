@extends('layouts.app')
@section('content')
<div class="site__body">
    <div class="block about-us">
        <div class="about-us__image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="about-us__body">
                        <h1 class="about-us__title">Về chúng tôi</h1>
                        <div class="about-us__text typography">
                            <p>Thành lập từ tháng 1/2020</p>
                            <p>Chúng tôi rất vui khi đem đến cho bạn những trải nghiệm mua sắm độc đáo thú vị.</p>
                            <p>Sản phẩm chất lượng, an toàn được đặt lên hàng đầu.</p>
                        </div>
                        <div class="about-us__team">
                            <h2 class="about-us__team-title">Thành viên trong nhóm</h2>
                            <div class="about-us__team-subtitle text-muted">Bạn có muốn cộng tác với chúng tôi?
                                <br><a href="{{route('get.contact')}}">Liên hệ chúng tôi</a> và chúng tôi sẽ xem xét về vị trí ứng tuyển của bạn</div>
                            <div class="about-us__teammates teammates">
                                <div class="owl-carousel owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 768px;">
                                            <div class="owl-item active" style="width: 224px; margin-right: 32px;">
                                                <div class="teammates__item teammate">
                                                    <div class="teammate__avatar"><img src="{{asset('images/avatars/nhan.jpg')}}" alt=""></div>
                                                    <div class="teammate__name">Bùi Thiện Nhân</div>
                                                    <div class="teammate__position text-muted">DEV</div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 224px; margin-right: 32px;">
                                                <div class="teammates__item teammate">
                                                    <div class="teammate__avatar"><img src="{{asset('images/avatars/vinh.jpg')}}" alt=""></div>
                                                    <div class="teammate__name">Võ Quang Vinh</div>
                                                    <div class="teammate__position text-muted">Seo - Marketing</div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 224px; margin-right: 32px;">
                                                <div class="teammates__item teammate">
                                                    <div class="teammate__avatar"><img width="225px" height="290px" src="{{asset('images/avatars/nguyen.jpg')}}" alt=""></div>
                                                    <div class="teammate__name">Trần Ngọc Khánh Nguyên</div>
                                                    <div class="teammate__position text-muted">CEO - Supporter </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 224px; margin-right: 32px;">
                                                <div class="teammates__item teammate">
                                                    <div class="teammate__avatar"><img src="{{asset('images/avatars/quang.jpg')}}" alt=""></div>
                                                    <div class="teammate__name">Bùi Văn Quang</div>
                                                    <div class="teammate__position text-muted">CEO</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                    </div>
                                    <div class="owl-dots disabled">
                                        <button role="button" class="owl-dot active"><span></span></button>
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
@stop
