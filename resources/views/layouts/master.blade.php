<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    @yield('attach')
</head>

<body>

<div id="menu">
    <div id="logo">
        <a href="{{route('main')}}"><img src="{{asset('logo/logo.png')}}"></a>
    </div>
    <div id="navigator">
        <ul>
            <li>
                <a href="{{route('main')}}">
                    صفحه اصلی
                </a>
            </li>
            <li>
                <a href="{{route('gallery')}}">
                    گالری
                </a>
            </li>
            <li>
                <a href="{{route('report.all')}}">
                    آخرین اخبار
                </a>
            </li>
            <li>
                <a href="{{route('about')}}">
                    درباره ما
                </a>
            </li>
            <li>
            <a href="{{url('contact')}}">
                    تماس با ما
                </a>
            </li>
        </ul>
    </div>
</div>

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
        // dots[slideIndex - 1].className += " active";
        this.className += " active";
    }

</script>
@yield('content')

{{--footer--}}
<div class="footer">
    <p>
        ما را در شبکه های اجتماعی دنبال کنید
    </p>
    <span>
        <i style="background-position: -368px -619px;"></i>
        <i style="background-position: -411px -619px;"></i>
        <i style="background-position: -453px -619px;"></i>
        <i style="background-position: -493px -619px;"></i>
        <i style="background-position: -534px -619px;"></i>
        <i style="background-position: -576px -619px;"></i>
        <i style="background-position: -617px -619px;"></i>
    </span>
</div>


<script>

        $('#navigator ul li').click(function () {
            localStorage.removeItem("class");
            $('#navigator> ul> li ').removeClass('act');

            localStorage.setItem("class",$(this).index());
        });
        $(document).ready(function() {
            SetClass();
            localStorage.removeItem("class");

        });

        function SetClass() {
            $('#navigator ul li').each(function (index) {
                if (index == localStorage.getItem("class") && index != 0) {
                    $("#navigator ul li").first().removeClass("act");
                    $(this).addClass("act");
                } else if (index == 0) {
                    $("#navigator ul li").first().addClass("act");

                }
            });
        }

</script>
</body>
</html>
