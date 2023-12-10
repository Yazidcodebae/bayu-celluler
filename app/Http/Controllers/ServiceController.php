<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service');
    }

    public function servicedetail()
    {
        return view('servicedetail');
    }
}
