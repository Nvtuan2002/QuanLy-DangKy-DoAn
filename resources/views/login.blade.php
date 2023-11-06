@extends('layouts.login')
@section('title', 'Đăng nhập')
@section('content')
    <div id="image-main">
        <div class="row" id="login">
            <div class="img-box col-lg-7">
                <img src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2023/9/8/1238811/Tung-Buoc-Truong-Tha.jpg"
                    alt="">
            </div>
            <div class="login-box col-lg-5 col-md-12">
                <h2>CHÀO MỪNG</h2>
                <h5>Chúng tôi rất vui khi thấy bạn trở lại với chúng tôi</h5>
                <form>
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Tài khoản</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="" required="">
                        <label>Mật khẩu</label>
                    </div>
                    <a href="">Quên mật khẩu?</a>
                    <a href="{{ route('teacher.TE_dashboard') }}">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Đăng nhập
                    </a>
                </form>
            </div>
        </div>
    </div>
@stop
