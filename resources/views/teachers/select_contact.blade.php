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
        @if (count($dataGroup) == 0)
            <div>
                <h3>Chưa có sinh viên tạo nhóm</h3>
            </div>
        @else
            {{-- <select onchange="window.location.href=this.options[this.selectedIndex].value; "
                style="background-color: unset; border: none; outline: none; width: 11%;">
                @foreach ($dataGroup as $item)
                    <option value="{{ route('teacher.handleChat', ['group_id' => $item->group_id]) }}">Nhóm số:
                        {{ $item->group_number }}</option>
                @endforeach

            </select> --}}

            @foreach ($a as $item)
                <p>{{ $item->p_name }}</p>
                @foreach ($dataGroup as $item2)
                    @if ($item->p_id == $item2->p_id)
                    <a href="{{ route('teacher.handleChat', ['group_id' => $item2->group_id]) }}"> + Nhóm số:
                        {{ $item2->group_number }}</a>
                        <br>
                    @endif
                @endforeach
            @endforeach
        @endif

    </div>


@stop
