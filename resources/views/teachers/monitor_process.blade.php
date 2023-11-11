@extends('layouts.default')
@section('title', 'Theo dõi tiến trình')

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
    <div class="register monitor col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Theo dõi tiến trình</li>
            </ol>
        </nav>
        <table class="container">
                <tr>
                    <th style="text-align: center">Nhóm số</th>
                    <th style="text-align: center">Tên nhóm</th>
                    <th style="text-align: center">Nhóm trưởng</th>
                    <th style="text-align: center">Đề tài đăng ký</th>
                    <th style="text-align: center">Số lượng thành viên</th>
                    <th style="text-align: center">Lựa chọn</th>
                </tr>

        </table>
        <table class="container">
            @foreach ($dataGroup as $item)
            <tr>
                <td>{{$item->group_number}}</td>
                <td>{{$item->group_name}}</td>
                <td>{{$item->group_leader}}</td>
                <td>{{$item->p_name}}</td>
                <td>{{$item->group_quantity}}</td>
                <td><button class="invite"><a href="{{ route('teacher.monitor_group',['group_id' => $item->group_id]) }}">Theo dõi nhóm</a></button></td>
            </tr>
            @endforeach
               
        </table>

    </div>
@stop
