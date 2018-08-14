@extends('layouts.web.base')
@section('title', 'Demo guiada')
@section('content')

    <!--Page title-->
    <section class="page-title" style="height:530px;">
            <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/demostracion-guiada.jpg); opacity: 10.0;"></div>
            <div class="auto-container">

            </div>
    </section>


    <section class="contact-section" style="padding: 0px;">
            <div class="auto-container">
                    <div class="sec-title-two centered" style="margin-bottom: 0px; padding: 30px">
                        <h1>Consulte a nuestros especialistas</h1>
                    </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="sec-title centered">
                                <p class="text" style="    text-align: initial;margin-top: 45px;">
                                    Ponemos a su disposición nuestro equipo de 
                                    profesionales totalmente capacitados con años 
                                    de experiencia que le guiarán de forma didáctica 
                                    e intercativa. 
                                </p>
                                <p class="text" style="text-align: initial;margin-top: 20px">
                                    Para conocer las principales funcionalidades 
                                    de nuestro software Omega ITSM, enmarcado en 
                                    las mejores práctica ITIL. 
                                </p>
                                <p class="text" style="text-align: initial;margin-top: 20px">
                                    Solo debes completar el registro y solicitar 
                                    una demo guiada y descubrir nuevas funcionalidades 
                                    y soluciones.. 
                                </p>
                            </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: 60px;">
                       <div class="form-style-one quote-form">
                       <form method="POST" action="http://localhost:8000/contacto" accept-charset="UTF-8" id="form-contact"><input name="_token" type="hidden" value="Rn2aO0vRxHmfxT7c4A1eWS6AE8KGVlq4Sve2FSbf">
                           
                               <div class="row clearfix">
                                   <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                       <input type="text" name="username" value="" placeholder="Nombre y Apellido" required="">
                                   </div>
                                   <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="compañia" value="" placeholder="Compañia" required="">
                                    </div>
                                   <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                       <input type="text" name="email" value="" placeholder="Correo Electronico" required="">
                                   </div>
                                   <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                       <textarea style="height: 130px;" name="message" placeholder="Escriba su Mensaje"></textarea>
                                   </div>
                                   <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                       <div class="text-center">
                                           <button data-callback="send_form" data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW" class="theme-btn btn-style-two g-recaptcha">Enviar
                                           </button>
                                        </div>
                                   </div>
                               </div>
                               </form>
                       </div>
                    </div>
                    
                </div>
                
               <!-- <div class="form-container">
    
                </div>-->
            </div>
        </section>
    
@endsection