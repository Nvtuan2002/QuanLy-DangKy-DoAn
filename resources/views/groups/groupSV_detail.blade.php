@extends('layouts.default')
@section('content')
    <div class="groups_detail m-2">
        {{-- <img src="../img/background-primary.png" alt=""> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Nhóm của bạn > Xem thông tin nhóm</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <div class="p-3" style="margin-left:20vw ;width: 50%; background: #F9F3CC; border: 1px solid rgba(0, 0, 0, 0.20);">
                <ul class="row">
                    <p class="col-6">Ảnh Đại diện</p>
                    <img class="col-6" src="./img/avatar-groups.png" alt="">
                </ul>
                <ul class="row">
                    <p class="col-6">Tên nhóm: </p>
                    <p class="col-6">Team Hắc Cơ</p>
                </ul>
                <ul class="row">
                    <p class="col-6">Tên đề tài: </p>
                    <p class="col-6">Xây dựng Web quản lí đăng ký đồ án</p>
                </ul>
                <ul class="row">
                    <p class="col-6">Giảng Viên: </p>
                    <p class="col-6">Nguyễn Thành Trung</p>
                </ul>
                <ul class="row">
                    <p class="col-6">Thành viên nhóm: </p>
                    <div class="col-6">
                        <ul class="row d-flex align-items-center">
                            <img class="col-6" src="./img/avatar.png" alt="">
                            <li class="col-6">Hoàng Hải Long</li>
                        </ul>
                        <ul class="row d-flex align-items-center">
                            <img class="col-6" src="./img/avatar.png" alt="">
                            <li class="col-6">Nguyễn Viết Tuấn</li>
                        </ul>
                        <ul class="row d-flex align-items-center">
                            <img class="col-6" src="./img/avatar.png" alt="">
                            <li class="col-6">Bùi Khánh Huyền</li>
                        </ul>
                    </div>
                </ul>
                <ul class="row">
                    <p class="col-6">Nhóm số: </p>
                    <p class="col-6">1</p>
                </ul>
                <ul class="row">
                    <p class="col-6">Điểm số trung bình: </p>
                    <p class="col-6">10</p>
                </ul>
            </div>
            <div class="d-flex flex-column me-5 align-items-end">
                <button class="cancel mb-4 ">Rời nhóm</button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('groupSV') }}">Quay lại</a>
        </div>

    </div>
@stop
