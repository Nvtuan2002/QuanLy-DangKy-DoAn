@extends('layouts.default')
@section('content')
    <div class="col-lg-10">
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
        <div class="register_attend m-2">
            <h5 style="float: right;">Giảng viên: Nguyễn Thành Trung</h5>
            <table class="container">
                <tr>
                    <th style="text-align: center">Tên giảng viên</th>
                    <th style="text-align: center">Tên đề tài</th>
                    <th style="text-align: center">Yêu cầu</th>
                    <th style="text-align: center">Nhóm số</th>
                    <th style="text-align: center">Số lượng tham gia</th>
                    <th style="text-align: center">Lựa chọn</th>
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
                    <td><button class="invite" href="{{ route('register') }}">Tham gia nhóm</button></td>
                </tr>
                <tr>
                    <td>Nguyễn Thành Trung</td>
                    <td>Website Quản lý đăng ký đồ án</td>
                    <td>+Về ngôn ngữ: PHP
                        + Yêu cầu chăm học hỏi kiến thức mới</td>
                    <td>2</td>
                    <td>15/15</td>
                    <td><button class="invite" href="{{ route('register') }}">Tham gia nhóm</button></td>
                </tr>
                <tr>
                    <td>Nguyễn Thành Trung</td>
                    <td>Website Quản lý đăng ký đồ án</td>
                    <td>+Về ngôn ngữ: PHP
                        + Yêu cầu chăm học hỏi kiến thức mới</td>
                    <td>3</td>
                    <td>15/15</td>
                    <td><button class="invite" href="{{ route('register') }}">Tham gia nhóm</button></td>
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
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.register_attend').style.display = 'none';
            setTimeout(function() {
                document.getElementById('loading').style.display = 'none';
                document.querySelector('.register_attend').style.display = 'block';
            }, 3000);
        });
    </script>
@stop
