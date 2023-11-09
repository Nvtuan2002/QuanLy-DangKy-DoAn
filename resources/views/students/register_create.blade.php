@extends('layouts.default')
@section('title', 'Tạo nhóm mới')


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
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Đăng kí đồ án > Tham gia nhóm > Lựa chọn nhóm > Tạo
                    nhóm mới</li>
            </ol>
        </nav>
        <div class="register_create container">
            <h5>Giảng viên: Nguyễn Thành Trung</h5>
            <form method="POST" action="{{route('student.handle_create')}}" enctype="multipart/form-data">
                @csrf
                <label for="">Tên nhóm trưởng: </label>
                <input class="invite" type="text" name="group_leader"> <br>
                <label for="">Yêu cầu: </label>
                <input class="invite" type="text" name="group_request"> <br>
                <label for="">Tên đề tài: </label>
                <input class="invite" type="text" name="p_name" value="{{$getProjectName}}"><br>
                <label for="">Số thành viên: </label>
                <input class="invite" type="text" name="group_quantity"><br>
                <label for="">Tên nhóm: </label>
                <input class="invite" type="text" name="group_name"><br>
                <label for="">Nhóm số: </label>
                <input class="invite" type="text" name="group_number" value="{{$nextNumber}}"><br>
                <label for="">Ảnh đại diện: </label>
                <input type="file" id="avatarInput" accept="image/*" placeholder="" name="group_avt">
                {{-- <div class="avatar-preview">
                    <img id="previewImage" src="{{asset('https://images.unsplash.com/photo-1576267423445-b2e0074d68a4?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')}}" alt="">
                </div> --}}

                <button type="submit">Tạo nhóm</button>
            </form>
        </div>
        <div class="d-flex justify-content-around" style="clear: both">
            <div class="d-flex justify-content-center mt-5">
                <a class="cancel px-5" href="{{ route('student.register_attend') }}">Quay lại</a>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a class="cancel px-5" href="{{ route('student.register_create') }}">Tạo nhóm</a>
            </div>
        </div>
    </div>
    <script>
        function handleFileSelect() {
            const fileInput = document.getElementById('avatarInput');
            const previewImage = document.getElementById('previewImage');

            fileInput.addEventListener('change', function() {
                const file = fileInput.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                } else {
                    previewImage.src = 'https://images.unsplash.com/photo-1576267423445-b2e0074d68a4?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
                }
            });
        }

        handleFileSelect();
    </script>
@stop
