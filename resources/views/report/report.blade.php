@extends('layouts.master')

@section('report')

    <div class="main">
            @foreach($report as $item)
                <h1>{{$item->title}}</h1>
            @endforeach
    </div>

@endsection
