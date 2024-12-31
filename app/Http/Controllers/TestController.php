<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function print($name='defaultName')
    {
        dd("hello $name from print function");
    }
}
