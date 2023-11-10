@extends('layouts.default')
@section('title', 'Xem thông tin nhóm')

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
    <div class="groups_detail col-lg-10" style="position: relative;">
        {{-- <img class="img-background" src="../img/background-primary.png" alt="" style="position: absolute;"> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Nhóm của bạn > Xem thông tin nhóm</li>
            </ol>
        </nav>
        <div class="me-5" style="float: right;">
            <button class="cancel mb-4 ">Rời nhóm</button>
        </div>
        <div class="d-flex" style="clear: both;">
            <div class="p-3"
                style="margin:0 auto; width: 60% ;box-shadow: 0px 7px 4px 0px rgba(0, 0, 0, 0.25); border: 1px solid rgba(0, 0, 0, 0.20);">
                <ul class="row">
                    <p class="col-4">Ảnh Đại diện</p>
                    <img class="col-8" src="{{asset('./img/avatar-groups.png')}}" alt="">
                </ul>
                <ul class="row">
                    <p class="col-4">Tên nhóm: </p>
                    <p class="col-8">{{$infoGroup[0]->group_name}}</p>
                </ul>
                <ul class="row">
                    <p class="col-4">Tên đề tài: </p>
                    <p class="col-8">{{$infoGroup[0]->p_name}}</p>
                </ul>
                <ul class="row">
                    <p class="col-4">Giảng Viên: </p>
                    <p class="col-8">{{$infoGroup[0]->t_name}}</p>
                </ul>
                <ul class="row">
                    <p class="col-4">Thành viên nhóm: </p>
                    <div class="col-8">
                        @foreach ($infoGroup as $item)
                            
                        <ul class="row d-flex align-items-center">
                            <img class="col-6" src="{{asset('./img/avatar.png')}}" alt="">
                            <li class="col-6">{{$item->stu_name}}</li>
                        </ul>
                        @endforeach
                       
                    </div>
                </ul>
                <ul class="row">
                    <p class="col-4">Nhóm số: </p>
                    <p class="col-8">{{$infoGroup[0]->group_number}}</p>
                </ul>
                <ul class="row">
                    <p class="col-4">Điểm số trung bình: </p>
                    <p class="col-8">10</p>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('student.groupSV') }}">Quay lại</a>
        </div>

    </div>
@stop