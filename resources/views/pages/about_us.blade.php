@extends('layouts.master')

@section('title')
    درباره ما
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

        .content ul li {
            list-style-type: square;
        }

    </style>
    <div class="box">
        <div class="header">
            <p class="title"> درباره سئو سایت</p>
        </div>
        <div class="content">
            <p>
                ما فعالیت خود در سطح وب را از سال ۱۳۹۲ آغاز کردیم. کار ما در ابتدا بیشتر در زمینه طراحی صفحات وب بود اما
                چون مشتری نداشتیم باید به فکر چاره می بودیم تا با مفهومی به نام سئو آشنا شدیم از آن روز تا به الان به
                صورت مداوم در زمینه بهینه سازی سایت فعالیت می کنیم و با لطف پروردگار میزبان پروژه های بزرگی در سطح
                رقابتی بودیم از مهم ترین خدمات ما می توان به موارد زیر اشاره کرد:
            </p>
            <ul>
                <li>بهبود رتبه کلمات کلیدی در گوگل</li>
                <li>افزایش ورودی و ترافیک ارگانیک از موتور های جستجو</li>
                <li>مشاوره سئو و بهینه سازی</li>
            </ul>
        </div>
    </div>
@endsection
