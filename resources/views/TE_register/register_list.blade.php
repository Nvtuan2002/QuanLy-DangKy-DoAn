@extends('layouts.default')
@section('content')
    <div class="register m-2 register_list">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Danh sách sinh viên</li>
            </ol>
        </nav>
        <div>
            <div style="float: left;">
                <a class="btn_list_register" href="{{ route('register_list') }}">Danh sách sinh viên</a>
                <a class="invite" href="{{ route('register_wait') }}">Hàng chờ</a>
            </div>
            <form class="container" style="margin-bottom: 10px">
                <input placeholder="Nhập từ khóa muốn tìm kiếm" required="" pattern=".*\S.*" type="search" class="input invite" id="search">
                <span class="caret"></span>
            </form>
        </div>
        <table class="container">
                <tr>
                    <td style="text-align: center">Tên sinh viên</td>
                    <td style="text-align: center">Mã số sinh viên</td>
                    <td style="text-align: center">Giảng viên phụ trách</td>
                    <td style="text-align: center">Đề tài tham gia</td>
                    <td style="text-align: center">Nhóm</td>
                    <td style="text-align: center">Lựa chọn</td>
                </tr>

        </table>
        <table class="container">
                <tr>
                    <td>Nguyễn Hải Long</td>
                    <td>20010999</td>
                    <td>Nguyễn Thành Trung</td>
                    <td>Lập trình WEbssite</td>
                    <td>15/15</td>
                    <td style="all:unset">
                        <button class="invite"><a href="#">Xóa</a></button>
                        <button class="invite"><a href="#">Chỉnh sửa</a></button>
                        <button class="invite"><a href="#">Chuyển nhóm</a></button>
                    </td>
                </tr>
                <tr>
                    <td>Nguyễn Hải Long</td>
                    <td>20010999</td>
                    <td>Nguyễn Thành Trung</td>
                    <td>Lập trình WEbssite</td>
                    <td>15/15</td>
                    <td style="all:unset">
                        <button class="invite"><a href="#">Xóa</a></button>
                        <button class="invite"><a href="#">Chỉnh sửa</a></button>
                        <button class="invite"><a href="#">Chuyển nhóm</a></button>
                    </td>
                </tr>
                <tr>
                    <td>Nguyễn Hải Long</td>
                    <td>20010999</td>
                    <td>Nguyễn Thành Trung</td>
                    <td>Lập trình WEbssite</td>
                    <td>15/15</td>
                    <td style="all:unset">
                        <button class="invite"><a href="#">Xóa</a></button>
                        <button class="invite"><a href="#">Chỉnh sửa</a></button>
                        <button class="invite"><a href="#">Chuyển nhóm</a></button>
                    </td>
                </tr>
        </table>

    </div>
@stop
