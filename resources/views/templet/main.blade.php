<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tracking</title>

    <!-- Fonts -->
    <style type="text/css">
        @font-face {
            font-family: 'Product Sans Regular';
        }
    </style>

    <!-- Styles / Scripts -->
    <link rel="icon" type="image/png" href="{{ asset('imt.png') }}">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body id="tres" class="font-google flex gap-5 flex-col justify-center content-center text-center items-center bg-linear-to-r from-red-500 to-[#d0d0d0]">
    @include('templet.navbar')
    @yield('content_room')

</body>

</html>
