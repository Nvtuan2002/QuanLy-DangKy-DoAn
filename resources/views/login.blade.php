@extends('layouts.login')
@section('content')
    <div class="login-box">
        <h2>Đăng nhập</h2>
        <form>
            <div class="user-box">
                <input type="text" name="" required="">
                <label>Tài khoản</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Mật khẩu</label>
            </div>
            <a href="{{ route('TE_dashboard') }}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Đăng nhập
            </a>
        </form>
    </div>
@stop
