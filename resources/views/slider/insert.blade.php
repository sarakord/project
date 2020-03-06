@extends('layouts.slider')
@section('title')
    @parent
    INSERT
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
            width: 200px;
            height: 30px;
            cursor: pointer;
        }



    </style>
    <p> Insert Data</p>
    <section>
        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="text" name="title" class="st"><br><br>
            <input type="file" name="image" class="input st"><br>
            <input type="submit" class="input st"><br>
        </form>
    </section>
    <a href="{{route('slider.index')}}">main page</a>
@endsection
