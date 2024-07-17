<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webcontroller extends Controller
{
    public function homefunc(){
        return view('home');
    }
}
