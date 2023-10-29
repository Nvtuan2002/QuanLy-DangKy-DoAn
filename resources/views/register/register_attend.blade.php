@extends('layouts.default')
@section('content')
    <nav class="container" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Đăng ký đồ án > Tham gia nhóm</li>
        </ol>
    </nav>
    <div id="loading" style="text-align:center;">
        <p>Đơn yêu cầu gia nhập nhóm đang được phê duyệt</p>
        <svg viewBox="25 25 50 50">
            <circle r="20" cy="50" cx="50"></circle>
        </svg>
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('register') }}">Quay lại</a>
        </div>
    </div>
    <div class="register m-2">
        <h5>Giảng viên: Nguyễn Thành Trung</h5>
        <table class="container">
            <tr>
                <td style="text-align: center">Tên giảng viên</td>
                <td style="text-align: center">Tên đề tài</td>
                <td style="text-align: center">Yêu cầu</td>
                <td style="text-align: center">Nhóm số</td>
                <td style="text-align: center">Số lượng tham gia</td>
                <td style="text-align: center">Lựa chọn</td>
            </tr>
        </table>
        <table class="container">
            <tr>
                <td>Nguyễn Thành Trung</td>
                <td>Website Quản lý đăng ký đồ án</td>
                <td>+Về ngôn ngữ: PHP
                    + Yêu cầu chăm học hỏi kiến thức mới</td>
                <td>1</td>
                <td>15/15</td>
                <td style="all:unset"><button class="invite" href="{{ route('register') }}">Tham gia nhóm</button></td>
            </tr>
            <tr>
                <td>Nguyễn Thành Trung</td>
                <td>Website Quản lý đăng ký đồ án</td>
                <td>+Về ngôn ngữ: PHP
                    + Yêu cầu chăm học hỏi kiến thức mới</td>
                <td>2</td>
                <td>15/15</td>
                <td style="all:unset"><button class="invite">Tham gia nhóm</button></td>
            </tr>
            <tr>
                <td>Nguyễn Thành Trung</td>
                <td>Website Quản lý đăng ký đồ án</td>
                <td>+Về ngôn ngữ: PHP
                    + Yêu cầu chăm học hỏi kiến thức mới</td>
                <td>3</td>
                <td>15/15</td>
                <td style="all:unset"><button class="invite">Tham gia nhóm</button></td>
            </tr>
        </table>
        <div class="d-flex justify-content-around">
            <div class="d-flex justify-content-center mt-5">
                <a class="cancel px-5" href="{{ route('register') }}">Quay lại</a>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a class="cancel px-5" href="{{ route('register_create') }}">Tạo nhóm</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.register').style.display = 'none';
            setTimeout(function() {
                document.getElementById('loading').style.display = 'none';
                document.querySelector('.register').style.display = 'block';
            }, 3000);
        });
    </script>
@stop
