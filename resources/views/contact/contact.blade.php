@extends('layouts.default')
@section('title', 'Liên hệ với giảng viên')
@section('content')
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Liên hệ với giảng viên ></li>
            </ol>
        </nav>
        <div class="container d-flex justify-content-around">
            <div class="contact">
                <div class="messenger-header">
                    <select name="" id="" style="background-color: unset; border: none; outline: none;">
                        <option value="">Nhóm 1</option>
                        <option value="">Nhóm 2</option>
                        <option value="">Nhóm 3</option>
                        <option value="">Nhóm 4</option>
                    </select>
                </div>
                <div class="messenger-body">
                    <div>
                        <img src="./img/avatar.png" alt="">
                        <span class="message">Xin chào </span>
                    </div>
                    <div class="user">
                        <span class="message user-message">Chào bạn!</span>
                        <img src="./img/avatar.png" alt="">
                    </div>
                </div>
                <div class="messenger-footer d-flex justify-content-center">
                    <label for="image-upload" class="attachment-icon">
                        <i class="bi bi-card-image"></i>
                    </label>
                    <input id="image-upload" type="file" class="attachment-input" style="display: none" accept="image/*">
                    <label for="file-upload" class="attachment-icon">
                        <i class="bi bi-paperclip"></i>
                    </label>
                    <input id="file-upload" type="file" class="attachment-input" style="display: none">
                    <input class="invite" type="text" class="input-box" placeholder="Nhập tin nhắn...">
                    <button class="" type="submit"><i class="bi bi-send"></i></button>
                </div>
            </div>
            <div class="your-message">
                <div class="avatar-preview">
                    <img id="previewImage"
                        src="https://scontent.fhan17-1.fna.fbcdn.net/v/t1.15752-9/385533421_871168748062380_2297325553142698699_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=Gknv9e23wqcAX-scTrX&_nc_ht=scontent.fhan17-1.fna&oh=03_AdRRXo6Arrs3SrPnu3_fdbR9VvlAbCuin7cdjshNo1fIuw&oe=65687F37"
                        alt="">
                </div>
                <h5 class="text-center">Nguyễn Thành Trung</h5>
                <a href="{{ route('infoStudent') }}"><i class="bi bi-person-square" ></i>Trang cá nhân</a> <br>
                <div class="accordion" id=""  style="margin-top: 10px;">
                    <button class="btn-expand" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1"
                        aria-expanded="false" aria-controls="flush-collapseOne">
                        File Phương tiện, file, liên kết
                    </button>
                    <div id="flush-collapseOne1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <button class="button-invisible"><i class="bi bi-images"></i>File phương tiện</button>
                        <button class="button-invisible"><i class="bi bi-file-earmark-fill"></i>File</button>
                        <button class="button-invisible"><i class="bi bi-link-45deg"></i>Liên két</button>
                    </div>
                </div> <br>
                <div class="accordion" id="">
                    <button class="btn-expand" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2"
                        aria-expanded="false" aria-controls="flush-collapseOne">
                        Tùy chỉnh đoạn chat Chat
                    </button>
                    <div id="flush-collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                        <button class="button-invisible"><i class="bi bi-palette-fill"></i>Đổi chủ đề</button>
                        <button class="button-invisible"><i class="bi bi-emoji-heart-eyes-fill"></i>Thay đổi biểu tượng cảm xúc</button>
                        <button class="button-invisible"><i class="bi bi-snapchat"></i>Chỉnh sửa biệt danh</button>
                    </div>
                </div> <br>
                <div class="accordion" id="">
                    <button class="btn-expand" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne3"
                        aria-expanded="false" aria-controls="flush-collapseOne">
                        Thành viên nhóm
                    </button>
                    <div id="flush-collapseOne3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                        <button class="button-invisible"><i class="bi bi-people-fill"></i>Hoàng Hải Long</button>
                        <button class="button-invisible"><i class="bi bi-people-fill"></i>Nguyễn Viết Tuấn</button>
                    </div>
                </div> <br>
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
