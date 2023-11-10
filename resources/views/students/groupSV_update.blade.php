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
                <p class="fw-bold">Chào mừng, {{$studentData->stu_name}}</p>
                <p class="">Thông báo của giảng viên: </p>
                <p class="">{{$dataNotiGroup[0]->created_at}} : {{$dataNotiGroup[0]->rate_noti }}</p>
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

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                        <input type="text" placeholder="Nhập tiêu đề" name="file_title">
                                        <input type="file" class="form-control" id="dokumen" required="" name="file_upload">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn comeback" data-bs-dismiss="modal">Quay
                                            lại</button>
                                        <button type="submit" class="btn request">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <ul>
                    @foreach ($dataFile as $item)
                    <li>
                        <div style="display: flex; justify-content:space-between">
                            
                            <a href="{{asset('storage/file/'.$item->file)}}" target=”_blank” > <i class="bi bi-file-earmark-arrow-up-fill"></i>{{$item->file}}</a>
                            <a href="{{route('student.dowload',['file_name' => $item->file])}}"><i class="fa-solid fa-download"></i>Tải xuống</a>
                            <p>{{$item->file_title}}</p>
                            <p>{{$item->created_at}}</p>
                            

                        </div>
                    </li>
                        
                    @endforeach
                    
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('student.groupSV') }}">Quay lại</a>
        </div>

    </div>
@stop
