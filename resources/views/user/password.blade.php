@extends('user.layout')
@section('content_small')
    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
        <div class="card">
            <div class="card-header">
                <h5>Thay đổi mật khẩu</h5></div>
            <div class="card-divider"></div>
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="ccol-9 col-lg-9 col-xl-9" style="margin-left: 10%">
                        <form action="" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="profile-email">Mật khẩu mới: </label>
                                <input type="password" class="form-control"  name="password" id="profile-email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="profile-phone">Xác nhận lại mật khẩu:</label>
                                <input type="password" class="form-control"  name="password_again" id="profile-phone" placeholder="">
                            </div>
                            <div class="form-group mt-5 mb-0">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
