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

    public function soport()
    {
        return view('web/soport');
    }

    public function clients()
    {
        return view('web/clients');
    }

    public function success_stories()
    {
        return view('web/success_stories');
    }
}
