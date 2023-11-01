<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <div>
        <header>
            @include('includes.header')
        </header>
        <main class="d-flex">
            <aside class="col-md-2">
                {{-- Giảng viên --}}
                @include('includes.sidebarTeacher')
            </aside>
            <article class="col-md-10">
                @yield('content')
            </article>
        </main>
        <footer>
            @include('includes.footer')
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
