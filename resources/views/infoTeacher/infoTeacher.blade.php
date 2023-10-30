@extends('layouts.default')
@section('content')
    <div class="groups m-2">
        {{-- <img src="../img/background-primary.png" alt=""> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Thông tin giảng viên > Nguyễn Thành Trung</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="text-center col-4">
                <div class="info_img">
                    <input type="file" id="file-input" style="display: none">
                    <label for="file-input">
                        <img src="https://scontent.fhan17-1.fna.fbcdn.net/v/t1.15752-9/385533421_871168748062380_2297325553142698699_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=hMrzd7xiheoAX8b1D2l&_nc_ht=scontent.fhan17-1.fna&oh=03_AdRXIvodPzcdkIF_kKiJJEj-CY7dVqC24dt5W08MLkSU3g&oe=656765F7"
                            alt="" id="image">
                        <i class="bi bi-camera-fill"></i>
                    </label>
                </div>
                <h5
                    style="margin-top: 10px; background: #8EACCD; padding: 3px 3px; display:inline-block; border-radius: 5px;">
                    Nguyễn Thành Trung</h5>
            </div>
            <div class="col-7">
                <p class="fw-bold">Thông tin nổi bật</p>
                <p><i class="bi bi-award"></i>Tốt nghiệp Đại học Bách Khoa Hà Nội.</p>
                <p><i class="bi bi-award"></i>Đạt thành tích xuất sắc trong lĩnh vực AI</p>
                <p><i class="bi bi-award"></i>Cán bộ đoàn xuất sắc năm học 2022-2023 Đại Học Phenikaa</p>
                <p><i class="bi bi-award"></i>Đạt giải thưởng sáng tạo về thành tích học tập sinh viên</p>
            </div>
        </div>
        <div class="row text-center" style="margin-bottom: 30px;">
            <div class="col-5">
                <h4>Thông tin cá nhân</h4>
                <textarea name="" id="" cols="30" rows="5">Hello everyone I am now I am studying IT, and I have Desire</textarea>
                <i class="bi bi-pencil-square text-end"></i>
            </div>
            <div class="col-5">
                <h5>Kỹ năng cá nhân</h5>
                <div class="row" style="border: 1px solid rgb(106, 89, 89); padding: 20px 0px;">
                    <div class="col-6 text-start">
                        <label class="ms-3">Giao tiếp</label>
                        <div class="progress col-9" role="progressbar" aria-label="Info example" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info text-dark" style="width: 99%">99%</div>
                        </div>
                    </div>
                    <div class="col-6 text-start">
                        <label class="ms-3">Làm Việc Nhóm</label>
                        <div class="progress col-9" role="progressbar" aria-label="Info example" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info text-dark" style="width: 99%">99%</div>
                        </div>
                    </div>
                    <div class="col-6 text-start">
                        <label class="ms-3">Ielts</label>
                        <div class="progress col-9" role="progressbar" aria-label="Info example" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info text-dark" style="width: 99%">99%</div>
                        </div>
                    </div>
                    <div class="col-6 text-start">
                        <label class="ms-3">FullStack</label>
                        <div class="progress col-9" role="progressbar" aria-label="Info example" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info text-dark" style="width: 99%">99%</div>
                        </div>
                    </div>
                    <i class="bi bi-pencil-square text-end"></i>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gy-3" style="">
            <div class="col-5 input_info d-flex justify-content-between" style="">
                <div>
                    <label for="" style="width: 100px;">Họ và tên: </label>
                    <input type="text" value="Nguyễn Thành Trung">
                </div>
                <i class="bi bi-pencil-square"></i>

            </div>
            <div class="col-5 input_info d-flex justify-content-between" style="">
                <div>
                    <label for="" style="width: 100px;">Số điện thoại: </label>
                    <input type="text" value="0967846423">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="col-5 input_info d-flex justify-content-between" style="">
                <div>
                    <label for="" style="width: 100px;">Email: </label>
                    <input type="text" value="long19092k2@gmail.com">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="col-5 input_info d-flex justify-content-between" style="">
                <div>
                    <label for="" style="width: 100px;">Ngày Sinh: </label>
                    <input type="date" value="2002-09-19">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="col-5 input_info d-flex justify-content-between" style="">
                <div>
                    <label for="" style="width: 100px;">Khoa: </label>
                    <input type="text" value="Công Nghệ Thông Tin">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="col-5 input_info d-flex justify-content-between" style="">
                <div>
                    <label for="" style="width: 100px;">NickName: </label>
                    <input type="text" value="LongNotDevVipPro">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
        </div>
    </div>
    </div>
    <script>
        const input = document.querySelector('input');
        const image = document.getElementById('image');

        input.addEventListener('change', () => {
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    image.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
@stop
