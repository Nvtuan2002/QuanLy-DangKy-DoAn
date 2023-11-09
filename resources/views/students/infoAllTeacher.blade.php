@extends('layouts.default')
@section('title', 'Tất cả giảng viên')

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
    <div class="infoAllTeacher col-lg-10">
        {{-- <img src="../img/background-primary.png" alt=""> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Tất cả giảng viên </li>
            </ol>
        </nav>
        <div class="text-center">
            <h5 style="margin-bottom: 20px;">Khoa công Nghệ Thông tin</h5>
            <div class="row">
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Nguyễn Thành Trung</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h5 style="margin-bottom: 20px;">Khoa Dược</h5>
            <div class="row">
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h5 style="margin-bottom: 20px;">Khoa Kinh tế</h5>
            <div class="row">
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
                <div class="d-flex justify-content-center col-lg-6 col-sm-6">
                    <img src="{{asset('./img/avatar.png')}}" alt="">
                    <a href="{{ route('student.infoTeacher') }}">Hoàng Hải Long</a>
                </div>
            </div>
        </div>
    </div>
@stop
