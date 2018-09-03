@extends('layouts.web.base')
@section('title', 'Contacto')
@section('content')
    <section class="page-title">
        <div class="" style="opacity: 10.0;">
        <img src="{{ URL::to('/') }}/images/background/img-contactenos.jpg" alt="">
        </div>
        <div class="auto-container">
        	
            <!--<div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="index-3.html">Volver</a></li>
                    <li class="active">Contacto</li>
                </ul>
            </div>-->
        </div>
    </section>
    
    <section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12" style="padding-right: 20px">
                   <div class="sec-title centered">
                       <h1 style="margin-top: 50px">Envianos un mensaje</h1>
                       <div class="text">Contacto directo con rápida respuesta.</div>
                   </div>
                   <div class="form-style-one quote-form">
                   {{ Form::open(array('route' => 'contact.send', 'id' => 'form-contact')) }}
                       <form method="post" action="" id="contact-form">
                           <div class="row clearfix">
                               <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                   <input type="text" name="username" value="" placeholder="Nombre y Apellido" required>
                               </div>
                               <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                   <input type="text" name="email" value="" placeholder="Correo Electronico" required>
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <textarea name="message" placeholder="Mensaje"></textarea>
                               </div>
                               <div
                                    class="recaptcha-hide" 
                                    id="g-recaptcha-contact"
                                    data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                    data-callback="send_contact"
                                    data-size="invisible">
                                </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <div class="text-center">
                                       <button 
                                       type="submit"
                                       class="theme-btn btn-style-two btn-send">Enviar
                                       </button>
                                    </div>
                               </div>
                           </div>
                           {{ Form::close() }}
                   </div>
                </div>
                
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title centered">
                        <h1 style="margin-top: 50px">Información de Contacto</h1>
                        <div style="margin-top: 109px;">
                            <h2 style="text-align: -webkit-left;color: #00325d;margin-left: 37px;">Direccion:</h2>
                            <div class="text" style="text-align: initial; margin-top: -15px; margin-left: 37px; ">Calle páez #24 entre calle carabaño y leopoldo tosta sector centro. villa de cura, venezuela.</div>
                        </div>
                        <div style="margin-top: 5px;">
                            <h2 style="text-align: -webkit-left; margin-top: 10px;color: #00325d; margin-left: 37px; ">Telefono:</h2>
                            <div class="text" style="text-align: initial; margin-top: -15px; margin-left: 37px;">(58) 244 386 8448</div>
                        </div>
                        <div style="margin-top: 5px;">
                            <h2 style="text-align: -webkit-left; margin-top: 10px; color: #00325d;margin-left: 37px;">Email:</h2>
                            <div class="text" style="text-align: initial; margin-top: -15px;margin-left: 37px;">info@omegasoftve.com</div>
                        </div>
                    </div>
                </div>
            </div>
            
           <!-- <div class="form-container">

            </div>-->
        </div>
    </section>
    
    <section class="map-section">
                <div class="map-outer">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8062660010555!2d-67.48272563389337!3d10.032839996414316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e801b7ed443bcc5%3A0xd3b7679524d544da!2sOmegasoft+C.A!5e0!3m2!1ses!2sve!4v1532615909272" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                
        </section>
@endsection

@section('javascript')
<script>
    function send_contact(){
        $('#form-contact').submit()
    }
</script>
@endsection