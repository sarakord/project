<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') </title>
    <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
</head>
<body>
<style>
    @font-face {
        font-family: 'vazir';
        src: url({{asset('font/Vazir.eot?#')}}) format('eot'),
        url({{asset('font/Vazir.woff')}}) format('woff'),
        url({{asset('font/Vazir.ttf')}}) format('truetype');
        font-style:normal;
        font-weight:normal;
    }

</style>
    @yield('content')
</body>
</html>
