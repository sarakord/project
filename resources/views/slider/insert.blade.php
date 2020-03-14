@extends('layouts.crud')

@section('title')
    Slider Insert
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
            margin: 0px 392px;
            background: #eee;
            width: 567px;
        }

        .st {
            margin-top: 27px;
            margin-left: 169px;
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

        .bottom{
            margin-bottom: 10px;
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

    </style>
    <p> Insert Data</p>
    <section>
        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="text" name="title" class="input st"><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <input type="submit" class="input st bottom"><br>
        </form>
    </section>
    <span><a href="{{route('slider.index')}}">Slider Management</a></span>
@endsection
