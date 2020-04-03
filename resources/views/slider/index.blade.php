@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/slider.index.css')}}">
@endsection

@section('title')
    Slider
@endsection

@section('content')

<div>
    <ul class="header">
        <li>Id</li>
        <li>Image</li>
        <li>Description</li>
        <li>Edit</li>
        <li>Trash</li>
        <li>Delete</li>
    </ul>
    @foreach($slider as $item)
        <ul class="content">
            <li>{{$item->id}}</li>
            <li><img src="{{asset('/images/slider/'.$item->image)}}" ></li>
            <li>{{$item->title}}</li>
            <li>
                <a href="{{route('slider.edit',$item->id)}}"><input type="submit" value="Edit"></a>
            </li>
            <li>
                <form action="{{route('slider.trash',$item->id)}}" method="post">
                    @csrf
                    @method('post')
                    <input type="submit" value="Trash">
                </form></li>
            <li>
            <li>
                <form action="{{route('slider.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form></li>

        </ul>
    @endforeach
</div>
    <div class="fix">
        <h1><a href="{{route('slider.create')}}" class="btn">Create</a></h1>
        <h1><a href="{{route('main')}}" class="btn">Main Page</a></h1>
        <h1><a href="{{route('gallery.index')}}" class="btn">Gallery</a></h1>
        <h1><a href="{{route('report.index')}}" class="btn">Report</a></h1>
        <h1><a href="{{route('contact.all')}}" class="btn">Contact</a></h1>
    </div>
@endsection
