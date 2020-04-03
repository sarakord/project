@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/report.edit.css')}}">
@endsection

@section('title')
    Report Edit
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
        <p class="title"> Edit Report</p>
        <form action="{{route('report.update',$report->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" name="title" value="{{$report->title}}" class="st input"><br><br>
            <input type="text" name="brief" value="{{$report->Brief}}" class="st input"><br><br>
            <textarea name="description" cols="100" rows="20"  class="st text">{{$report->description}}</textarea><br><br>
            <input type="file" name="image" class="img_input st"><br>
            <div>
                <img src="{{asset('images/report/'.$report->image)}}" alt="">
            </div>
            <input type="submit" class="input st bottom"><br>
        </form>
    </section>

    <ul>
        <li><a href="{{route('report.index')}}">Report Management</a></li>
        <br>
        <li><a href="{{route('main')}}">Main Page</a></li>
        <li><a href="{{route('slider.index')}}">Slider</a></li>
        <li><a href="{{route('gallery.index')}}" >Gallery</a></li>
        <li><a href="{{route('contact.all')}}" >Contact</a></li>
    </ul>
@endsection
