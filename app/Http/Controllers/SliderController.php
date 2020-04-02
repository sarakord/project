<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSliderRequest;
use App\Http\Requests\editSliderRequest;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        return view('slider.index', ['slider' => Slider::get()]);
    }


    public function create()
    {
        return view('slider.insert');
    }

    public function store(createSliderRequest $request)
    {
        $slider = new Slider();
        $slider->title = $request->title;
        $file = $request->file('image');
        if (!empty($file)) {
            $image = time() . $file->getClientOriginalName();
            $file->move('images/slider', $image);
            $slider->image = $image;
        }
        $slider->save();
        return redirect()->route('slider.index');
    }


    public function show()
    {

        return view('layouts.master', ['slider' => Slider::get(),]);
    }


    public function edit(Slider $slider)
    {
        return view('slider.edit', ['slider' => $slider]);
    }


    public function update(editSliderRequest $request, $id)
    {
        $update = Slider::where('id', $id)->first();
        $update->title = $request->title;
        $file = $request->file('image');
        if (!empty($file)) {
            $imageDelete = $update->image;
            unlink('images/slider/' . $imageDelete);
            $image = time() . $file->getClientOriginalName();
            $file->move('images/slider', $image);
            $update->image = $image;
        }
        $update->save();
        return redirect()->route('slider.index');
    }

    public function destroy(Slider $slider)
    {
        $delete = $slider->image;
        unlink('images/slider/' . $delete);
        $slider->forceDelete();
        return back();
    }

    public function trash($id)
    {
        $delete = Slider::where('id', $id)->first()->delete();
        return back();
    }
}
