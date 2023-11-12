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
                <li class="breadcrumb-item active" aria-current="page">Liên hệ với sinh viên ></li>
            </ol>
        </nav>
        <div class="container row justify-content-around">
            <div class="contact col-lg-8 col-sm-12">
                <form action="" method="post">
                    @csrf
                    <div class="messenger-header">
                        {{-- <select name="" id="" style="background-color: unset; border: none; outline: none;">
                        @foreach ($dataGroup as $item)
                        <option value="{{$item->group_id}}">Nhóm {{$item->group_number}} </option>
                        @endforeach
                    </select>
                    <button type="submit"><a href="{{route('teacher.handleChat',['group_id'=>$item->group_id])}}">Truy cập</a></button> --}}

                        <select onchange="window.location.href=this.options[this.selectedIndex].value;"
                            style="background-color: unset; border: none; outline: none;">
                            @foreach ($dataGroup as $item)
                                <option value="{{ route('teacher.handleChat', ['group_id' => $item->group_id]) }}">Nhóm số:
                                    {{ $item->group_number }}</option>
                            @endforeach

                        </select>

                    </div>
                </form>
                <div class="messenger-body">
                    @foreach ($dataMessage as $item)
                        @if ($item->chat_sender == 1)
                            <div style="display:flex">
                                <img src="{{ asset('./img/avatar.png') }}" alt="">
                                <span class="message" style=""> {{ $item->chat_message }} </span>
                            </div>
                        @else
                        <div style="display:flex;justify-content:flex-end">
                            <span class="message" style=" background-color:red"> {{ $item->chat_message }} </span>
                        </div>
                        @endif
                    @endforeach

                </div>
                <div class="messenger-footer d-flex justify-content-center">
                    <form action="{{route('teacher.handlePostMessage')}}" method="post" style="width: 95%;">
                        @csrf
                        <label for="image-upload" class="attachment-icon">
                            <i class="bi bi-card-image"></i>
                        </label>
                        <input id="image-upload" type="file" class="attachment-input" style="display: none" accept="image/*">
                        <label for="file-upload" class="attachment-icon">
                            <i class="bi bi-paperclip"></i>
                        </label>
                        <input id="file-upload" type="file" class="attachment-input" style="display: none">
                        <input class="invite" type="text" class="input-box" placeholder="Nhập tin nhắn..." name="message">
                        <button class="" type="submit"><i class="bi bi-send"></i></button>
                    </form>
                </div>
            </div>
            <button class="contact-hidden" data-bs-target="#flush-collapseOne5" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="flush-collapseOne"><i
                    class="bi bi-arrow-down-right-square"></i></button>
            <div id="flush-collapseOne5" class="accordion-collapse collapse col-lg-3 col-sm-12"
                data-bs-parent="#accordionFlushExample">
                <div class="your-message">
                    <div class="avatar-preview">
                        <img id="previewImage"
                            src="{{ asset('https://scontent.fhan17-1.fna.fbcdn.net/v/t1.15752-9/385533421_871168748062380_2297325553142698699_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=Gknv9e23wqcAX-scTrX&_nc_ht=scontent.fhan17-1.fna&oh=03_AdRRXo6Arrs3SrPnu3_fdbR9VvlAbCuin7cdjshNo1fIuw&oe=65687F37') }}"
                            alt="">
                    </div>
                    <h5 class="text-center">Nhóm:{{$dataGroup1[0]->group_number}}</h5>
                    <h5 class="text-center">{{$dataGroup1[0]->group_name}}</h5>
                    <a style="margin-left: 20px;" href="{{ route('student.infoStudent') }}"><i
                            class="bi bi-person-square"></i>Trang
                        cá nhân</a> <br>
                    <div class="accordion" id="" style="margin-top: 10px; margin-left:20px;">
                        <button class="btn-expand" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne4" aria-expanded="false" aria-controls="flush-collapseOne">
                            File Phương tiện, file, liên kết
                        </button>
                        <div id="flush-collapseOne4" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <button class="button-invisible"><i class="bi bi-images"></i>File phương tiện</button>
                            <button class="button-invisible"><i class="bi bi-file-earmark-fill"></i>File</button>
                            <button class="button-invisible"><i class="bi bi-link-45deg"></i>Liên két</button>
                        </div>
                    </div> <br>
                    <div class="accordion" id="" style="margin-left: 20px;">
                        <button class="btn-expand" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne">
                            Tùy chỉnh đoạn chat Chat
                        </button>
                        <div id="flush-collapseOne2" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample1">
                            <button class="button-invisible"><i class="bi bi-palette-fill"></i>Đổi chủ đề</button>
                            <button class="button-invisible"><i class="bi bi-emoji-heart-eyes-fill"></i>Thay đổi biểu tượng
                                cảm xúc</button>
                            <button class="button-invisible"><i class="bi bi-snapchat"></i>Chỉnh sửa biệt danh</button>
                        </div>
                    </div> <br>
                    <div class="accordion" id="" style="margin-left: 20px;">
                        <button class="btn-expand" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne3" aria-expanded="false" aria-controls="flush-collapseOne">
                            Thành viên nhóm
                        </button>
                        <div id="flush-collapseOne3" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample2">
                            @foreach ($dataMember as $item)
                            <button class="button-invisible"><i class="bi bi-people-fill"></i>{{$item->stu_name}}</button>
                            @endforeach
                            {{-- <button class="button-invisible"><i class="bi bi-people-fill"></i>Nguyễn Viết Tuấn</button> --}}
                        </div>
                    </div> <br>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("image-upload").addEventListener("change", function(event) {
            const selectedImage = event.target.files[0];
            if (selectedImage) {
                console.log("Đã tải lên ảnh:", selectedImage);
            }
        });

        document.getElementById("file-upload").addEventListener("change", function(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                console.log("Đã tải lên tệp đính kèm:", selectedFile);
            }
        });
    </script>
@stop
