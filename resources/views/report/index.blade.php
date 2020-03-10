@extends('layouts.crud')

@section('title')
    Report
@endsection

@section('content')

    <style>
        ul li {
            list-style: none;
            float: right;
        }

        .header {
            width:1014px;
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
            width: 166px;
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
            width: 166px;

        }

        .content .image img{
            width: 50px;
            height: 50px;
            display: block;
            border: 1px solid black;
            margin-left: 36px;
        }

        input {
            cursor: pointer;
        }

        .fix {
            position: fixed;
            margin-left: 25px;
            margin-top: 70px;
        }

        div h1 {
            width: 118px;
            height: 48px;
            border: 1px solid #791fbd;
            text-align: center;
            padding: 12px;
            cursor: pointer;
        }

        .btn {
            text-decoration: none;
        }

        .detail{
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

        .detail .reportImage{
            width: 170px;
            height: 170px;
            margin-top: 70px;
        }


        .detail h3{
            background: #eee;
            margin: 0;
            padding: 1px;
            font-size: 12pt;
            text-align: right;
            padding-right: 14px;
            font-family: vazir;
            position: relative;
        }

        .close{
            background:url("{{asset('/images/slices.png')}}") no-repeat -134px -123px ;
            width: 28px;
            height: 28px;
            position: absolute;
            cursor: pointer;
            left: 11px;
            top: 11px;
            border: 1px solid #ccc;
            border-radius: 100%;
        }

        .btn .detail img{
            margin: 29px;
            text-align: left;
        }

        .right p{
            line-height: 20px;
        }

        .right{
            float: right;
            text-align: right;
        }

        .right div{
            margin-bottom: 35px;
            position: relative;
            /* margin-top: -170px; */
            top: -235px;
        }

        .right span{
            position: relative;
            top: -200px;
        }

        .left{
            float: left;
        }

        .title{
            font-family: vazir;
            font-size: 12pt;
            padding-right: 27px;
            font-weight: bold;
        }

        .main{
            margin-right: 23px;
            direction: rtl;
            text-align: justify;
            margin-left: 32px;

        }

        .description {
            width: 830px;
            position: relative;
            top: -373px;
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
        <li>Image</li>
        <li>Title</li>
        <li>Detail</li>
        <li>Edit</li>
        <li>Delete</li>
    </ul>
    @foreach($report as $item)
        <ul class="content">
            <li>{{$item->id}}</li>
            <li class="image"><img src="{{asset('/images/report/'.$item->image)}}" ></li>
            <li>{{$item->title}}</li>
            <li class="btn">
                <button value="More" onclick="ShowModal({{$item->id}})">More</button>

                <div id="detail-{{$item->id}}" class="detail">
                        <h3>{{$item->title}}
                            <span class="close"></span>
                        </h3>
                    <div class="left">
                    <img src="{{asset('/images/report/'.$item->image)}}" alt="" class="reportImage">
                    </div>
                    <div class="right">
                        <div>
                            <p class="title"> : تیتر </p>
                            <p class="main">{{$item->title}}</p>
                        </div>
                        <div>
                            <p class="title"> : خلاصه </p>
                            <p class="main">{{$item->Brief}}</p>
                        </div>
                        <span class="description">
                            <p class="title"> : شرح </p>
                            <p class="main">{{$item->description}}</p>
                        </span>
                    </div>
                </div>

            </li>
            <li>
                <a href="{{route('report.edit',$item->id)}}"><input type="submit" value="Edit"></a>
            </li>
            <li>
            <li>
                <form action="{{route('report.destroy',$item->id)}}" method="post">
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
        <h1><a href="{{url('slider/{slider}')}}" class="btn">Home</a></h1>
    </div>

    <script>
        function ShowModal(id){
            $('#dark').fadeIn(200);
            $('#detail-'+id).fadeIn(200);
        }


        $('.content .btn .detail .close').click(function () {
            $(this).parent().parent().fadeOut(200);
            $('#dark').fadeOut(200);
        });
    </script>
@endsection
