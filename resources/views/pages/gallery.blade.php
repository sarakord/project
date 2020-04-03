@extends('layouts.master')

@section('title')
    گالری تصاویر
@endsection

@section('attach')

    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <link rel="stylesheet" href="{{asset('lightgallery.js/src/css/lightgallery.css')}}">

    <script src="{{asset('lightgallery.js/demo/js/lightgallery.min.js')}}"></script>

    <!-- lightgallery plugins -->
    <script src="{{asset('lightgallery.js/demo/js/lg-thumbnail.min.js')}}"></script>
    <script src="{{asset('lightgallery.js/demo/js/lg-fullscreen.min.js')}}"></script>

@endsection

@section('content')

    {{--  lightgallery--}}
    <div class="box">
        <div class="header">
            <span class="title">گالری تصاویر</span>
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
