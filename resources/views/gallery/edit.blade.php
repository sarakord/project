@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/gallery.edit.css')}}">
@endsection

@section('title')
    Gallery Edit
@endsection

@section('content')

    @if($errors->any())
        <div class=" validate">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    <section>
        <p class="title"> Edit Gallery</p>
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

    <ul>
        <li><a href="{{route('gallery.index')}}">Gallery Management</a></li>
        <br>
        <li><a href="{{route('main')}}">Main Page</a></li>
        <li><a href="{{route('slider.index')}}">Slider</a></li>
        <li><a href="{{route('report.index')}}">Report</a></li>
        <li><a href="{{route('contact.all')}}">Contact</a></li>
    </ul>

@endsection
