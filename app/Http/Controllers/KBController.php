<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class KBController extends Controller{

    public function index(){
        return view('web/omegaKB');
    }

}