@extends('layouts.default')
@section('content')
    <div class="login">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
            </ol>
        </nav>
        <div class="container">
            <div class="info d-flex flex-row justify-content-around">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="./img/noto_teacher.png" class="" alt="Icon Teacher">
                    <h5 class="card-title">Thông tin giảng viên</h5>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="./img/home_profile.png" class="" alt="Icon Profile">
                    <h5 class="card-title">Thông tin cá nhân</h5>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="./img/home_finance.png" class="" alt="Icon Finance">
                    <h5 class="card-title">Tài chính</h5>
                </div>
            </div>
            <div class="about d-flex flex-row justify-content-around">
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <img src="./img/home_build_phenikaa.png" class="" alt="Icon Build">
                    <div class="des d-flex flex-column align-self-start">
                        <h5 class="card-title">Giới thiệu </h5>
                        <h5 class="card-title">Phenikaa là một trong những trường mới được thành lập trong vòng vài năm qua
                        </h5>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <img src="./img/home_event.png" class="" alt="Icon Event">
                    <div class="des d-flex flex-column align-self-start">
                        <h5 class="card-title">Tin tức </h5>
                        <h5 class="card-title">-Chào tân 2023 chính thức khởi tranh </h5>
                    </div>
                </div>
            </div>
            <div class="popular d-flex justify-content-around align-items-center">
               <img src="./img/home_event.png" class="" alt="Icon Event">
               <img src="./img/home_event.png" class="" alt="Icon Event">
               <img src="./img/home_event.png" class="" alt="Icon Event">
               <img src="./img/home_event.png" class="" alt="Icon Event">
               <img src="./img/home_event.png" class="" alt="Icon Event">
            </div>
        </div>
    </div>
@stop
