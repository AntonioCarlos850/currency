<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/navbar.css")}}">
    <title>@stack('title')</title>
</head>
<body>
    <x-navbar :currencies="$currencies" />
    @yield('content')
    <x-footer />
    <script src="{{asset("js/navbar.js")}}"></script>
</body>
</html>