@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/contact.management.css')}}">
@endsection

@section('title')
    Contact
@endsection

@section('content')

    <div>
        <ul class="header">
            <li>Id</li>
            <li>Name</li>
            <li>Title</li>
            <li>Detail</li>
            <li>Delete</li>
        </ul>
        @foreach($contact as $item)
            <ul class="content">
                <li>{{$item->id}}</li>
                <li>{{$item->name}}</li>
                <li>{{$item->title}}</li>
                <li class="btn">
                    <button value="More" onclick="ShowModal({{$item->id}})">More</button>

                    <div id="detail-{{$item->id}}" class="detail">
                        <h3>{{$item->title}}
                            <span class="close"></span>
                        </h3>
                        <div class="main">
                            <div>
                                <p class="title"> نام : </p>
                                <p class="text">{{$item->name}}</p>
                            </div>
                            <div>
                                <p class="title"> ایمیل : </p>
                                <p class="text">{{$item->email}}</p>
                            </div>
                            <div>
                                <p class="title"> موضوع : </p>
                                <p class="text">{{$item->title}}</p>
                            </div>
                            <span >
                            <p class="title">محتوا :</p>
                            <p class="text">{{$item->content}}</p>
                        </span>
                        </div>
                    </div>

                </li>

                <li>
                    <form action="{{route('contact.delete',$item->id)}}" method="post">
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
        <h1><a href="{{route('main')}}" class="btn">Main Page</a></h1>
        <h1><a href="{{route('gallery.index')}}" class="btn">Gallery</a></h1>
        <h1><a href="{{route('slider.index')}}" class="btn">Slider</a></h1>
        <h1><a href="{{route('report.index')}}" class="btn">Report</a></h1>
    </div>

    <script>
        function ShowModal(id) {
            $('#dark').fadeIn(200);
            $('#detail-' + id).fadeIn(200);
        }


        $('.content .detail .close').click(function () {
            $(this).parent().parent().fadeOut(200);
            $('#dark').fadeOut(200);
        });
    </script>
@endsection
