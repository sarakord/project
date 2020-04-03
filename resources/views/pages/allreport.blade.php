@extends('layouts.master')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/allreport.css')}}">
@endsection

@section('title')
   آخرین اخبار
@endsection

@section('content')

    {{--  lightgallery--}}
    <div class="box">
        <div class="header">
            <span class="title">آخرین اخبار</span>
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




@endsection
