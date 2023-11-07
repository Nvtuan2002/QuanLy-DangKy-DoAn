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
                <form action="{{route('checkLogin')}}"  method="POST">
                    @csrf
                    <div class="user-box">
                        <input type="text" name="email" required="" >
                        <label>Tài khoản</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" required="">
                        <label>Mật khẩu</label>
                    </div>
                    <button type="submit">Đăng nhập</button>


                    <a href="">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Quên mật khẩu
                    </a>
                </form>
            </div>
        </div>
    </div>
@stop
