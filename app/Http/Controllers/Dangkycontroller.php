<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dangkycontroller extends Controller
{
    public function index()
    {
        return view('template.dangky');
    }
}
