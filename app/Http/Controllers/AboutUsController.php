<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class AboutUsController extends Controller
{
   public function about(){

       $slider=Slider::get();
       return view('pages.about_us',['slider'=>$slider]);
   }
}
