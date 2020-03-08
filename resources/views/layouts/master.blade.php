<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    #menu{
        margin-top: -125px;
    }

    #logo{
        width: 450px;
        height: 80px;
        float: right;
        text-align: center;
        margin-top: 10px;
    }

    #logo img {
        width: 150px;
        height: 50px;
    }

    #navigator{
        float: left;
    }

    #navigator ul li  {
        font-family: vazir;
        list-style: none;
        float: right;
        margin-left: 45px;
        margin-top: 10px;
        font-size: 12pt;
        width: 100px;
        height: 35px;
        text-align: center;
        line-height: 33px;
    }

    #navigator ul li.act {

        border-radius: 4px;
        background: red;
    }

    #navigator ul li.act a{
        color: white !important;
    }

    #navigator ul li a {
        text-decoration: none;
        color: black;
    }
</style>

    <div id="menu">
        <div id="logo">
            <img src="{{asset('logo/logo.png')}}">
        </div>
        <div id="navigator">
            <ul>
                <li class="act">
                    <a href="">
                        صفحه اصلی
                    </a>
                </li>
                <li class="">
                    <a href="">
                        گالری
                    </a>
                </li>
                <li class="">
                    <a href="">
                        درباره ما
                    </a>
                </li>
                <li class="">
                    <a href="">
                        تماس با ما
                    </a>
                </li>
            </ul>
        </div>
    </div>
<script>
    $('#navigator ul li').click(function () {
        $('#navigator ul li').removeClass('act');
        $(this).addClass('act');
    });
</script>

@yield('slider')

@yield('report')
</body>
</html>
