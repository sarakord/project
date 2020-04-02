@extends('layouts.crud')

@section('title')
    Contact
@endsection

@section('content')

    <style>
        ul li {
            list-style: none;
            float: right;
        }

        .header {
            width: 1014px;
            float: right;
            padding: 0;
            background: #d4dbe2;
            margin-right: 80px;
            line-height: 50px;
        }

        .header li {
            float: left;
            font-size: 17pt;
            text-align: center;
            width: 202px;
            list-style: none;
        }

        .content {
            width: 1014px;
            float: right;
            padding: 0;
            background: #eee;
            margin-right: 80px;
            line-height: 50px;
            margin-top: 0;
        }

        .content li {
            float: left;
            font-size: 11pt;
            text-align: center;
            width: 202px;

        }

        .content .image img {
            width: 50px;
            height: 50px;
            display: block;
            border: 1px solid black;
            margin-left: 36px;
        }

        input {
            cursor: pointer;
        }

        .btn {
            text-decoration: none;
        }

        .fix {
            position: fixed;
            margin-left: 25px;
            margin-top: 70px;
        }

        div h1 {
            width: 147px;
            height: 48px;
            border: 1px solid #791fbd;
            text-align: center;
            padding: 12px;
            cursor: pointer;
        }

        .detail {
            width: 900px;
            height: 600px;
            background: #fff;
            position: fixed;
            left: 0;
            right: 0;
            top: 30px;
            margin: auto;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .15);
            z-index: 3;
            font-family: vazir;
            display: none;
        }

        .detail h3 {
            background: #eee;
            margin: 0;
            padding: 1px;
            font-size: 12pt;
            text-align: right;
            padding-right: 14px;
            font-family: vazir;
            position: relative;
        }

        .close {
            background: url("{{asset('/images/slices.png')}}") no-repeat -134px -123px;
            width: 28px;
            height: 28px;
            position: absolute;
            cursor: pointer;
            left: 11px;
            top: 11px;
            border: 1px solid #ccc;
            border-radius: 100%;
        }

        .main p {
            line-height: 20px;
        }

        .main {
            text-align: justify;
            width: 100%;
            direction: rtl;
        }

        .main div {
            margin-bottom: 35px;
            position: relative;
        }

        .title {
            font-family: vazir;
            font-size: 13pt;
            padding-right: 27px;
            font-weight: bold;
        }

        .text {
            margin-right: 80px;
            direction: rtl;
            text-align: justify;
            margin-left: 32px;
            font-family: vazir;
            font-size: 11pt;
        }

        #dark {
            width: 100%;
            height: 100%;
            position: fixed;
            background: rgba(0, 0, 0, .6);
            left: 0;
            top: 0;
            z-index: 2;
            display: none;
        }

    </style>
    <div>
        <ul class="header">
            <li>Id</li>
            <li>Name</li>
            <li>Title</li>
            <li>Detail</li>
            <li>Delete</li>
        </ul>
        @foreach($contact as $item)
            <ul class="content">
                <li>{{$item->id}}</li>
                <li>{{$item->name}}</li>
                <li>{{$item->title}}</li>
                <li class="btn">
                    <button value="More" onclick="ShowModal({{$item->id}})">More</button>

                    <div id="detail-{{$item->id}}" class="detail">
                        <h3>{{$item->title}}
                            <span class="close"></span>
                        </h3>
                        <div class="main">
                            <div>
                                <p class="title"> نام : </p>
                                <p class="text">{{$item->name}}</p>
                            </div>
                            <div>
                                <p class="title"> ایمیل : </p>
                                <p class="text">{{$item->email}}</p>
                            </div>
                            <div>
                                <p class="title"> موضوع : </p>
                                <p class="text">{{$item->title}}</p>
                            </div>
                            <span >
                            <p class="title">محتوا :</p>
                            <p class="text">{{$item->content}}</p>
                        </span>
                        </div>
                    </div>

                </li>

                <li>
                    <form action="{{route('contact.delete',$item->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </li>

            </ul>
        @endforeach
    </div>
    <div id="dark"></div>
    <div class="fix">
        <h1><a href="{{route('report.create')}}" class="btn">Create</a></h1>
        <h1><a href="{{route('main')}}" class="btn">Main Page</a></h1>
        <h1><a href="{{route('gallery.index')}}" class="btn">Gallery</a></h1>
        <h1><a href="{{route('slider.index')}}" class="btn">Slider</a></h1>
        <h1><a href="{{route('report.index')}}" class="btn">Report</a></h1>
    </div>

    <script>
        function ShowModal(id) {
            $('#dark').fadeIn(200);
            $('#detail-' + id).fadeIn(200);
        }


        $('.content .detail .close').click(function () {
            $(this).parent().parent().fadeOut(200);
            $('#dark').fadeOut(200);
        });
    </script>
@endsection
