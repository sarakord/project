<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\createContactRequest;
use App\Slider;
use DemeterChain\C;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact.index', ['contact' => Contact::get()]);
    }


    public function create()
    {
        $slider = Slider::get();
        return view('pages.contact', ['slider' => $slider]);
    }


    public function store(createContactRequest $request)
    {

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->title = $request->title;
        $contact->content = $request->text;
        $contact->save();
        return back();
    }


    public function destroy($id)
    {
        $contact=Contact::where('id' ,$id)->first();
        $contact->Delete();
        return back();
    }
}
