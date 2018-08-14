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

    public function blog(){
        return view('web/blog');
    }

    public function webcast(){
        return view('web/webcast');
    }

    public function about(){
        return view('web/about');
    }

    public function team(){
        return view('web/team');
    }

    public function partners(){
        return view('web/partners');
    }

    public function demo(){
        return view('web/demo');
    }

    public function english(){
        return view('web/english');
    }

    public function portal_partner(){
        return view('web/portal_partners', array('hide_footer' => true));
    }
    
    public function itsm_solution(){
        return view('web/itsm_solution');
    }

    public function demo_guiada(){
        return view('web/demo_guiada');
    }
    public function request_serial(){
        return view('web/request_serial');
    }
    
    public function program_partner(){
        return view('web/program_partner');
    }
    
}
