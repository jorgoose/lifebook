<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyLifeController extends Controller
{
    public function index()
    {
        return view('life-so-far');
    }

    public function constructingYourTimeline()
    {
        return view('life-so-far.constructing-your-timeline');
    }

    public function deconstructingTimeline()
    {
        return view('life-so-far.deconstructing-timeline');
    }

    public function implicitBias()
    {
        return view('life-so-far.implicit-bias');
    }

}