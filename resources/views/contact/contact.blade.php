@extends('layouts.default')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Liên hệ với giảng viên ></li>
        </ol>
    </nav>
    <div class="container d-flex justify-content-around">
        <div class="contact">
            <div class="messenger-header">
                Nhóm 1
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
            <div class="d-flex justify-content-center">
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
                <img id="previewImage" src="./img/avatar.png" alt="">
            </div>
            <p>Nguyễn Thành Trung</p>
            <select name="" id="" style="margin-bottom: 20px;">
                <option value="">Ảnh</option>
                <option value="">Link</option>
                <option value="">File đính kèm</option>
            </select> <br>
            <select name="" id="">
                <option value="">Custome Chat</option>
            </select>

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
