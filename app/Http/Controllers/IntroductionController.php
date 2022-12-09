<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index()
    {
        return view('introduction');
    }

    public function page1()
    {
        return view('introduction1');
    }

    public function page2()
    {
        return view('introduction2');
    }

    public function page3()
    {
        return view('introduction3');
    }

}
