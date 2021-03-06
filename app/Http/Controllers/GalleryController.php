<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\createGalleryRequest;
use App\Http\Requests\editGalleryRequest;
use App\Slider;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        return view('gallery.index', ['gallery' => Gallery::get()]);
    }


    public function create()
    {
        return view('gallery.insert');
    }


    public function store(createGalleryRequest $request)
    {
        $gallery = new Gallery();
        $gallery->title = $request->title;
        $file = $request->file('image');
        if (!empty($file)) {
            $image = time() . $file->getClientOriginalName();
            $file->move('images/gallery', $image);
            $gallery->image = $image;
        }
        $gallery->save();
        return redirect()->route('gallery.index');
    }


    public function show()
    {
        //
    }


    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', ['gallery' => $gallery]);
    }


    public function update(editGalleryRequest $request, $id)
    {
        $gallery = Gallery::findorfail($id);
        $gallery->title = $request->title;
        $file = $request->file('image');
        if (!empty($file)) {
            $imageDelete = $gallery->image;
            unlink('images/gallery/' . $imageDelete);
            $image = time() . $file->getClientOriginalName();
            $file->move('images/gallery', $image);
            $gallery->image = $image;
        }
        $gallery->save();
        return redirect('/gallery');
    }


    public function destroy(Gallery $gallery)
    {
        $image = $gallery->image;
        unlink('images/gallery/' . $image);
        $gallery->forceDelete();
        return back();

    }


    public function ShowGallery(){

        $slider = Slider::get();
        return view('pages.gallery', ['gallery' => Gallery::get() , 'slider' => $slider]  ) ;
    }
}
