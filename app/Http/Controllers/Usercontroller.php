<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function land(){
        return view ('land');
    }

    public function regis(){
        return view('regis ');
    }
}
