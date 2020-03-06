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

<style>

    #slider{
        position: relative;
        top: 300px;
    }

    * {
        box-sizing: border-box
    }

    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        width: 1229px;
        position: relative;
        border: 1px solid #761ea2;
        box-shadow: 1px 2px 3px #761ea2;
        margin-top: 140px;
        margin-left: 63px;
    }

    .mySlides img{
        width: 100%;
        margin-top: -89px;
    }

    img {
        width: 747px;
        height: 240.55px;
    }

    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 54%;
        width: auto;
        padding: 0px;
        margin-top: -22px;
        color: black;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #7f29bf;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }


    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }
        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .prev, .next, .text {
            font-size: 11px
        }
    }

    #Slider {
        position: relative;
        top: 92px;
    }
</style>
<div id="Slider">
<div class="slideshow-container">

    @foreach ($slider as $item)
        <div class="mySlides fade">

            <img src="{{asset('/images/slider/'.$item->image)}}" style="width:100%">
            <div class="text">{{$item->title}}</div>
        </div>
    @endforeach

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
</div>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

</script>

@yield('content')
</body>
</html>
