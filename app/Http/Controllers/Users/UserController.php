<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello()
    {
        dd("welcome from usercontroller from user folder !");
    }
}
