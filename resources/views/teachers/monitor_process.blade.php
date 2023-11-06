@extends('layouts.default')
@section('title', 'Theo dõi tiến trình')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('sidebar')
    @include('includes.sidebarTeacher')
@endsection

@section('content')
    <div class="register monitor col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Theo dõi tiến trình</li>
            </ol>
        </nav>
        <table class="container">
                <tr>
                    <th style="text-align: center">Nhóm số</th>
                    <th style="text-align: center">Tên nhóm</th>
                    <th style="text-align: center">Nhóm trưởng</th>
                    <th style="text-align: center">Đề tài đăng ký</th>
                    <th style="text-align: center">Tiến độ làm việc</th>
                    <th style="text-align: center">Lựa chọn</th>
                </tr>

        </table>
        <table class="container">
                <tr>
                    <td>Nhóm số 4</td>
                    <td>Team vô địch</td>
                    <td>Hoàng Hải Long</td>
                    <td>Website Facebôk</td>
                    <td>Web đánh giá</td>
                    <td><button class="invite"><a href="{{ route('teacher.monitor_group') }}">Theo dõi nhóm</a></button></td>
                </tr>
                <tr>
                    <td>Nhóm số 4</td>
                    <td>Team vô địch</td>
                    <td>Hoàng Hải Long</td>
                    <td>Website Youte</td>
                    <td>Web đánh giá</td>
                    <td><button class="invite"><a href="{{ route('teacher.monitor_group') }}">Theo dõi nhóm</a></button></td>
                </tr>
                <tr>
                    <td>Nhóm số 4</td>
                    <td>Team vô địch</td>
                    <td>Hoàng Hải Long</td>
                    <td>Website Facebôk</td>
                    <td>Web đánh giá</td>
                    <td><button class="invite"><a href="{{ route('teacher.monitor_group') }}">Theo dõi nhóm</a></button></td>
                </tr>
        </table>

    </div>
@stop
