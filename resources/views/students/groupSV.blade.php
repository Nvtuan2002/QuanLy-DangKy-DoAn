@extends('layouts.default')
@section('title', 'Nhóm của bạn')

@section('header')
    @include('includes.header', [
        'name' => $studentData->stu_name,
    ])
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')
    <div class="groups col-lg-10">
        <img src="{{ asset('../img/background-primary.png') }}" alt="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Nhóm của bạn</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <div class="alert" style="padding: unset">
                <p class="fw-bold">Chào mừng, {{ $dataGroup->stu_name }}</p>
                <p class="">Thông báo của giảng viên: </p>
                <p class="">15/10/2023 9:54PM: {{ $dataGroup->rate_noti }}</p>
            </div>
            <div class="d-flex flex-column me-5 align-items-end">
                <button class="cancel mb-4 ">Rời nhóm</button>
                <button class="invite me-4"><i class="bi bi-plus-square"></i>Mời bạn tham gia</button>
            </div>
        </div>
        <div class="mx-3 row">
            <div class="col-lg-8 col-sm-12 history-update">
                <p><img class="avatar me-4" src="{{ asset('./img/avatar-groups.png') }}"
                        alt="Avatar groups">{{ $dataGroup->group_name }}</p>
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
                    <a class="request" href="{{ route('student.groupSV_update') }}">Cập nhật tiến độ nhóm</a>
                    <a class="request" href="{{ route('student.groupSV_detail') }}">Xem thông tin nhóm</a>
                    <a class="request" href="{{ route('student.groupSV_request') }}">Các yêu cầu vào nhóm</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 d-flex justify-content-end flex-column" style="width: 280px; height: 630px;">
                <p class="fw-bold" style="text-align: center;">Đánh giá của giảng viên</p>
                <table id="groupSV">
                    <tr>
                        <td>Ngày</td>
                        <td>Điểm đánh giá</td>
                    </tr>
                    <tr>
                        <td>15/10/2023</td>
                        <td>{{$dataGroup->rate_score}}</td>
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
