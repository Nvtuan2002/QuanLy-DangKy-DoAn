@extends('layouts.default')
@section('content')
    <div class="col-lg-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Lịch thống kêu báo cáo ></li>
            </ol>
        </nav>
        <div class="calendar container">
            <div class="select-date">
                <p>Chọn ngày và thời gian</p>
                <input type="datetime-local" id="currentDateTime">
            </div>
            <table>
                <tr>
                    <th>Thời gian</th>
                    <th>Thứ 2</th>
                    <th>Thứ 3</th>
                    <th>Thứ 4</th>
                    <th>Thứ 5</th>
                    <th>Thứ 6</th>
                    <th>Thứ 7</th>
                    <th>Chủ Nhật</th>
                </tr>
                <tr>
                    <td>7:00 AM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>8:00 AM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>9:00 AM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>10:00 AM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>11:00 AM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>12:00 AM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>13:00 PM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>14:00 PM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>15:00 PM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>16:00 PM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>17:00 PM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
                <tr>
                    <td>18:00 PM</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                    <td>Lịch học</td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        function updateCurrentDateTime() {
            const currentDateTimeInput = document.getElementById('currentDateTime');
            const now = new Date();
            const utcTime = now.getTime() - (now.getTimezoneOffset() * 60000);
            const isoString = new Date(utcTime).toISOString().slice(0, 16);
            currentDateTimeInput.value = isoString;
        }
        updateCurrentDateTime();
        setInterval(updateCurrentDateTime, 1000); // 1000 ms = 1 giây
    </script>
@stop
