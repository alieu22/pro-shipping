<?php

namespace App\Http\Controllers\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() { // you create a function called function
        return view('web.about');
    }
    
}
