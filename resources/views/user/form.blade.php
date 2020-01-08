@extends('user.layout')
@section('content_small')
    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
        <div class="card">
            <div class="card-header">
                <h5>Cập nhật Profile</h5></div>
            <div class="card-divider"></div>
            <div class="card-body">
                <div class="row no-gutters">
                    @if($user)

                    <div class="ccol-9 col-lg-9 col-xl-9" style="margin-left: 10%">
                        <form action="" method="post" >
                            @csrf
                        <div class="form-group">
                            <label for="profile-last-name">Họ & tên</label>
                            <input type="text" value="{{$user->name}}" class="form-control" id="profile-last-name" name="name" placeholder="Nhập họ và tên ...">
                        </div>
                        <div class="form-group">
                            <label for="profile-email">Email Address</label>
                            <input type="email" value="{{$user->email}}" class="form-control"  name="email" id="profile-email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="profile-phone">Số điện thoại</label>
                            <input type="text" class="form-control" value="{{$user->phone}}" name="phone" id="profile-phone" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group mt-5 mb-0">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                        </form>
                    </div>

                        @endif
                </div>
            </div>
        </div>
    </div>
    @stop
