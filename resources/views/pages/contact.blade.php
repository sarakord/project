@extends('layouts.master')

@section('attach')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('title')
    تماس با ما
@endsection

@section('content')

    @if($errors->any())
        <div class="box validate">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    <div class="box">
        <div class="header">
            <p class="title"> تماس با ما</p>
        </div>
        <div class="right">
            <section>
                <form action="{{route('contact.store')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="نام و نام خانوادگی"><br><br>
                    <input type="text" name="email" placeholder="ایمیل"><br><br>
                    <input type="text" name="title" placeholder="عنوان"><br><br>
                    <textarea name="text" cols="100" rows="20" placeholder="محتوا"></textarea><br><br>
                    <input type="submit" value="ثبت">
                </form>
            </section>
        </div>
        <div class="left">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td>آدرس : </td>
                    <td> مترو شریف , خیابان *** , کوچه *** , پلاک **</td>
                </tr>
                <tr>
                    <td>شماره تماس : </td>
                    <td>۰۲۱-۶۶۰۳۵۱۲۵</td>
                </tr>
                <tr>
                    <td>پست الکترونیک : </td>
                    <td>info@laitec.ir </td>
                </tr>
            </table>
        </div>
    </div>

@endsection
