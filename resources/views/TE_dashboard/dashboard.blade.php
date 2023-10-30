@extends('layouts.default')
@section('content')
    <div class="home">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Tổng quan</li>
            </ol>
        </nav>
        <div class="container">
            <div class="info row">
                <div class="col-3 text-center">
                    <img src="./img/carbon_summary-kpi.png" class="" alt="Icon Teacher">
                    <h6 class="card-title">Tổng số sinh viên đăng ký</h6>
                    <p>100</p>
                </div>
                <div class="col-3 text-center">
                    <img src="./img/codicon_project.png" class="" alt="Icon Profile">
                    <h6 class="card-title">Tổng số đề tài đồ án</h6>
                    <p>100</p>
                </div>
                <div class="col-3 text-center">
                    <img src="./img/mdi_teacher.png" class="" alt="Icon Finance">
                    <h6 class="card-title">Tổng số giảng viên</h6>
                    <p>100</p>
                </div>
                <div class="col-3 text-center">
                    <img src="./img/mdi_teacher.png" class="" alt="Icon Finance">
                    <h6 class="card-title">Tổng số học sinh không đủ điều kiện </h6>
                    <p>100</p>
                </div>
                <div class="col-3 text-center">
                    <img src="./img/uil_calender.png" class="" alt="Icon Finance">
                    <h6 class="card-title">Lịch báo cáo thống kê</h6>
                    <p>100</p>
                </div>
            </div>
            <div class="about d-flex flex-row justify-content-around">
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <img src="./img/Frame 168.png" class="" alt="Icon Build">
                    <div class="des d-flex flex-column align-self-start">
                        <h5 class="card-title">Giới thiệu </h5>
                        <h5 class="card-title">Phenikaa là một trong những trường mới được thành lập trong vòng vài năm qua
                        </h5>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <img src="./img/Frame 168.png" class="" alt="Icon Event">
                    <div class="des d-flex flex-column align-self-start">
                        <h5 class="card-title">Tin tức </h5>
                        <h5 class="card-title">-Thông báo chuyển đổi điểm cho K15 </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
