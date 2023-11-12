@extends('layouts.default')
@section('title', 'Danh sách sinh viên')

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
    <div class="register_list search col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Danh sách sinh viên</li>
            </ol>
        </nav>
        <div>
            <div style="float: left;">
                <a class="btn_list_register" href="{{ route('teacher.register_list') }}">Danh sách sinh viên</a>
                <a class="invite" href="{{ route('teacher.register_wait') }}">Hàng chờ</a>
            </div>
            <form class="container" style="margin-bottom: 10px">
                <input placeholder="Nhập từ khóa muốn tìm kiếm" required="" pattern=".*\S.*" type="search" class="input invite" id="search">
                <span class="caret"></span>
            </form>
        </div>

        @if (count($dataStudentRegis)==0)
            <div>
                <h3>Chưa có sinh viên nào đăng kí đề tài của bạn</h3>
            </div>
        @else
        
        <table class="container">
            <tr>
                <th style="text-align: center">Tên sinh viên</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">MSSV</th>
                <th style="text-align: center">Đề tài tham gia</th>
                <th style="text-align: center">Chuyên ngành </th>
                <th style="text-align: center">Trạng thái </th>
                <th style="text-align: center">Lựa chọn</th>
            </tr>
        </table>
        <table class="container">
            @foreach ($dataStudentRegis as $item)
            <tr>
                <td>{{$item->stu_name}}</td>
                <td>{{$item->stu_email}}</td>
                <td>{{$item->MSSV}}</td>
                <td>{{$item->p_name}}</td>
                <td>{{$item->stu_major}}</td>
                <td>
                    @if ($item->stu_status == 4)
                        Đã có nhóm <br>
                        Nhóm:{{$item->group_id}}
                    @elseif ($item->stu_status == 3)
                        Đang tham gia nhóm
                    @elseif($item->stu_status == 2)
                        Chưa vào nhóm
                    @endif
                </td>
                <td>
                    <button class="invite"><a href="#">Xóa</a></button>
                    <button class="invite"><a href="#">Chỉnh sửa</a></button>
                    <button class="invite"><a href="#">Chuyển nhóm</a></button>
                </td>
            </tr>
            
            @endforeach
               
        </table>
        @endif

    </div>
@stop
