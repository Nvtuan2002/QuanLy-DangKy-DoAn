@extends('layouts.default')
@section('title', 'Cập nhật tiến độ nhóm')

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
    <div class="groups col-lg-10">
        {{-- <img src="../img/background-primary.png" alt=""> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Nhóm của bạn > Cập nhật tiến độ nhóm</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <div class="alert">
                <p class="fw-bold">Chào mừng, Hoàng Hải Long</p>
                <p class="">Thông báo của giảng viên: </p>
                <p class="">15/10/2023 9:54PM: Nhóm cần hoàn thành chi tiết hơn</p>
            </div>
            <div class="d-flex flex-column me-5 align-items-end">
                <button class="cancel mb-4 ">Rời nhóm</button>
            </div>
        </div>
        <div class="mx-3" style=" border: 1px solid rgba(0, 0, 0, 0.20);
        background: #F9F3CC; padding: 10px;">
            <div class="d-flex justify-content-between">
                <p class="fw-bold">File của bạn</p>
                <div>
                    <button class="btn-invisible">Truy Cập</button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-invisible btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Thêm File mới
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="top: 20vh">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm file</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="file" class="form-control" id="dokumen" required="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn comeback" data-bs-dismiss="modal">Quay
                                        lại</button>
                                    <button type="button" class="btn request">Cập nhật</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <ul>
                    <li><i class="bi bi-file-earmark-arrow-up-fill"></i>longhoang.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up-fill"></i>longhoang.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up-fill"></i>longhoang.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up-fill"></i>longhoang.pdf</li>
                    <li><i class="bi bi-file-earmark-arrow-up-fill"></i>longhoang.pdf</li>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('student.groupSV') }}">Quay lại</a>
        </div>

    </div>
@stop
