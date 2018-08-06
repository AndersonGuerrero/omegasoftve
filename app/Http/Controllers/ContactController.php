<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller{

    public function contact()
    {
        return view('web/contact');
    }

    public function contactPost(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'username' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);
            $name = $request->username;
            $message = [
                'title' => 'Contacto Omegasoftve',
                'content' => $request->message
            ];
            $email = $request->email;
            
            Mail::send('layouts.email', $message, function ($message) use ($email, $name) {
                $message->from($email, $name);
                $message->subject('Contacto Omegasoftve');
                $message->to('contacto@omegasoftve.com')->cc($email);
            });
            flash('Gracias por contactarnos...!')->success();
        }
        return back();
    }

}