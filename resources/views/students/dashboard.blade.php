@extends('layouts.default')
@section('title', 'Trang chủ')

@section('header')
    @include('includes.header', [
        'name' => $studentData->stu_name,
        'img' => $studentData->stu_avt
    ])
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')

    <style>
        .event img {
            width: 163px;
            height: 178px;
            object-fit: cover;
        }
        
    </style>

    <div class="home col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
            </ol>
        </nav>
        <div class="container">
            <div class="info row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                    <div style="height: 130px;">
                        <img src="{{ asset('img/noto_teacher.png ') }}" class="dashboard_info_img" alt="Icon Teacher">
                        <h5 class="card-title h5_dashboard"><a href="{{ route('student.infoAllTeacher') }}">Thông tin giảng
                                viên</a>
                        </h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                    <div style="height: 130px;">
                        <img src="{{ asset('img/home_profile.png') }}" class="dashboard_info_img" alt="Icon Profile">
                        <h5 class="card-title h5_dashboard"><a href="{{ route('student.infoStudent') }}">Thông tin cá
                                nhân</a>
                        </h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                    <div style="height: 130px;">
                        <img src="{{ asset('img/home_finance.png') }}" class="dashboard_info_img" alt="Icon Finance">
                        <h5 class="card-title h5_dashboard">Tài chính</h5>
                    </div>
                </div>
            </div>
            <div class="about d-flex justify-content-around">
                <div class="row col-xl-6 col-lg-6">
                    <img src="{{ asset('img/home_build_phenikaa.png') }}" class="col-lg-6 col-sm-6" alt="Icon Build">
                    <div class="des row align-self-start col-lg-6 col-sm-6">
                        <h5 class="card-title h5_dashboard">Giới thiệu </h5>
                        <h5 class="card-title h5_dashboard">Phenikaa là một trong những trường mới được thành lập trong vòng
                            vài năm qua
                        </h5>
                    </div>
                </div>
                <div class="row col-xl-6 col-lg-6">
                    <img src="{{ asset('img/home_event.png') }}" class="col-lg-6 col-sm-6" alt="Icon Event">
                    <div class="des row align-self-start col-lg-6 col-sm-6">
                        <h5 class="card-title h5_dashboard">Tin tức </h5>
                        <h5 class="card-title h5_dashboard">Chào tân 2023 chính thức khởi tranh </h5>
                    </div>
                </div>
            </div>
            <div class="event row justify-content-between text-center" style="margin-top: 30px;">
                <div class="col-lg-3 col-xl-3 col-sm-6">
                    <img src="{{ asset('https://phenikaa-uni.edu.vn:3600/pu/vi/posts/thumbnail-2023-12.jpg') }}"
                        class="" alt="Icon Event">
                </div>
                <div class="col-lg-3 col-xl-3 col-sm-6">
                    <img src="{{ asset('https://phenikaa-uni.edu.vn:3600/pu/vi/posts/thumbnail-2023-13.jpg') }}" class="" alt="Icon Event">
                </div>
                <div class="col-lg-3 col-xl-3 col-sm-6">
                    <img src="{{ asset('https://phenikaa-uni.edu.vn:3600/pu/vi/posts/3937242262937772701537842393408118834103876n.jpg') }}" class="" alt="Icon Event">
                </div>
                <div class="col-lg-3 col-xl-3 col-sm-6">
                    <img src="{{ asset('https://phenikaa-uni.edu.vn:3600/pu/vi/posts/111.jpg') }}" class="" alt="Icon Event">
                </div>
            </div>
        </div>
    </div>
@endsection
