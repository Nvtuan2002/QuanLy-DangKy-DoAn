@extends('layouts.default')
@section('title', 'Danh sách sinh viên')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('sidebar')
    @include('includes.sidebarTeacher')
@endsection

@section('content')
    <div class="register_list search col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Danh sách sinh viên</li>
            </ol>
        </nav>
        <div>
            <div style="float: left;">
                <a class="btn_list_register" href="{{ route('teacher.register_list') }}">Danh sách sinh viên</a>
                <a class="invite" href="{{ route('teacher.register_wait') }}">Hàng chờ</a>
            </div>
            <form class="container" style="margin-bottom: 10px">
                <input placeholder="Nhập từ khóa muốn tìm kiếm" required="" pattern=".*\S.*" type="search" class="input invite" id="search">
                <span class="caret"></span>
            </form>
        </div>
        <table class="container">
                <tr>
                    <th style="text-align: center">Tên sinh viên</th>
                    <th style="text-align: center">Mã số sinh viên</th>
                    <th style="text-align: center">Giảng viên phụ trách</th>
                    <th style="text-align: center">Đề tài tham gia</th>
                    <th style="text-align: center">Nhóm</th>
                    <th style="text-align: center">Lựa chọn</th>
                </tr>

        </table>
        <table class="container">
                <tr>
                    <td>Nguyễn Hải Long</td>
                    <td>20010999</td>
                    <td>Nguyễn Thành Trung</td>
                    <td>Lập trình WEbssite</td>
                    <td>15/15</td>
                    <td>
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
                    <td>
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
                    <td>
                        <button class="invite"><a href="#">Xóa</a></button>
                        <button class="invite"><a href="#">Chỉnh sửa</a></button>
                        <button class="invite"><a href="#">Chuyển nhóm</a></button>
                    </td>
                </tr>
        </table>

    </div>
@stop
