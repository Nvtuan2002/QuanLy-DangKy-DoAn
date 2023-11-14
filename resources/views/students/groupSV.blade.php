@extends('layouts.default')
@section('title', 'Nhóm của bạn')

@section('header')
    @include('includes.header', [
        'name' => $studentData->stu_name,
        'img' => $studentData->stu_avt,
    ])
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
@endsection

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')
    <div class="groups col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Nhóm của bạn</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <div class="alert" style="padding: unset">
                <p class="fw-bold">Chào mừng, {{ $studentData->stu_name }}</p>
                <p class="fw-bold">Thông báo của giảng viên: </p>
                @if ($dataNotiGroup == null)
                    <p>Chưa có thông báo từ giảng viên</p>
                @else
                    <p class="fw-bold">{{ $dataNotiGroup->created_at }} <span style="font-weight: initial;">:
                            {{ $dataNotiGroup->rate_noti }}</span> </p>
                @endif
            </div>
            <div class="d-flex flex-column me-5 align-items-end">
                <a href="{{ route('student.leaveGroup') }}"><button class="cancel mb-4 ">Rời nhóm</button></a>
                {{-- <button class="cancel mb-4 ">Rời nhóm</button> --}}
            </div>
        </div>
        <div class="mx-3 row">
            <div class="col-lg-8 col-sm-12 history-update">
                <p>
                    <img class="avatar me-4 img" src="{{ asset('storage/image/' . $dataGroup->group_avt) }}"
                        alt="">{{ $dataGroup->group_name }}
                </p>
                <p class="fw-bold"><i class="bi bi-clock-history"></i>Lịch sử cập nhật</p>
                <ul
                    style="height: 300px; overflow-x: auto; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); background: #ededed;
                border: 1px solid #f68d8d;">
                    @if (count($dataUpdateFile) == 0)
                        <li>Chưa có lịch sử cập nhật</li>
                    @else
                        @foreach ($dataUpdateFile as $item)
                            <li><i class="bi bi-file-earmark-arrow-up"></i>{{ $item->stu_name }} đã tải lên
                                {{ $item->file }}
                            </li>
                        @endforeach

                    @endif
                </ul>
                <div class="d-flex flex-wrap justify-content-center"
                    style="width: 420px; gap: 20px 40px;   
                    margin-left: 60px;
                    margin-top: 100px;">
                    <a class="request" href="{{ route('student.groupSV_update') }}">Cập nhật tiến độ nhóm</a>
                    <a class="request" href="{{ route('student.groupSV_detail') }}">Xem thông tin nhóm</a>
                    <a class="request" href="{{ route('student.groupSV_request') }}">Các yêu cầu vào nhóm</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 d-flex justify-content-end flex-column align-items-center"
                style="width: 280px; height: 630px;">
                <p class="fw-bold" style="text-align: center;">Đánh giá của giảng viên</p>
                @if (count($dataScoreGroup) == 0)
                    <tr>Chưa có điểm đánh giá từ giảng viên</tr>
                @else
                    <table id="groupSV" style="width: 365px;">
                        <tr>
                            <td>Ngày</td>
                            <td>Điểm đánh giá</td>
                        </tr>
                        @foreach ($dataScoreGroup as $item)
                            
                        <tr>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->rate_score }}</td>
                        </tr>
                        @endforeach
                @endif

                </table>
            </div>
        </div>
    </div>
@stop
