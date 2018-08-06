<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class NewsletterController extends Controller{

    public function newsletter(){
        return view('web/newsletter');
    }

    public function newsletterPost(Request $request){
        if ($request->isMethod('post')) {
            if($request->input('g-recaptcha-response')){         
                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $dataForPost = array(
                    'secret'=>'6LcjmmgUAAAAAETnnlZuC4HbCzPouXEJwPMqvMzV',
                    'response'=>$request->input('g-recaptcha-response'),
                    'remoteip'=>''
                );
                $options = array(
        		'http' => array(
        			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        			'method'  => 'POST',
        			'content' => http_build_query($dataForPost),
    			    )
			    );

                $context  = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $array = json_decode($result, true);
                if($array['success']){
                    $this->validate($request, [
                        'email' => 'required|email'
                    ]);
                    $message = [
                        'title' => 'Newsletter Omegasoftve',
                        'content' => $request->email
                    ];
                    $email = $request->email;
                    
                    Mail::send('layouts.email', $message, function ($message) use ($email) {
                        $message->from($email, 'newsletter');
                        $message->subject('Newsletter Omegasoftve');
                        $message->to('newsletter@omegasoftve.com')->cc($email);
                    });
                    flash('Gracias por Suscribirte!')->success();
                }else{
                    flash('Validacion de Captcha...!')->error();
                }
            }else{
                flash('Validacion de Captcha...!')->error();
            }
        }
        return back();
    }
}