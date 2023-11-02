@extends('layouts.default')
@section('title', 'Trang chủ')
@section('content')
    <div class="home col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
            </ol>
        </nav>
        <div class="container">
            <div class="info row">
                <div class="col-xl-4 col-lg-4 text-center d-flex justify-content-center">
                    <div style="height: 130px;">
                        <img src="./img/noto_teacher.png" class="" alt="Icon Teacher">
                        <h5 class="card-title h5_dashboard"><a href="{{ route('infoAllTeacher') }}">Thông tin giảng viên</a>
                        </h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 text-center d-flex justify-content-center">
                    <div style="height: 130px;">
                        <img src="./img/home_profile.png" class="" alt="Icon Profile">
                        <h5 class="card-title h5_dashboard"><a href="{{ route('infoStudent') }}">Thông tin cá nhân</a>
                        </h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 text-center d-flex justify-content-center">
                    <div style="height: 130px;">
                        <img src="./img/home_finance.png" class="" alt="Icon Finance">
                        <h5 class="card-title h5_dashboard">Tài chính</h5>
                    </div>
                </div>
            </div>
            <div class="about d-flex flex-row justify-content-around">
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <img src="./img/home_build_phenikaa.png" class="" alt="Icon Build">
                    <div class="des d-flex flex-column align-self-start">
                        <h5 class="card-title h5_dashboard">Giới thiệu </h5>
                        <h5 class="card-title h5_dashboard">Phenikaa là một trong những trường mới được thành lập trong vòng
                            vài năm qua
                        </h5>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <img src="./img/home_event.png" class="" alt="Icon Event">
                    <div class="des d-flex flex-column align-self-start">
                        <h5 class="card-title h5_dashboard">Tin tức </h5>
                        <h5 class="card-title h5_dashboard">Chào tân 2023 chính thức khởi tranh </h5>
                    </div>
                </div>
            </div>
            <div class="popular d-flex justify-content-around" style="margin-top: 50px;">
                <img src="./img/home_event.png" class="" alt="Icon Event">
                <img src="./img/home_event.png" class="" alt="Icon Event">
                <img src="./img/home_event.png" class="" alt="Icon Event">
                <img src="./img/home_event.png" class="" alt="Icon Event">
                <img src="./img/home_event.png" class="" alt="Icon Event">
            </div>
        </div>
    </div>
@stop
