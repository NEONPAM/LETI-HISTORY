<!-- resources/views/layouts/main22.blade.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('layouts.header') <!-- Gọi header -->

    <main>
        @yield('content') <!-- Nội dung từng trang -->
    </main>


</body>
</html>
