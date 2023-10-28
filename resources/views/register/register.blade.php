@extends('layouts.default')
@section('content')
    <div class="register m-2">
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
                    <td style="text-align: center">Tên giảng viên</td>
                    <td style="text-align: center">Tên đề tài</td>
                    <td style="text-align: center">Yêu cầu</td>
                    <td style="text-align: center">Thời hạn</td>
                    <td style="text-align: center">Số lượng thành viên</td>
                    <td style="text-align: center">Lựa chọn</td>
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
                    <td style="all:unset"><button class="invite"><a href="{{ route('register_attend') }}">Tham gia nhóm</a></button></td>
                </tr>
                <tr>
                    <td>Nguyễn Thành Trung</td>
                    <td>Website Quản lý đăng ký đồ án</td>
                    <td>+Về ngôn ngữ: PHP 
                        + Yêu cầu chăm học hỏi kiến thức mới</td>
                    <td>3 tháng</td>
                    <td>15/15</td>
                    <td style="all:unset"><button class="invite"><a href="{{ route('register_attend') }}">Tham gia nhóm</a></button></td>
                </tr>
                <tr>
                    <td>Nguyễn Thành Trung</td>
                    <td>Website Quản lý đăng ký đồ án</td>
                    <td>+Về ngôn ngữ: PHP 
                        + Yêu cầu chăm học hỏi kiến thức mới</td>
                    <td>3 tháng</td>
                    <td>15/15</td>
                    <td style="all:unset"><button class="invite"><a href="{{ route('register_attend') }}">Tham gia nhóm</a></button></td>
                </tr>
        </table>
        {{-- <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('groupSV') }}">Quay lại</a>
        </div> --}}

    </div>
@stop
