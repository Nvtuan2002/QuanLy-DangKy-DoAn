@extends('layouts.default')
@section('content')
    <div class="groups_request m-2">
        <img src="../img/background-primary.png" alt="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Nhóm của bạn > Yêu cầu vào nhóm</li>
            </ol>
        </nav>
        <div class="d-flex list_request_title">
            <h5>Thông tin</h5>
            <h5>Lựa chọn</h5>
        </div>
        <div>
            <div class="d-flex list_request">
                    <p>Hoàng Hải Long</p>
                    <i class="bi bi-box-arrow-up-right"></i>
                    <button class="accept">Duyệt</button>
                    <button class="reject">Từ chối</button>
            </div>
            <div class="d-flex list_request">
                    <p>Hoàng Hải Long</p>
                    <i class="bi bi-box-arrow-up-right"></i>
                    <button class="accept">Duyệt</button>
                    <button class="reject">Từ chối</button>
            </div>
            <div class="d-flex list_request">
                    <p>Hoàng Hải Long</p>
                    <i class="bi bi-box-arrow-up-right"></i>
                    <button class="accept">Duyệt</button>
                    <button class="reject">Từ chối</button>
            </div>
            <div class="d-flex list_request">
                    <p>Hoàng Hải Long</p>
                    <i class="bi bi-box-arrow-up-right"></i>
                    <button class="accept">Duyệt</button>
                    <button class="reject">Từ chối</button>
            </div>
            
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="cancel px-5" href="{{ route('groupSV') }}">Quay lại</a>
        </div>

    </div>
@stop
