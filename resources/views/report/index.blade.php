@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/report.index.css')}}">
@endsection

@section('title')
    Report
@endsection

@section('content')

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
        <h1><a href="{{route('main')}}" class="btn">Main Page</a></h1>
        <h1><a href="{{route('gallery.index')}}" class="btn">Gallery</a></h1>
        <h1><a href="{{route('slider.index')}}" class="btn">Slider</a></h1>
        <h1><a href="{{route('contact.all')}}" class="btn">Contact</a></h1>
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
