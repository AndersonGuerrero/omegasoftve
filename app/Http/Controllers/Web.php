<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller
{
    public function index()
    {
        //return view('welcome',array('name' => $name));
        return view('web/index');
    }
}
