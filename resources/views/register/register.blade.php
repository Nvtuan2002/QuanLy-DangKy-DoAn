@extends('layouts.default')
@section('title', 'Đăng ký đồ án')
@section('content')
    <div class="register search col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Đăng ký đồ án</li>
            </ol>
        </nav>
        <form class="container" style="margin-bottom: 10px">
            <input placeholder="Nhập từ khóa muốn tìm kiếm" required="" pattern=".*\S.*" type="search" class="input invite" id="search">
            <span class="caret"></span>
        </form>
        <table class="container">
                <tr>
                    <th style="text-align: center">Tên giảng viên</th>
                    <th style="text-align: center">Tên đề tài</th>
                    <th style="text-align: center">Yêu cầu</th>
                    <th style="text-align: center">Thời hạn</th>
                    <th style="text-align: center">Số lượng thành viên</th>
                    <th style="text-align: center">Lựa chọn</th>
                </tr>

        </table>
        <table class="container">
                <tr>
                    <td>Nguyễn Thành Trung</td>
                    <td>Website Quản lý đăng ký đồ án</td>
                    <td>+Về ngôn ngữ: PHP 
                        + Yêu cầu chăm học hỏi kiến thức mới</td>
                    <td>3 tháng</td>
                    <td>15/15</td>
                    <td><button class="invite"><a href="{{ route('register_attend') }}">Tham gia nhóm</a></button></td>
                </tr>
                <tr>
                    <td>Nguyễn Thành Trung</td>
                    <td>Website Quản lý đăng ký đồ án</td>
                    <td>+Về ngôn ngữ: PHP 
                        + Yêu cầu chăm học hỏi kiến thức mới</td>
                    <td>3 tháng</td>
                    <td>15/15</td>
                    <td><button class="invite"><a href="{{ route('register_attend') }}">Tham gia nhóm</a></button></td>
                </tr>
                <tr>
                    <td>Nguyễn Thành Trung</td>
                    <td>Website Quản lý đăng ký đồ án</td>
                    <td>+Về ngôn ngữ: PHP 
                        + Yêu cầu chăm học hỏi kiến thức mới</td>
                    <td>3 tháng</td>
                    <td>15/15</td>
                    <td><button class="invite"><a href="{{ route('register_attend') }}">Tham gia nhóm</a></button></td>
                </tr>
        </table>

    </div>
@stop
