@extends('layouts.crud')

@section('title')
    Slider Edit
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

        div {
            margin-left: 213px;
        }

         div img {
            width: 100px;
            height: 100px;
        }


    </style>
    <p> Update Data</p>
    <section>
        <form action="{{route('slider.update',$slider->id )}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" name="title" class="st" value=" {{$slider->title}}"><br><br>
            <input type="file" name="image" class="input st"><br>
            <div>
                <img src="{{asset('images/slider/'.$slider->image)}}" alt="">
            </div>
            <input type="submit" class="input st"><br>
        </form>
    </section>
    <div class="fix">
        <h1><a href="{{route('slider.index')}}" class="btn">Data</a></h1>
        <h1><a href="{{url('slider/{slider}')}}" class="btn">Slider</a></h1>
    </div>
@endsection
