@extends('layouts.master')

@section('title')
    صفحه اصلی
@endsection

@section('attach')

    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('lightgallery.js/src/css/lightgallery.css')}}">

    <script src="{{asset('lightgallery.js/demo/js/lightgallery.min.js')}}"></script>

    <!-- lightgallery plugins -->
    <script src="{{asset('lightgallery.js/demo/js/lg-thumbnail.min.js')}}"></script>
    <script src="{{asset('lightgallery.js/demo/js/lg-fullscreen.min.js')}}"></script>

@endsection

@section('content')


    <div class="box">
        <div class="title">
            <span class="last">آخرین اخبار</span>
            <a href="{{route('report.all')}}"><span class="more">بیشتر</span></a>
        </div>
        @foreach($report as $item)
            <a href="{{route('report.show' , $item->id)}}">
                <div class="show">
                    <img src="{{asset('images/report/'.$item->image)}}" alt="">
                    <p>{{$item->title}}</p>
                </div>
            </a>

        @endforeach
    </div>

  {{--  lightgallery--}}
    <div class="box">
        <div class="title">
            <span class="last">گالری تصاویر</span>
            <a href="{{route('gallery')}}"><span class="more">بیشتر</span></a>
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
