<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class CmdbController extends Controller{

    public function index(){
        return view('web/cmdb');
    }

}