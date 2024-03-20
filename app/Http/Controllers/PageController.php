<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function viewPagekOne()
    {
        return view('page-one');
    }

    public function viewPagekTwo()
    {
        return view('page-two');
    }
}
