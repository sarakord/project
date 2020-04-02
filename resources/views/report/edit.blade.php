@extends('layouts.crud')

@section('title')
    Report Edit
@endsection

@section('content')

    <style>

        .validate {
            font-family: vazir;
            text-align: center;
            font-size: 11pt;
            color: white;
            background: red;
            direction: rtl;
            width: 91.5%;
            border: 1px solid #ad73bf;
            border-radius: 4px;
            margin: auto;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .title {
            background: #7dc745;
            width: 567px;
            height: 77px;
            font-size: 42pt;
            text-align: center;
            line-height: 70px;
            margin-top: 0;
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

        img{
            width: 100px;
            margin-left: 212px;
            height: 100px;
        }

        .bottom{
            margin-bottom: 10px;
        }

        ul li{
            list-style: none;
            font-size: 13pt;
            text-align: center;
            line-height: 46px;
        }

        ul li:first-child{
            width: 200px;
            height: 50px;
            margin: auto;
            background: #528c27;
        }

        ul li:not(:first-child){
            width: 200px;
            height: 50px;
            float: right;
            margin-right: 107px;
            margin-bottom: 20px;
            background: #228622;
        }

        ul li a{
            text-decoration: none;
            color: white;
        }

    </style>

    @if($errors->any())
        <div class=" validate">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    <section>
        <p class="title"> Edit Report</p>
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
            <input type="submit" class="input st bottom"><br>
        </form>
    </section>

    <ul>
        <li><a href="{{route('report.index')}}">Report Management</a></li>
        <br>
        <li><a href="{{route('main')}}">Main Page</a></li>
        <li><a href="{{route('slider.index')}}">Slider</a></li>
        <li><a href="{{route('gallery.index')}}" >Gallery</a></li>
        <li><a href="{{route('contact.all')}}" >Contact</a></li>
    </ul>
@endsection
