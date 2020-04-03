@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/slider.insert.css')}}">
@endsection

@section('title')
    Slider Insert
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
        <p class="title"> Create Slide</p>
        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="text" name="title" class="input st" placeholder="عنوان"><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <input type="submit" class="input st bottom"><br>
        </form>
    </section>

    <ul>
        <li><a href="{{route('slider.index')}}">Slider Management</a></li>
        <br>
        <li><a href="{{route('main')}}">Main Page</a></li>
        <li><a href="{{route('report.index')}}">Report</a></li>
        <li><a href="{{route('gallery.index')}}" >Gallery</a></li>
        <li><a href="{{route('contact.all')}}" >Contact</a></li>
    </ul>

@endsection
