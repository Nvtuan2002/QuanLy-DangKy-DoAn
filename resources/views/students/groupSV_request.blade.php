@extends('layouts.default')
@section('title', 'Yêu cầu vào nhóm')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')
    <div class="groups_request col-lg-10">
        <img src="../img/background-primary.png" alt="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Nhóm của bạn > Yêu cầu vào nhóm</li>
            </ol>
        </nav>
        <div class="d-flex list_request_title">
            <h5 style="width: 141px">Thông tin</h5>
            <h5>Lựa chọn</h5>
        </div>
        <div>
            <div class="d-flex list_request">
                    <p>Hoàng Hải Long</p>
                    <i class="bi bi-box-arrow-up-right"></i>
                    <button class="accept">Duyệt</button>
                    <button class="reject">Từ chối</button>
            </div>
            <div class="d-flex list_request">
                    <p>Hoàng Hải Long</p>
                    <i class="bi bi-box-arrow-up-right"></i>
                    <button class="accept">Duyệt</button>
                    <button class="reject">Từ chối</button>
            </div>
            <div class="d-flex list_request">
                    <p>Hoàng Hải Long</p>
                    <i class="bi bi-box-arrow-up-right"></i>
                    <button class="accept">Duyệt</button>
                    <button class="reject">Từ chối</button>
            </div>
            <div class="d-flex list_request">
                    <p>Hoàng Hải Long</p>
                    <i class="bi bi-box-arrow-up-right"></i>
                    <button class="accept">Duyệt</button>
                    <button class="reject">Từ chối</button>
            </div>
            
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('student.groupSV') }}">Quay lại</a>
        </div>

    </div>
@stop
