<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller{

    public function index(){
        //return view('welcome',array('name' => $name));
        return view('web/index');
    }

    public function soport(){
        return view('web/soport');
    }

    public function clients(){
        return view('web/clients');
    }

    public function success_stories(){
        return view('web/success_stories');
    }

    public function about(){
        return view('web/about');
    }

    public function team(){
        return view('web/team');
    }

    public function english(){
        return view('web/english');
    }

    public function request_serial(){
        return view('web/request_serial');
    }
    
    public function open_ticket(){
        return view('web/open_ticket');
    }

    public function omega_kwoledgebase(){
        return view('web/omega_kwoledgebase');
    }
    public function ticket_tracking(){
        return view('web/ticket_tracking');
    }
    
}
