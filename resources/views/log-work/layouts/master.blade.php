<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('log-work.layouts.head-tags')
    @yield('head-tag')
</head>
<body>
@include('log-work.layouts.header')
@yield('content')
@include('log-work.layouts.script')
@yield('script')
</body>
</html>