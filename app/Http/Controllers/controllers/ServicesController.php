<?php

namespace App\Http\Controllers\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() { // 
        return view('web.services');
    }
}
