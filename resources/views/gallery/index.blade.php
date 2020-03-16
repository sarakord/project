@extends('layouts.crud')

@section('title')
    Gallery
@endsection

@section('content')

    <style>
        ul li {
            list-style: none;
            float: right;
        }

        .header {
            width:1014px;
            float: right;
            padding: 0;
            background: #d4dbe2;
            margin-right: 80px;
            line-height: 50px;
        }

        .header li {
            float: left;
            font-size: 17pt;
            text-align: center;
            width: 202px;
            list-style: none;
        }

        .content {
            width: 1014px;
            float: right;
            padding: 0;
            background: #eee;
            margin-right: 80px;
            line-height: 50px;
            margin-top: 0;
        }

        .content li {
            float: left;
            font-size: 11pt;
            text-align: center;
            width: 202px;

        }

        .content img {
            width: 50px;
            height: 50px;
            display: block;
            border: 1px solid black;
            margin-left: 70px;
        }

        input {
            cursor: pointer;
        }

        .fix {
            position: fixed;
            margin-left: 25px;
            margin-top: 70px;
        }

        div h1 {
            width: 152px;
            height: 48px;
            border: 1px solid #791fbd;
            text-align: center;
            padding: 12px;
            cursor: pointer;
        }

        .btn {
            text-decoration: none;
        }

    </style>
<div>
    <ul class="header">
        <li>Id</li>
        <li>Image</li>
        <li>title</li>
        <li>Edit</li>
        <li>Delete</li>
    </ul>
    @foreach($gallery as $item)
        <ul class="content">
            <li>{{$item->id}}</li>

            <li><img src="{{asset('/images/gallery/'.$item->image)}}" ></li>

            <li>{{$item->title}}</li>

            <li>
                <a href="{{route('gallery.edit',$item->id)}}"><input type="submit" value="Edit"></a>
            </li>

            <li>
                <form action="{{route('gallery.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form></li>

        </ul>
    @endforeach
</div>
    <div class="fix">
        <h1><a href="{{route('gallery.create')}}" class="btn">Create</a></h1>
        <h1><a href="{{url('/')}}" class="btn">main page</a></h1>
    </div>
@endsection