<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layout.bootstrap')
    <link rel="shortcut icon" href="{{ asset('img/logo/EduFunLogo.png') }}" type="image/x-icon">
</head>
<body class="bg-light d-flex flex-column min-vh-100" style="overflow-x: hidden;">
    @include('layout.header')

    <main class="flex-grow-1 d-flex flex-column">
        @yield('content')
    </main>

    @include('layout.footer')
</body>
</html>