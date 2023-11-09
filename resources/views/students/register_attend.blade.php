@extends('layouts.default')
@section('title', 'Tham gia nhóm')


@section('header')
    @include('includes.header',[
        'name' => $studentData->stu_name,
        'img' => $studentData->stu_avt
    ])
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')
    <div class="col-lg-10">
        <nav class="container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Đăng ký đồ án > Tham gia nhóm</li>
            </ol>
        </nav>
        <div id="loading" style="text-align:center;">
            <p>Đơn yêu cầu gia nhập nhóm đang được phê duyệt</p>
            <svg viewBox="25 25 50 50">
                <circle r="20" cy="50" cx="50"></circle>
            </svg>
            <div class="d-flex justify-content-center mt-5">
                <a class="cancel px-5" href="{{ route('student.register') }}">Quay lại</a>
            </div>
        </div>
        <div class="register_attend m-2">
            <h5 style="float: right;">Giảng viên: {{$allGroup[0]->t_name}}</h5>
            <table class="container">
                <tr>
                    <th style="text-align: center">Tên nhóm</th>
                    <th style="text-align: center">Tên nhóm trưởng</th>
                    <th style="text-align: center">Tên đề tài</th>
                    <th style="text-align: center">Yêu cầu</th>
                    <th style="text-align: center">Nhóm số</th>
                    <th style="text-align: center">Số lượng tham gia</th>
                    <th style="text-align: center">Lựa chọn</th>
                </tr>
            </table>
            <table class="container">
                @foreach ($allGroup as $item)
                <tr>
                    <td>{{$item->group_name}}</td>
                    <td>{{$item->group_leader}}</td>
                    <td>{{$item->p_name}}</td>
                    <td>{{$item->group_request}}</td>
                    <td>{{$item->group_number}}</td>
                    <td>{{$item->group_quantity}}</td>
                    <td><button class="invite" href="{{ route('student.register') }}">Tham gia nhóm</button></td>
                </tr>
                @endforeach
               
            </table>
            <div class="d-flex justify-content-around">
                <div class="d-flex justify-content-center mt-5">
                    <a class="cancel px-5" href="{{ route('student.register') }}">Quay lại</a>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a class="cancel px-5" href="{{ route('student.register_create') }}">Tạo nhóm</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var loading = document.getElementById('loading');
            var register_attend = document.querySelector('.register_attend');
            var a = {{$studentData->stu_status}};
            if (a == 1) {
                loading.style.display = 'block';
                register_attend.style.display = 'none';
            } else {
                loading.style.display = 'none';
                register_attend.style.display = 'block';
            }
        });
    </script>
@stop
