<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
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
        return view('Theme.contact');
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
        dd($validated_data);
    }
}
