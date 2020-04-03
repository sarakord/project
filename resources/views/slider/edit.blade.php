@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/slider.edit.css')}}">
@endsection

@section('title')
    Slider Edit
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
        <p class="title"> Edit Slide</p>
        <form action="{{route('slider.update',$slider->id )}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" name="title" class="st input" value=" {{$slider->title}}"><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <div>
                <img src="{{asset('images/slider/'.$slider->image)}}" alt="">
            </div>
            <input type="submit" class="input bottom st"><br>
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
