@extends('layouts.crud')

@section('title')
    Report Edit
@endsection

@section('content')

    <style>
        p {
            background: #7dc745;
            width: 567px;
            height: 77px;
            font-size: 42pt;
            text-align: center;
            line-height: 70px;
            margin: 42px auto 0;
        }

        section {
            margin: 0px 383px;
            background: #eee;
            width: 567px;
        }

        .st {
            margin: 27px 0px 0px 139px;
            font-family: vazir;
        }

        .input {
            width: 310px;
            height: 40px;
            cursor: pointer;
            direction: rtl;
        }

        .img_input{
            width: 310px;
            height: 40px;
            cursor: pointer;
            margin-left: 212px;
        }

        .text{
            width: 310px;
            height: 200px;
            direction: rtl;
            font-family: vazir;
        }

        span{
            background-color: darkgreen;
            width: 200px;
            height: 50px;
            text-align: center;
            line-height: 45px;
            margin: 40px auto;
            display: block;
        }

        span a{
            text-decoration: none;
            color: white;
        }

        img{
            width: 100px;
            margin-left: 212px;
            height: 100px;
        }

        .buttom{
            margin-bottom: 10px;
        }

    </style>
    <p> Edit Data</p>
    <section>
        <form action="{{route('report.update',$report->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" name="title" value="{{$report->title}}" class="st input"><br><br>
            <input type="text" name="brief" value="{{$report->Brief}}" class="st input"><br><br>
            <textarea name="description" cols="100" rows="20"  class="st text">{{$report->description}}</textarea><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <div>
                <img src="{{asset('images/report/'.$report->image)}}" alt="">
            </div>
            <input type="submit" class="input st buttom"><br>
        </form>
    </section>
    <span><a href="{{route('report.index')}}">Report Management</a></span>
@endsection
