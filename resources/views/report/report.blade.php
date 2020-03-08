@extends('layouts.master')

@section('report')

    <style>

        .main {
            width: 92%;
            background: #eae3e5;
            position: relative;
            top: 516px;
            margin-right: 45px;
            border: 1px solid #ad73bf;
            float: right;
            border-radius: 4px;
            overflow: hidden;
        }

        .main .title {
            border-bottom: 1px solid #cdbbd8;
            height: 43px;
        }

        .main .last {
            font-size: 12pt;
            font-weight: bold;
            font-family: vazir;
            padding-right: 20px;
            line-height: 43px;
            text-align: right;
            float: right;
        }

        .main .more {
            font-family: vazir;
            font-size: 9pt;
            line-height: 43px;
            text-align: right;
            float: left;
            padding-left: 20px;
            cursor: pointer;
        }

        .report {
            width: 250px;
            height: 256px;
            float: right;
            border: 1px solid #b994cc;
            margin-right: 43px;
            margin-bottom: 30px;
            margin-top: 30px;
            cursor: pointer;
        }

        .report img {
            width: 250px;
            height: 200px;
        }

        .report p {
            direction: rtl;
            font-family: vazir;
            font-size: 10pt;
            text-align: center;
            font-weight: bold;
        }

    </style>

    <div class="main">
        <div class="title">
            <span class="last">آخرین اخبار</span>
            <span class="more">بیشتر</span>
        </div>
        @foreach($report as $item)
            <div class="report">
                <img src="{{asset('images/report/'.$item->image)}}" alt="">
                <p>{{$item->title}}</p>
            </div>

        @endforeach
    </div>

@endsection
