@extends('layouts.crud')

@section('title')
    Slider Edit
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
            margin-top: 27px;
            margin-left: 180px;
        }

        .input {
            width: 200px;
            height: 30px;
            cursor: pointer;
        }

        div {
            margin-left: 213px;
        }

         div img {
            width: 100px;
            height: 100px;
        }

        .img_input{
            width: 310px;
            height: 40px;
            cursor: pointer;
            margin-left: 212px;
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
        <p class="title"> Edit Slide</p>
        <form action="{{route('slider.update',$slider->id )}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" name="title" class="st input" value=" {{$slider->title}}"><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <div>
                <img src="{{asset('images/slider/'.$slider->image)}}" alt="">
            </div>
            <input type="submit" class="input bottom st"><br>
        </form>
    </section>

    <ul>
        <li><a href="{{route('slider.index')}}">Slider Management</a></li>
        <br>
        <li><a href="{{route('main')}}">Main Page</a></li>
        <li><a href="{{route('report.index')}}">Report</a></li>
        <li><a href="{{route('gallery.index')}}" >Gallery</a></li>
        <li><a href="{{route('contact.all')}}" >Contact</a></li>
    </ul>

@endsection
