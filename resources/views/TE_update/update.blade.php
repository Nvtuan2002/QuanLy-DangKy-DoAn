@extends('layouts.teacher')
@section('content')
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Cập nhật đồ án </li>
            </ol>
        </nav>
        <div class="search update">
            <div>
                <div style="float: left;">
                    <a class="btn_list_register">Đồ án hiện có</a>
                    <a class="invite" href="{{ route('update_new') }}">Tạo đồ án mới</a>
                </div>
                <form class="container" style="margin-bottom: 10px">
                    <input placeholder="Nhập từ khóa muốn tìm kiếm" required="" pattern=".*\S.*" type="search"
                        class="input invite" id="search">
                    <span class="caret"></span>
                </form>
            </div>
            <table class="container">
                <tr>
                    <th style="text-align: center">Tên giảng viên</th>
                    <th style="text-align: center">Tên đề tài</th>
                    <th style="text-align: center">Yêu cầu</th>
                    <th style="text-align: center">Chuyên ngành</th>
                    <th style="text-align: center">Số lượng thành viên</th>
                    <th style="text-align: center">Lựa chọn</th>
                </tr>

            </table>
            <table class="container">
                <tr>
                    <td>Nguyễn Hải Long</td>
                    <td>Lập Trình Web</td>
                    <td>Sử dụng Laravel và MYSQL</td>
                    <td>Công Nghệ Thông Tin</td>
                    <td>15/15</td>
                    <td>
                        <button class="invite">Chỉnh sửa</button>
                    </td>
                </tr>
                <tr>
                    <td>Nguyễn Hải Long</td>
                    <td>Lập Trình Nhúng</td>
                    <td>Sử dụng Laravel và MYSQL</td>
                    <td>Công Nghệ Thông Tin</td>
                    <td>15/15</td>
                    <td>
                        <button class="invite">Chỉnh sửa</button>
                    </td>
                </tr>
                <tr>
                    <td>Nguyễn Hải Long</td>
                    <td>Lập Trình IOT</td>
                    <td>Sử dụng Laravel và MYSQL</td>
                    <td>Công Nghệ Thông Tin</td>
                    <td>15/15</td>
                    <td>
                        <button class="invite">Chỉnh sửa</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop
