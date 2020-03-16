@extends('layouts.crud')

@section('title')
    Gallery Edit
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
            margin-left: 176px;
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

        .img_input {
            width: 310px;
            height: 40px;
            cursor: pointer;
            margin-left: 212px;
        }

        .bottom {
            margin-bottom: 10px;
        }

        span {
            background-color: darkgreen;
            width: 200px;
            height: 50px;
            text-align: center;
            line-height: 45px;
            margin: 40px auto;
            display: block;
        }

        span a {
            text-decoration: none;
            color: white;
        }

    </style>
    <p> Update Data</p>
    <section>
        <form action="{{route('gallery.update',$gallery->id )}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" name="title" class="input st" value=" {{$gallery->title}}"><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <div>
                <img src="{{asset('images/gallery/'.$gallery->image)}}" alt="">
            </div>
            <input type="submit" class="input st bottom"><br>
        </form>
    </section>
    <span><a href="{{route('report.index')}}">Gallery Management</a></span>
@endsection