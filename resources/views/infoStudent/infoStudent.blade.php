@extends('layouts.default')
@section('content')
    <div class="groups m-2">
        {{-- <img src="../img/background-primary.png" alt=""> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Theo dõi tiến trình</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <div class="alert">
                <p class="fw-bold">Chào mừng, Nguyễn Thành Trung</p>
            </div>
        </div>
        <div class="mx-3 d-flex">
            <div class="col-md-8 history-update" style="border-right: 1px solid black; margin-right: 50px;">
                <h6 class=" fw-bold"><img class="avatar me-4" src="./img/avatar-groups.png" alt="Avatar groups">Nhóm 04</h6>
                <div class="row">
                    <ul class="col-6">
                        <p class="fw-bold"><i class="bi bi-clock-history"></i>Lịch sử cập nhật</p>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    </ul>
                    <ul class="col-3 text-center">
                        <p class="fw-bold"><i class="bi bi-clock-history"></i>Bình luận</p>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                    </ul>
                    <ul class="col-3 text-center">
                        <p class="fw-bold"><i class="bi bi-clock-history"></i>Thời gian</p>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                    </ul>
                </div>
                <div class="d-flex flex-wrap justify-content-around" style="">
                    <a class="request" href="{{ route('monitor_process') }}">Quay lại</a>
                    <a class="request" href="{{ route('groupSV_detail') }}">Đưa ra thông báo</a>
                    <a class="request" href="{{ route('groupSV_request') }}">Đánh giá tiến độ</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mt-4">
                    <h6 class="fw-bold">Giới thiệu</h6>
                    <p>Website xây dựng quản lý đồ án</p>
                    <p><i class="bi bi-activity"></i>Tiến trình</p>
                    <p><i class="bi bi-journal-album"></i>Ghi chú</p>
                    <p><i class="bi bi-people-fill"></i>Thành viên</p>
                </div>
                <div class="mt-4">
                    <h6 class="fw-bold">Đóng góp</h6>
                    <p><img src="" alt="">Hoàng Hải Long</p>
                    <p><img src="" alt="">Nguyễn Viết Tuấn</p>
                </div>
                <div class="mt-4">
                    <h6 class="fw-bold">Kiểu File</h6>
                    <p><i class="bi bi-filetype-pdf"></i>PDF</p>
                    <p><i class="bi bi-filetype-png"></i>PNG</p>
                </div>

            </div>
        </div>
    </div>
@stop
