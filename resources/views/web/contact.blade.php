@extends('layouts.web.base')
@section('title', 'Contacto')
@section('content')
    <section class="page-title" style="height:530px;">
        <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/img-contactenos.jpg); opacity: 10.0;">
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
                       <form method="post" action="http://themebunch.com/html/fico/sendemail.php" id="contact-form">
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
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <div class="text-center">
                                       <button type="submit" class="theme-btn btn-style-two">Enviar</button>
                                    </div>
                               </div>
                           </div>
                       </form>
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
@endsection