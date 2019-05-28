<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ManualController extends Controller{

    public function index(){
        return view('web/manuales');
    }

}