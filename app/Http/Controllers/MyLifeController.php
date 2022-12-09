<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyLifeController extends Controller
{
    public function index()
    {
        return view('life-so-far');
    }

}