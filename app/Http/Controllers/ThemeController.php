<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about()
    {
        return view('Theme.about');
    }

    public function services()
    {
        return view('Theme.services');
    }

    public function contact()
    {
        // $contact = new contact;
        // $contact->first_name = 'Medo';
        // $contact->last_name = 'medo';
        // $contact->email = 'medo652@gmail.com';
        // $contact->message = 'Hello , This is a message from Medo';
        // $contact->save();
        // contact::create([
        //     'first_name'=>'M7ma',
        //     'last_name'=>'m7ma',
        //     'email'=>'m7ma652@gmail.com',
        //     'message'=> 'Hello , This is a message from M7ma',
        // ]);
        // $contact = contact::find(3);
        // $contact->last_name = 'medoo';
        // $contact->status = '0';
        // $contact->save();
        // $contact = contact::find(3);
        // $contact->update([
        //     'last_name'=>'medo',
        //     'status'=> '1'
        // ]);
        // $contact=contact::find(3);
        // $contact->delete();
        // $data=Contact::get();
        // $contact = contact::find(7);
        // dd($contact->category->name);
        $categories = Category::all();
        return view('Theme.contact', compact('categories'));
    }

    public function store(StoreContactRequest $request)
    {
        $validated_data = $request->validated();
        // $validated_data = $request->validate([
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'nullable',
        // ]);
        // dd($validated_data);
        contact::create($validated_data);
        return back()->with('status', 'Your message has been sent successfully !');
    }
}
