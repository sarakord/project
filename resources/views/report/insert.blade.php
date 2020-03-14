@extends('layouts.crud')

@section('title')
    Report Insert
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
        }

        .input {
            width: 310px;
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

        .bottom{
            margin-bottom: 10px;
        }

    </style>
    <p> Insert Data</p>
    <section>
        <form action="{{route('report.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="text" name="title" class="st input"><br><br>
            <input type="text" name="brief" class="st input"><br><br>
            <textarea name="description" cols="100" rows="20" class="st text"></textarea><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <input type="submit" class="input st bottom"><br>
        </form>
    </section>
    <span><a href="{{route('report.index')}}">Report Management</a></span>
@endsection
