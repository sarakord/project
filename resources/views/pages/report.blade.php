@extends('layouts.master')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/report.css')}}">
@endsection

@section('title')
   اخبار
@endsection

@section('content')
    
    <div class="box">
        <div class="header">
            <p class="title">{{$report->title}}</p>
        </div>
        <div class="content">

            <img src="{{asset('/images/report/'.$report->image)}}" alt="">

            <p>{{$report->description}}</p>

        </div>
    </div>
@endsection
