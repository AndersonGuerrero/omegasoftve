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

    public function blog()
    {
        return view('web/blog');
    }

    public function webcast()
    {
        return view('web/webcast');
    }
    public function newsletter()
    {
        return view('web/newsletter');
    }

    public function about()
    {
        return view('web/about');
    }

    public function team()
    {
        return view('web/team');
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->username;
            $email = $request->email;
            $message = $request->message;
            
            $para      = $name;
            $titulo    = 'Contacto';
            $mensaje   = $message;
            $cabeceras = 'From: contacto@omegasoftve.com' . "\r\n" .
                'Reply-To: contacto@omegasoftve.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            if(mail($para, $titulo, $mensaje, $cabeceras)){
                flash('Mensaje enviado!')->success();
            }else{
                flash('Error en el envio!')->error();
            }
        }
        return view('web/contact');
    }

    public function partners()
    {
        return view('web/partners');
    }

    public function demo()
    {
        return view('web/demo');
    }

}
