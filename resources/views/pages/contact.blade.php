@extends('layouts.master')

@section('title')
    تماس با ما
@endsection

@section('content')

    <style>

        .validate{
            font-family: vazir;
            text-align: center;
            font-size: 11pt;
            color: white;
            background: red !important;
        }

        .box {
            width: 91.5%;
            background: #eae3e5;
            position: relative;
            top: 110px;
            margin-right: 53px;
            border: 1px solid #ad73bf;
            float: right;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .box .header {
            border-bottom: 1px solid #cdbbd8;
            height: 65px;
        }

        .box .title {
            font-size: 15pt;
            font-weight: bold;
            font-family: vazir;
            padding-right: 20px;
            line-height: 23px;
            text-align: right;
            float: right;
        }

        .right {
            width: 45%;
            float: right;
            margin-top: 42px;
        }

        .right form {
            text-align: right;
        }

        .right input:not(:last-child) {
            width: 360px;
            height: 38px;
            direction: rtl;
            margin-right: 75px;
            padding-right: 10px;
            font-family: vazir;
            cursor: pointer;
            background-color: #f1ccfd;
            border: 1px solid #9814dc;
        }

        .right textarea {
            cursor: pointer;
            margin-right: 75px;
            width: 360px;
            height: 200px;
            direction: rtl;
            padding-right: 10px;
            font-family: vazir;
            background-color: #f1ccfd;
            border: 1px solid #9814dc;

        }

        .right section form input:last-child {
            margin-bottom: 20px;
            margin-right: 213px;
            width: 65px;
            height: 35px;
            cursor: pointer;
            font-family: vazir;
            background-color: #f1ccfd;
            border: 1px solid #9814dc;
        }

        .left {
            border-right: 1px solid #cdbbd8;
            float: left;
            margin-top: 70px;
            width: 46%;
            height: 300px;
        }

        .left table{
            direction: rtl;
            font-family: vazir;
            line-height: 68px;
            padding-left: 80px;
            margin-top: 40px;
        }

        .left table td{
            padding-left: 20px;
        }

    </style>

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
