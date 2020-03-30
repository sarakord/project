@extends('layouts.master')

@section('title')
    گالری تصاویر
@endsection

@section('attach')
    <link rel="stylesheet" href="{{asset('lightgallery.js/src/css/lightgallery.css')}}">

    <script src="{{asset('lightgallery.js/demo/js/lightgallery.min.js')}}"></script>

    <!-- lightgallery plugins -->
    <script src="{{asset('lightgallery.js/demo/js/lg-thumbnail.min.js')}}"></script>
    <script src="{{asset('lightgallery.js/demo/js/lg-fullscreen.min.js')}}"></script>

@endsection

@section('content')

    <style>


        .box {
            width: 91.5%;
            background: #eae3e5;
            position: relative;
            top: 110px;
            margin-right: 53px;
            border: 1px solid #ad73bf;
            float: right;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .box .title {
            border-bottom: 1px solid #cdbbd8;
            height: 43px;
        }

        .box .gallery {
            font-size: 12pt;
            font-weight: bold;
            font-family: vazir;
            padding-right: 20px;
            line-height: 43px;
            text-align: right;
            float: right;
        }

        .show {
            width: 150px;
            height: 150px;
            float: right;
            border: 1px solid #b994cc;
            margin-right: 43px;
            margin-bottom: 30px;
            margin-top: 30px;
            cursor: pointer;
        }

        .show img {
            width: 248px;
            height: 200px;
        }



    </style>


    {{--  lightgallery--}}
    <div class="box">
        <div class="title">
            <span class="gallery">گالری تصاویر</span>
        </div>
        <div id="lightgallery">
            @foreach($gallery as $item)
                <a href="{{asset('/images/gallery/'.$item->image)}}">
                    <img class="show" src="{{asset('/images/gallery/'.$item->image)}}">
                </a>
            @endforeach
        </div>
    </div>

    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>


@endsection
