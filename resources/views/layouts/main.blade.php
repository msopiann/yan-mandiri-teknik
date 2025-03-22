<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Yan Mandiri Teknik | Bengkel Bubut Baja Jakarta' }}</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/magnifying-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
</head>

<body class="bg-home-4">
    <x-header :phone="$headerPhone" :email="$headerEmail" :socialMedia="$socialMedia" :logoPath="$logoPath" />

    <x-sidebar :sidebarHeadlineDesktop="$sidebarHeadlineDesktop" :sidebarSubheadlineDesktop="$sidebarSubheadlineDesktop"
        :socialMedia="$socialMedia" />

    @yield('content')

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <div id="anywhere-home" class=""></div>

    <x-scripts />
</body>

</html>