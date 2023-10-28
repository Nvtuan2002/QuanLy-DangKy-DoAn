@extends('layouts.default')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Đăng kí đồ án > Tham gia nhóm > Lựa chọn nhóm > Tạo
                nhóm mới</li>
        </ol>
        {{-- <img src="../img/background-primary.png" alt=""> --}}
    </nav>
    <div class="register_create container">
        <h5>Giảng viên: Nguyễn Thành Trung</h5>
        <form>
            <label for="">Tên nhóm trưởng</label>
            <input type="text"> <br>
            <label for="">Yêu cầu: </label>
            <input type="text"> <br>
            <label for="">Tên đề tài</label>
            <input type="text"><br>
            <label for="">Số thành viên: </label>
            <input type="text"><br>
            <label for="">Tên nhóm: </label>
            <input type="text"><br>
            <label for="">Nhóm số: </label>
            <input type="text"><br>
            <label for="">Ảnh đại diện</label>
            <input type="file">
        </form>
    </div>
    <div class="d-flex justify-content-around" style="clear: both">
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('register') }}">Quay lại</a>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('register_create') }}">Tạo nhóm</a>
        </div>
    </div>
@stop
