@extends('layouts.default')
@section('content')
    <div class="groups m-2">
        <img src="../img/background-primary.png" alt="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Nhóm của bạn</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <div class="alert">
                <p class="fw-bold">Chào mừng, Hoàng Hải Long</p>
                <p class="">Thông báo của giảng viên: </p>
                <p class="">15/10/2023 9:54PM: Nhóm cần hoàn thành chi tiết hơn</p>
            </div>
            <div class="d-flex flex-column me-5 align-items-end">
                <button class="cancel mb-4 ">Rời nhóm</button>
                <button class="invite me-4"><i class="bi bi-plus-square"></i>Mời bạn tham gia</button>
            </div>
        </div>
        <div class="mx-3 d-flex">
            <div class="col-md-8 history-update">
                <p><img class="avatar me-4" src="./img/avatar-groups.png" alt="Avatar groups">Nhóm 04</p>
                <p class="fw-bold"><i class="bi bi-clock-history"></i>Lịch sử cập nhật</p>
                <ul>
                    <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                </ul>
                <div class="d-flex flex-wrap justify-content-center" style="width: 420px; gap: 20px 40px;">
                    <a class="request" href="{{ route('groupSV_update') }}">Cập nhật tiến độ nhóm</a>
                    <a class="request" href="{{ route('groupSV_detail') }}">Xem thông tin nhóm</a>
                    <a class="request">Các yêu cầu vào nhóm</a>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-end flex-column" style="width: 280px;">
                <p class="fw-bold" style="text-align: center;">Đánh giá của giảng viên</p>
                <table>
                    <tr>
                        <td>Ngày</td>
                        <td>Điểm đánh giá</td>
                    </tr>
                    <tr>
                        <td>15/10/2023</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>15/10/2023</td>
                        <td>10</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@stop
