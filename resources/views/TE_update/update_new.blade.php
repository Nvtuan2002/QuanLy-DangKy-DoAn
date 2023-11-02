@extends('layouts.teacher')
@section('title', 'Tạo nhóm mới')
@section('content')
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> Cập nhật đồ án > Tạo nhóm mới</li>
            </ol>
        </nav>
        <div class="register_create container update_new">
            <h5>Giảng viên: Nguyễn Thành Trung</h5>
            <form>
                <label for="">Tên giảng viên:</label>
                <input class="invite" type="text" value="Nguyễn Thành Trung"> <br>
                <label for="">Yêu cầu: </label>
                <input class="invite" type="text"> <br>
                <label for="">Tên đề tài: </label>
                <input class="invite" type="text"><br>
                <label for="">Số lượng thành viên: </label>
                <input class="invite" type="text"><br>
                <label for="">Chuyên ngành: </label>
                <input class="invite" type="text"><br>
            </form>
        </div>
        <div class="d-flex justify-content-around" style="clear: both">
            <div class="d-flex justify-content-center mt-5">
                <a class="cancel px-5" href="{{ route('update') }}">Quay lại</a>
            </div>
        </div>
    </div>
@stop
