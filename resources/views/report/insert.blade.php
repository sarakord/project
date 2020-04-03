@extends('layouts.crud')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/report.insert.css')}}">
@endsection

@section('title')
    Report Insert
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
        <p class="title"> Create Report</p>
        <form action="{{route('report.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="text" name="title" class="st input" placeholder="عنوان"><br><br>
            <input type="text" name="brief" class="st input" placeholder="خلاصه"><br><br>
            <textarea name="description" cols="100" rows="20" class="st text" placeholder="محتوا"></textarea><br><br>
            <input type="file" name="image" class="img_input st"><br>
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
