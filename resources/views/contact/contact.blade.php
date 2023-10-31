@extends('layouts.default')
@section('content')
    <div class="m-2">
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
                    <img id="previewImage"
                        src="https://scontent.fhan17-1.fna.fbcdn.net/v/t1.15752-9/385533421_871168748062380_2297325553142698699_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=Gknv9e23wqcAX-scTrX&_nc_ht=scontent.fhan17-1.fna&oh=03_AdRRXo6Arrs3SrPnu3_fdbR9VvlAbCuin7cdjshNo1fIuw&oe=65687F37"
                        alt="">
                </div>
                <p>Nguyễn Thành Trung</p>
                <select name="" id="">
                    <option value="">Ảnh</option>
                    <option value="">Link</option>
                    <option value="">File đính kèm</option>
                </select> <br>
                <select name="" id="">
                    <option value="">Custome Chat</option>
                </select> <br>
                <select name="" id="">
                    <option value="">Thành viên nhóm</option>
                </select>
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
