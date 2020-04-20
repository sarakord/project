@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/gallery.index.css')}}">
@endsection

@section('title')
    Gallery
@endsection

@section('content')

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
                </form>
            </li>

        </ul>
    @endforeach
</div>
    <div class="fix">
        <h1><a href="{{route('gallery.create')}}" class="btn">Create</a></h1>
        <h1><a href="{{route('main')}}" class="btn">Main Page</a></h1>
        <h1><a href="{{route('report.index')}}" class="btn">Report</a></h1>
        <h1><a href="{{route('slider.index')}}" class="btn">Slider</a></h1>
        <h1><a href="{{route('contact.all')}}" class="btn">Contact</a></h1>
    </div>
@endsection
