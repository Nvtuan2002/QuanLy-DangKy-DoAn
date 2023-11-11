@extends('layouts.default')
@section('title', 'Tạo nhóm mới')

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
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> Cập nhật đồ án > Tạo đồ án mới</li>
            </ol>
        </nav>
        <div class="register_create container update_new">
            <h5>Giảng viên: {{$dataTeacher->t_name}}</h5>
            <form method="POST" action="{{route('teacher.handleCreate')}}" enctype="multipart/form-data">
                @csrf
                <label for="">Tên giảng viên:</label>
                <input class="invite" type="text" value="{{$dataTeacher->t_name}}"> <br>
                <label for="">Yêu cầu: </label>
                <input class="invite" type="text" name="p_request"> <br>
                <label for="">Tên đề tài: </label>
                <input class="invite" type="text" name="p_name"><br>
                <label for="">Số lượng thành viên: </label>
                <input class="invite" type="text" name="p_quantity"><br>
                <label for="">Chuyên ngành: </label>
                <input class="invite" type="text" name="p_major"><br>
                <button type="submit">Tạo đồ án</button>
            </form>
        </div>
        <div class="d-flex justify-content-around" style="clear: both">
            <div class="d-flex justify-content-center mt-5">
                <a class="cancel px-5" href="{{ route('teacher.update') }}">Quay lại</a>
            </div>
        </div>
    </div>
@stop
