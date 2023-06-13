<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- Navigation bar --}}
    @include('main.components.navigationbar')
    {{-- Home --}}
    @include('main.home.home')
    {{-- About --}}
    @include('main.about.about')
    {{-- {Product} --}}
    @include('main.product.product')
    {{-- {{ Email form }}
    @include('main.contact.contactForm') --}}
    {{-- Footer --}}
    @include('main.components.footer')
</body>
</html>