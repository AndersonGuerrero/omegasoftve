<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class TeamController extends Controller{
    
    public function index(){
        return view('web/team');
    }

    public function register(Request $request){
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
                        'email' => 'required|email',
                        'name' => 'required',
                        'resume' => 'required',
                    ]);
                    $message = [
                        'title' => 'Vacantes Omegasoftve',
                        'content' => 
                        'Vacante: '. $request->team_title.'<br>'.
                        'Nombre: '. $request->name.'<br>'.
                        'Email: '. $request->email.'<br>'.
                        'Resumen: '. $request->resume.'<br>'                        
                    ];
                    $email = $request->email;
                    
                    Mail::send('layouts.email', $message, function ($message) use ($email, $request) {
                        $message->from($email, 'Webcast');
                        $message->subject('Vacantes Omegasoftve');
                        $message->to('webcast@omegasoftve.com')->cc($email);

                        $message->attach($request->file('cv')->getRealPath(), [
                            'as' => $request->file('cv')->getClientOriginalName(), 
                            'mime' => $request->file('cv')->getMimeType()
                         ]);
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