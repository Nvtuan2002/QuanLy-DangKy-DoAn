@extends('layouts.default')
@section('title', 'Chỉnh sửa thông tin cá nhân')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')
    <div class="groups col-lg-10">
        {{-- <img src="../img/background-primary.png" alt=""> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa thông tin cá nhân</li>
            </ol>
        </nav>
        <div class="text-center">
            <div class="info_img">
                <input type="file" id="file-input" style="display: none">
                <label for="file-input">
                    <img src="{{ asset('https://scontent.fhan17-1.fna.fbcdn.net/v/t1.15752-9/385533421_871168748062380_2297325553142698699_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=hMrzd7xiheoAX8b1D2l&_nc_ht=scontent.fhan17-1.fna&oh=03_AdRXIvodPzcdkIF_kKiJJEj-CY7dVqC24dt5W08MLkSU3g&oe=656765F7') }}"
                        alt="" id="image">
                    <i class="bi bi-camera-fill"></i>
                </label>
            </div>
            <h5 style="margin-top: 10px; background: #8EACCD; padding: 3px 3px; display:inline-block; border-radius: 5px;">
                Hoàng Hải Long</h5>
        </div>
        <div class="row justify-content-evenly" style="margin: 30px 0px;">
            <div class="col-5" style="margin-top: -36px; padding:unset; ">
                <h4 class="fw-bold">Thông tin cá nhân</h4>
                <div class="d-flex flex-column" style="border: 1px solid rgb(106, 89, 89); ">
                    <textarea name="" id="" cols="30" rows="10"
                        style="outline: none; border: none; height: 123px;"></textarea>
                    <i class="bi bi-pencil-square text-end" style="float: right"></i>
                </div>
            </div>
            <div class="col-5" style="border: 1px solid rgb(106, 89, 89); height: 150px;">
                <h5>Kỹ năng cá nhân</h5>
                <div class="row" style="">
                    <div class="col-6 text-start">
                        <label class="ms-3">Giao tiếp</label>
                        <div class="progress col-9" role="progressbar" aria-label="Info example" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info text-dark" style="width: 99%">99%</div>
                        </div>
                    </div>
                    <div class="col-6 text-start">
                        <label class="ms-3">Nhác học</label>
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
            <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                <div style="width: 85%;">
                    <label for="" style="width: 100px;">Họ và tên: </label>
                    <input type="text" value="Hoàng Hải Long">
                </div>
                <i class="bi bi-pencil-square"></i>

            </div>
            <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                <div style="width: 85%;">
                    <label for="" style="width: 100px;">Số điện thoại: </label>
                    <input type="text" value="0967846423">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                <div style="width: 85%;">
                    <label for="" style="width: 100px;">Email: </label>
                    <input type="text" value="long19092k2@gmail.com">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                <div style="width: 85%;">
                    <label for="" style="width: 100px;">Ngày Sinh: </label>
                    <input type="date" value="2002-09-19">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                <div style="width: 85%;">
                    <label for="" style="width: 100px;">Khoa: </label>
                    <input type="text" value="Công Nghệ Thông Tin">
                </div>
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="col-lg-5 col-xl-5 input_info d-flex justify-content-between" style="">
                <div style="width: 85%;">
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
