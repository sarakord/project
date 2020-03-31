@extends('layouts.master')

@section('title')
   اخبار
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

        .box .header {
            border-bottom: 1px solid #cdbbd8;
            height: 43px;
        }

        .box .title {
            font-size: 12pt;
            font-weight: bold;
            font-family: vazir;
            padding-right: 20px;
            line-height: 14px;
            text-align: right;
            float: right;
        }

        .content {
            margin-top: 25px;
            padding: 0 67px;
            font-family: vazir;
            text-align: justify;
            direction: rtl;
            line-height: 40px;
        }

        .content img{
            width: 250px;
            height: 250px;
            display: block;
            margin: 60px auto;
        }


    </style>
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
