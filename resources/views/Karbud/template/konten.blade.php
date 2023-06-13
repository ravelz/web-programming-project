<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>@yield('title')</title>
    
    @vite(['resources/js/app.js'])
</head>
<body class="d-flex flex-column justify-content-between" style="min-height:100vh;">
    <body style="background-color: #F5F0F0;">
    @include('template/headerArticle')
    @yield('content')
    @include('template/footer')
</body>
</html>