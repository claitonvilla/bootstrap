<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        dd('hello world');
    }

    public function empresa()
    {
        
        return view('empresa');
    }
}
