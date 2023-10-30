@extends('layouts.default')
@section('content')
    <div class="register m-2 monitor">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Theo dõi tiến trình</li>
            </ol>
        </nav>
        <table class="container">
                <tr>
                    <td style="text-align: center">Nhóm số</td>
                    <td style="text-align: center">Tên nhóm</td>
                    <td style="text-align: center">Nhóm trưởng</td>
                    <td style="text-align: center">Đề tài đăng ký</td>
                    <td style="text-align: center">Tiến độ làm việc</td>
                    <td style="text-align: center">Lựa chọn</td>
                </tr>

        </table>
        <table class="container">
                <tr>
                    <td>Nhóm số 4</td>
                    <td>Team vô địch</td>
                    <td>Hoàng Hải Long</td>
                    <td>Website Facebôk</td>
                    <td>Web đánh giá</td>
                    <td style="all:unset"><button class="invite"><a href="{{ route('monitor_group') }}">Theo dõi nhóm</a></button></td>
                </tr>
                <tr>
                    <td>Nhóm số 4</td>
                    <td>Team vô địch</td>
                    <td>Hoàng Hải Long</td>
                    <td>Website Youte</td>
                    <td>Web đánh giá</td>
                    <td style="all:unset"><button class="invite"><a href="{{ route('monitor_group') }}">Theo dõi nhóm</a></button></td>
                </tr>
                <tr>
                    <td>Nhóm số 4</td>
                    <td>Team vô địch</td>
                    <td>Hoàng Hải Long</td>
                    <td>Website Facebôk</td>
                    <td>Web đánh giá</td>
                    <td style="all:unset"><button class="invite"><a href="{{ route('monitor_group') }}">Theo dõi nhóm</a></button></td>
                </tr>
        </table>

    </div>
@stop
