<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class PartnerController extends Controller{
    
    public function index(){
        return view('web/partners');
    }
    
    public function program(){
        return view('web/program_partner');
    }

    public function portal(){
        return view('web/portal_partners', array('hide_footer' => true));
    }

    public function programPost(Request $request){
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
                        'company' => 'required',
                        'person_contact' => 'required',
                        'email' => 'required|email',
                        'phone' => 'required',
                        'cel' => 'required',
                        'country' => 'required',
                        'city' => 'required',
                        'web_page' => 'required',
                        'message' => 'required'
                    ]);
                    $message = [
                        'title' => 'Registro Partner Omegasoftve',
                        'content' => 
                        'Compañia: '. $request->company.'<br>'.
                        'Persona de contacto: '. $request->person_contact.'<br>'.
                        'Email: '. $request->email.'<br>'.
                        'Telefono: '. $request->phone.'<br>'.
                        'Celular: '. $request->cel.'<br>'.
                        'Pais: '. $request->country.'<br>'.
                        'City: '. $request->city.'<br>'.
                        'Pagina web: '. $request->web_page.'<br>'.
                        'Mensaje: '. $request->message.'<br>'                        
                    ];
                    $email = $request->email;
                    
                    Mail::send('layouts.email', $message, function ($message) use ($email, $request) {
                        $message->from($email, 'Registro Partner');
                        $message->subject('Registro Partner Omegasoftve');
                        $message->to('registro.partner@omegasoftve.com')->cc($email);
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