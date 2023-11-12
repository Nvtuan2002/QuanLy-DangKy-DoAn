@extends('layouts.default')
@section('title', 'Liên hệ với sinh viên')

@section('header')
    @include('includes.header',[
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
    
                    <select onchange="window.location.href=this.options[this.selectedIndex].value;" style="background-color: unset; border: none; outline: none;">
                        @foreach ($dataGroup as $item)
                        <option value="{{ route('teacher.handleChat',['group_id'=>$item->group_id]) }}">Nhóm số: {{$item->group_number}}</option>
                            
                        @endforeach
                        
                    </select>
                    
            
@stop
