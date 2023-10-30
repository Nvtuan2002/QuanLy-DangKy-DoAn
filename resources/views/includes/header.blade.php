<nav class="navbar navbar-expand-lg p-2 position-sticky">
    <!-- left -->
    <div class="container-fluid">
        <div class="center-center">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="./img/logo.png" alt="Logo Header"></a>
            </div>
        </div>
    </div>
    <!-- /left -->

    <!-- right -->
    <div class="info center-between t-14 fw-700 " class="nav-link dropdown-toggle" href="#" role="button"
        data-bs-toggle="dropdown"aria-expanded="false">
        <img class="avatar" src="./img/avatar.png" alt="Avatar main">
        <div class="fullname ms-2">Hoàng Hải Long</div>
        <i class="bi bi-caret-down-fill"></i>
        <ul class="dropdown-menu nav-item dropdown">
            <li><a class="dropdown-item" href=""><i class="me-2 bi bi-box-arrow-right"></i>Đăng xuất</a></li>
            <li><a class="dropdown-item" href="{{ route('infoStudent') }}"><i class="me-2 bi bi-pen"></i>Chỉnh sửa thông
                    tin</a></li>
            <li class="dropdown">
                <a class="dropdown-item" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="me-2 bi bi-gear"></i>Cài đặt
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Ngôn ngữ</a></li>
                    <li><a class="dropdown-item" href="">Bảo mật</a></li>
                    <li><a class="dropdown-item" href="">Màu nền</a></li>
                </ul>
            </li>
        </ul>
        </li>
    </div>
    <!-- right -->
</nav>