@extends('layouts.master')

@section('title')
   آخرین اخبار
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
            line-height: 43px;
            text-align: right;
            float: right;
        }


        .show {
            width: 250px;
            height: 256px;
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

        .show p {
            direction: rtl;
            font-family: vazir;
            font-size: 10pt;
            text-align: center;
            font-weight: bold;
            line-height: 31px;
        }



    </style>


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
