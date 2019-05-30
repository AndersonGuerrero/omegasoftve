<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class IndexController extends Controller{

    public function indexPost(Request $request){
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
                        'contac' => 'required',
                        'phone' => 'required',
                        'email' => 'required|email',
                        'company' => 'required',
                        'country' => 'required',
                        'modalidad' => 'required',
                        'message' => 'required'
                    ]);
                    $message = [
                        'title' => 'Solicitud de Cotización',
                        'content' => 
                        'contac: '. $request->contac.'<br>'.
                        'Telefono: '. $request->phone.'<br>'.
                        'Email: '. $request->email.'<br>'.
                        'Compañia: '. $request->company.'<br>'.
                        'Pais: '. $request->country.'<br>'.
                        'Modalidad: '. $request->modalidad.'<br>'.
                        'Mensaje: '. $request->message.'<br>'                        
                    ];
                    $email = $request->email;
                    
                    Mail::send('layouts.email', $message, function ($message) use ($email, $request) {
                        $message->from($email, 'Solicitud de Cotización');
                        $message->subject('Solicitud de Cotización');
                        $message->to('ventas@omegasoftve.com')->cc($email);
                    });
                    flash('Gracias, te estaremos contactando.')->success();
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