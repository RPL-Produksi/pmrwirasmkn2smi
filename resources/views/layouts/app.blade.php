<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/img/logo_pmr.png') }}" type="image/x-icon">\
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
    <title>PMR Wira - SMK Negeri 2 Sukabumi</title>
</head>

<body class="font-poppins antialiased min-h-screen relative bg-gray-100">
    <div class="relative z-20">
        @yield('content')
    </div>

    @stack('js')
</body>

</html>
