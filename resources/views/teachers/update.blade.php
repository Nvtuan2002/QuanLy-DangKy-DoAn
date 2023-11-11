@extends('layouts.default')
@section('title', 'Cập nhật đồ án')

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
                <li class="breadcrumb-item active" aria-current="page">Cập nhật đồ án </li>
            </ol>
        </nav>
        <div class="search update">
            <div>
                <div style="float: left;">
                    <a class="btn_list_register">Đồ án hiện có</a>
                    <a class="invite" href="{{ route('teacher.update_new') }}">Tạo đồ án mới</a>
                </div>
                <form class="container" style="margin-bottom: 10px">
                    <input placeholder="Nhập từ khóa muốn tìm kiếm" required="" pattern=".*\S.*" type="search"
                        class="input invite" id="search">
                    <span class="caret"></span>
                </form>
            </div>
            <table class="container">
                <tr>
                    <th style="text-align: center">STT</th>
                    <th style="text-align: center">Tên đề tài</th>
                    <th style="text-align: center">Yêu cầu</th>
                    <th style="text-align: center">Chuyên ngành</th>
                    <th style="text-align: center">Số lượng thành viên</th>
                    <th style="text-align: center">Lựa chọn</th>
                </tr>

            </table>
            <table class="container">
                @foreach ($dataProject as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->p_name}}</td>
                    <td>{{$item->p_request}}</td>
                    <td>{{$item->p_major}}</td>
                    <td>{{$item->p_quantity}}</td>
                    <td>
                        <button class="invite">Chỉnh sửa</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
