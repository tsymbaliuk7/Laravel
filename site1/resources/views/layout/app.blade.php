<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>
@include('inc.header')
@yield('page-content')
@include('inc.footer')
</body>
</html>
