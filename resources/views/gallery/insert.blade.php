@extends('layouts.crud')

@section('title')
    Gallery Insert
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
            margin-left: 169px;
        }


        .bottom{
            margin-bottom: 10px;
        }

        .input {
            width: 284px;
            height: 40px;
            cursor: pointer;
            direction: rtl;
            font-family: vazir;
        }

        .img_input{
            width: 310px;
            height: 40px;
            cursor: pointer;
            margin-left: 212px;
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
        <p class="title"> Create Gallery </p>
        <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="text" name="title" class="st input" placeholder="عنوان"><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <input type="submit" class="input st bottom"><br>
        </form>
    </section>

    <ul>
        <li><a href="{{route('gallery.index')}}">Gallery Management</a></li>
        <br>
        <li><a href="{{route('main')}}">Main Page</a></li>
        <li><a href="{{route('slider.index')}}">Slider</a></li>
        <li><a href="{{route('report.index')}}" >Report</a></li>
        <li><a href="{{route('contact.all')}}" >Contact</a></li>
    </ul>

@endsection
