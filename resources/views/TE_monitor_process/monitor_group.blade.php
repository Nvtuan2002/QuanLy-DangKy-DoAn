@extends('layouts.teacher')
@section('title', 'Theo dõi tiến trình')
@section('content')
    <div class="groups col-lg-10">
        {{-- <img src="../img/background-primary.png" alt=""> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Theo dõi tiến trình > Nhóm 04</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between">
            <div class="alert">
                <p class="fw-bold">Chào mừng, Nguyễn Thành Trung</p>
            </div>
        </div>
        <div class="mx-3 d-flex">
            <div class="col-md-8 history-update" style="border-right: 1px solid black; margin-right: 50px;">
                <h6 class=" fw-bold"><img class="avatar me-4" src="./img/avatar-groups.png" alt="Avatar groups">Nhóm 04</h6>
                <div class="row">
                    <ul class="col-6">
                        <p class="fw-bold"><i class="bi bi-clock-history"></i>Lịch sử cập nhật</p>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                        <li><i class="bi bi-file-earmark-arrow-up"></i>Hoàng Hải Long đã tải lên file abc.pdf</li>
                    </ul>
                    <ul class="col-3 text-center">
                        <p class="fw-bold"><i class="bi bi-clock-history"></i>Bình luận</p>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                        <li></i>Cập nhật</li>
                    </ul>
                    <ul class="col-3 text-center">
                        <p class="fw-bold"><i class="bi bi-clock-history"></i>Thời gian</p>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                        <li></i>9: 56</li>
                    </ul>
                </div>
                <div class="d-flex flex-wrap justify-content-around" style="">
                    <a class="request" href="{{ route('monitor_process') }}">Quay lại</a>
                    <button class="request" id="modal_monitor">Đưa ra thông báo</button>
                    <button class="request">Đánh giá tiến độ</button>
                </div>

                {{-- Active --}}
                <div id="modal_up" class="text-center" style="display: none;margin-top: 15px; margin-right:28px;">
                    <button class="request" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Đặt lịch họp </button>
                    <button class="request" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Đưa ra thông
                        báo</button>
                </div>

                {{-- Modal Alert --}}
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Chọn ngày họp</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="meeting-form">
                                    <div class="mb-4">
                                        <label for="meeting-date" class="col-form-label">Chọn ngày họp</label>
                                        <input type="date" name="meeting-date" id="meeting-date" style="outline: none;">
                                    </div>
                                    <div class="mb-4">
                                        <label for="start-time" class="col-form-label">Chọn giờ họp</label>
                                        <input type="time" name="start-time" id="start-time" style="outline: none;">
                                        <i class="bi bi-chevron-double-right"></i>
                                        <input type="time" name="end-time" id="end-time" style="outline: none;">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="request">Đưa ra lịch họp</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal Meeting --}}
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Đặt Thông báo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="meeting-form">
                                    <textarea name="" id="" cols="61" rows="5"
                                        placeholder="Hãy đưa ra một vài thông báo cho nhóm ...." style="outline: none;"></textarea>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="request">Đưa ra thông báo</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="">
                <div class="mt-4">
                    <h6 class="fw-bold">Giới thiệu</h6>
                    <p>Website xây dựng quản lý đồ án</p>
                    <p><i class="bi bi-activity"></i>Tiến trình</p>
                    <p><i class="bi bi-journal-album"></i>Ghi chú</p>
                    <p><i class="bi bi-people-fill"></i>Thành viên</p>
                </div>
                <div class="mt-4">
                    <h6 class="fw-bold">Đóng góp</h6>
                    <p><img src="./img/avatar.png" alt="">Hoàng Hải Long</p>
                    <p><img src="./img/avatar.png" alt="">Nguyễn Viết Tuấn</p>
                </div>
                <div class="mt-4">
                    <h6 class="fw-bold">Kiểu File</h6>
                    <p><i class="bi bi-filetype-pdf"></i>PDF</p>
                    <p><i class="bi bi-filetype-png"></i>PNG</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const modal_monitor = document.getElementById('modal_monitor')
        const modal_up = document.getElementById("modal_up");
        modal_monitor.addEventListener("click", function() {
            modal_up.style.display = modal_up.style.display === "none" ? "block" : "none";
        });
    </script>
@stop
