@extends('layouts.default')
@section('title', 'Tổng quan')

@section('header')
    @include('includes.header',[
        'name' => $dataTeacher->t_name,
        'img' => $dataTeacher->t_avt,

    ])
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('sidebar')
    @include('includes.sidebarTeacher')
@endsection

@section('content')
    
<div class="home te_dashboard col-lg-10">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Tổng quan</li>
        </ol>
    </nav>
    <div class="container">
        <div class="info row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                <div style="height: 130px;">
                    <img src="{{asset('./img/carbon_summary-kpi.png')}}" class="" alt="Icon Teacher">
                    <h5 class="card-title h5_dashboard">Tổng số sinh viên đăng ký</h5>
                    <p>{{$totalStudentRegis[0]->total}}</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                <div style="height: 130px;">
                    <img src="{{asset('./img/codicon_project.png')}}" class="" alt="Icon Profile">
                    <h5 class="card-title h5_dashboard">Tổng số đề tài đồ án</h5>
                    <p>{{$totalProject[0]->total}}</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                <div style="height: 130px;">
                    <img src="{{asset('./img/mdi_teacher.png')}}" class="" alt="Icon Finance">
                    <h5 class="card-title h5_dashboard">Tổng số giảng viên</h5>
                    <p>{{$totalTeacher[0]->total}}</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                <div style="height: 130px;">
                    <img src="{{asset('./img/mdi_teacher.png')}}" class="" alt="Icon Finance">
                    <h5 class="card-title h5_dashboard">Tổng số học sinh không đủ điều kiện </h5>
                    <p>{{$totalStudentNotRegis[0]->total}}</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center">
                <div style="height: 130px;">
                    <img src="{{asset('./img/uil_calender.png')}}" class="" alt="Icon Finance">
                    <h5 class="card-title h5_dashboard">Lịch báo cáo thống kê</h5>
                    <p>100</p>
                </div>
            </div>
        </div>
        <div class="about row justify-content-around">
            <div class="d-flex col-xl-6 col-lg-5">
                <img src="{{asset('https://phenikaa-uni.edu.vn:3600/phena/vi/posts/10295597929699653797897882540504163615306412o_20210412050145.jpg')}}" class="" alt="Icon Build">
                <div class="des d-flex flex-column align-self-start">
                    <h5 class="card-title">Giới thiệu </h5>
                    <h5 class="card-title">Phenikaa là một trong những trường mới được thành lập trong vòng vài năm qua
                    </h5>
                    <a href="">Xem chi tiết</a>
                </div>
            </div>
            <div class="d-flex col-xl-6 col-lg-5">
                <img src="{{asset('./img/Frame 168.png')}}" class="" alt="Icon Event">
                <div class="des d-flex flex-column align-self-start">
                    <h5 class="card-title">Tin tức </h5>
                    <h5 class="card-title">-Thông báo chuyển đổi điểm cho K15 </h5>
                    <a href="">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

