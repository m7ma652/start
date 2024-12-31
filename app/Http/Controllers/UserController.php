<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello(){
        dd("welcome from usercontroller");
    }
}
