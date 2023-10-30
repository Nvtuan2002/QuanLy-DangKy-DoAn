@extends('layouts.default')
@section('content')
    <div class="register m-2 register_list update">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Cập nhật đồ án </li>
            </ol>
        </nav>
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
                <td style="text-align: center">Tên giảng viên</td>
                <td style="text-align: center">Tên đề tài</td>
                <td style="text-align: center">Yêu cầu</td>
                <td style="text-align: center">Chuyên ngành</td>
                <td style="text-align: center">Số lượng thành viên</td>
                <td style="text-align: center">Lựa chọn</td>
            </tr>

        </table>
        <table class="container">
            <tr>
                <td>Nguyễn Hải Long</td>
                <td>Lập Trình Web</td>
                <td>Sử dụng Laravel và MYSQL</td>
                <td>Công Nghệ Thông Tin</td>
                <td>15/15</td>
                <td style="all:unset">
                    <button class="invite">Chỉnh sửa</button>
                </td>
            </tr>
            <tr>
                <td>Nguyễn Hải Long</td>
                <td>Lập Trình Nhúng</td>
                <td>Sử dụng Laravel và MYSQL</td>
                <td>Công Nghệ Thông Tin</td>
                <td>15/15</td>
                <td style="all:unset">
                    <button class="invite">Chỉnh sửa</button>
                </td>
            </tr>
            <tr>
                <td>Nguyễn Hải Long</td>
                <td>Lập Trình IOT</td>
                <td>Sử dụng Laravel và MYSQL</td>
                <td>Công Nghệ Thông Tin</td>
                <td>15/15</td>
                <td style="all:unset">
                    <button class="invite">Chỉnh sửa</button>
                </td>
            </tr>
        </table>
    </div>
@stop
