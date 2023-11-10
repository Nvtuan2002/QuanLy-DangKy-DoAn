@extends('layouts.default')
@section('title', 'Chỉnh sửa thông tin cá nhân')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('header')
    @include('includes.header', [
        'name' => $studentData->stu_name,
        'img' => $studentData->stu_avt,
    ])
@endsection

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')
    <form class="form-infoS" action="{{ route('student.updateInfoStudent') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT') --}}
        <div class="groups col-lg-10" style="margin: 0 auto; margin-top: 15px;">
            {{-- <img src="../img/background-primary.png" alt=""> --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa thông tin cá nhân</li>
                </ol>
            </nav>
            <div class="text-center">
                <div class="info_img">
                    <input type="file" id="file-input" name="img_change" style="display: none">
                    <label for="file-input">
                        <img src="{{ asset('storage/image/' . $studentData->stu_avt) }}" alt="" id="image"
                            name="stu_avt">
                    </label>
                </div>
                <h5
                    style="margin-top: 10px; background: #8EACCD; padding: 3px 3px; display:inline-block; border-radius: 5px;">
                    {{ $studentDataDetail[0]->stu_name }}</h5>
            </div>
            <div class="row justify-content-evenly" style="margin: 30px 0px; ">
                <div class="col-5" style=" padding:unset; border: 1px solid rgb(106, 89, 89); ">

                    <h4 class="">Thông tin cá nhân</h4>
                    <div class="d-flex flex-column align-item-end" style="">
                        <textarea name="" id="js-textarea" cols="10" rows="10"
                            style="outline: none; border: none; width: 100%; height: 90px; padding: 10px; color:black" disabled>{{ $studentDataDetail[0]->stu_desc }}</textarea>
                        <i class="bi bi-pencil-square" role="button" id="edit-textarea" style="text-align: end;"></i>
                        <i class="fa-solid fa-paper-plane" type="submit" id="send-textarea"
                            style="display: none; text-align: end; margin: 0.5rem;"></i>
                    </div>

                </div>
                <div class="col-5" style="border: 1px solid rgb(106, 89, 89);">
                    <h4>Kỹ năng cá nhân</h4>
                    <div class="row" style="">
                        @foreach ($studentDataDetail as $item)
                            <div class="col-6 text-start">
                                <label class="ms-3">{{ $item->stu_skill }}</label>
                                <div class="progress col-9" role="progressbar" aria-label="Info example" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info text-dark"
                                        style="width: {{ $item->stu_skill_detail }}%">
                                        {{ $item->stu_skill_detail }}%</div>
                                </div>
                            </div>
                        @endforeach
                        <i class="bi bi-pencil-square text-end" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                        <!-- Modal -->
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
                                        <div style="text-align: start; margin-bottom: 10px;">
                                            <label for="">Kỹ năng</label>
                                            <input type="text" style="outline: none; width: 50%;" placeholder="Giao tiếp">
                                            <label for="">tỷ lệ (%)</label>
                                            <input type="text" style="outline: none; width: 20%;">
                                        </div>
                                        <div style="text-align: start; margin-bottom: 10px;">
                                            <label for="">Kỹ năng</label>
                                            <input type="text" style="outline: none; width: 50%;" placeholder="Giao tiếp">
                                            <label for="">tỷ lệ (%)</label>
                                            <input type="text" style="outline: none; width: 20%;">
                                        </div>
                                        <div style="text-align: start; margin-bottom: 10px;">
                                            <label for="">Kỹ năng</label>
                                            <input type="text" style="outline: none; width: 50%;" placeholder="Giao tiếp">
                                            <label for="">tỷ lệ (%)</label>
                                            <input type="text" style="outline: none; width: 20%;">
                                        </div>
                                        <div style="text-align: start; margin-bottom: 10px;">
                                            <label for="">Kỹ năng</label>
                                            <input type="text" style="outline: none; width: 50%;" placeholder="Giao tiếp">
                                            <label for="">tỷ lệ (%)</label>
                                            <input type="text" style="outline: none; width: 20%;">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn comeback" data-bs-dismiss="modal">Quay
                                            lại</button>
                                        {{-- <button type="submit" class="btn request">Cập nhật</button> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gy-3" style="">
                <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                    <div style="width: 85%; text-align: start;">
                        <label for="" style="width: 100px;">Họ và tên: </label>
                        <input type="text" value="{{ $studentDataDetail[0]->stu_name }}" disabled style="color: black">
                    </div>


                </div>
                <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                    <div style="width: 85%; text-align: start;">
                        <label for="" style="width: 100px;">Số điện thoại: </label>
                        <input type="text" value="0{{ $studentDataDetail[0]->stu_phone }}" disabled
                            style="color: black">
                    </div>

                </div>
                <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                    <div style="width: 85%; text-align: start;">
                        <label for="" style="width: 100px;">Email: </label>
                        <input type="text" value="{{ $studentDataDetail[0]->stu_email }}" disabled
                            style="color: black">
                    </div>

                </div>
                <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                    <div style="width: 85%; text-align: start;">
                        <label for="" style="width: 100px;">Ngày Sinh: </label>
                        <input type="date" value="{{ $studentDataDetail[0]->stu_born }}" disabled
                            style="color: black">
                    </div>

                </div>
                <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                    <div style="width: 85%; text-align: start;">
                        <label for="" style="width: 100px;">Khoa: </label>
                        <input type="text" value="{{ $studentDataDetail[0]->stu_major }}" disabled
                            style="color: black">
                    </div>

                </div>
                <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="height: 41px;">
                    <div style="width: 85%; text-align: start;">
                        <label for="" style="width: 100px;">NickName: </label>
                        <input type="text" value="{{ $studentDataDetail[0]->stu_nickname }}" disabled
                            style="color: black">
                    </div>
                    <i class="bi bi-pencil-square" role="button" id="edit-nickname"></i>
                    <i class="fa-solid fa-paper-plane" type="submit" id="send-nickname" style="display: none;"></i>

                </div>
            </div>
        </div>
        <button class="accept" type="submit">Cập nhật</button>
    </form>

@endsection
@section('js')

    <script>
        const input = document.querySelector('input[name="img_change"]');
        const image = document.getElementById('image');

        const allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif'];

        input.addEventListener('change', () => {
            if (input.files && input.files.length > 0) {
                const file = input.files[0];
                const fileType = file.type;

                if (!allowedFileTypes.includes(fileType)) {
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    setTimeout(() => {
                        image.src = e.target.result;
                    }, 100);
                };

                reader.readAsDataURL(file);
            }
        });

        const editNicknameIcon = document.getElementById('edit-nickname');
        const editTextareaIcon = document.getElementById('edit-textarea');
        const nicknameInput = document.querySelector('input[value="{{ $studentDataDetail[0]->stu_nickname }}"]');
        const textareas = document.getElementById('js-textarea');
        const sendNickname = document.querySelector('i[id="send-nickname"]');
        const sendTextarea = document.querySelector('i[id="send-textarea"]');
        //area
        editTextareaIcon.addEventListener('click', () => {
            textareas.disabled = !textareas.disabled;
            editTextareaIcon.style.display = "none";
            sendTextarea.style.display = "inline-block";
        });

        sendTextarea.addEventListener('click', () => {
            textareas.disabled = !textareas.disabled;
            sendTextarea.style.display = "none";
            editTextareaIcon.style.display = "inline-block";
        });
        //nickname
        editNicknameIcon.addEventListener('click', () => {
            nicknameInput.disabled = !nicknameInput.disabled;
            nicknameInput.style.background = "white";
            editNicknameIcon.style.display = "none";
            sendNickname.style.display = "inline-block";
        });

        sendNickname.addEventListener('click', () => {
            nicknameInput.disabled = !nicknameInput.disabled;
            nicknameInput.style.background = "#8EACCD";
            sendNickname.style.display = "none";
            editNicknameIcon.style.display = "inline-block";
        });
    </script>
@endsection
