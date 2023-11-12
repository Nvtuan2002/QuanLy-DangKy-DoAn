@extends('layouts.default')
@section('title', 'Liên hệ với sinh viên')

@section('header')
    @include('includes.header', [
        'name' => $dataTeacher->t_name,
        'img' => $dataTeacher->t_avt,
    ])
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

@endsection

@section('sidebar')
    @include('includes.sidebarTeacher')
@endsection

@section('content')
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Danh sách nhóm Chat</li>
            </ol>
        </nav>
        <select onchange="window.location.href=this.options[this.selectedIndex].value; "
            style="background-color: unset; border: none; outline: none; width: 11%;">
            @foreach ($dataGroup as $item)
                <option value="{{ route('teacher.handleChat', ['group_id' => $item->group_id]) }}">Nhóm số:
                    {{ $item->group_number }}</option>
            @endforeach

        </select>
    </div>


@stop
