@extends('layouts.web.base')
@section('title', 'Demo guiada')
@section('content')

    <!--Page title-->
    <section class="page-title" style="height:530px;">
        <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/demostracion-guiada.jpg); opacity: 10.0;"></div>
    </section>


    <section class="contact-section" style="padding: 0px;">
            <div class="auto-container">
                    <div class="sec-title-two centered" style="margin-bottom: 0px; padding: 30px">
                        <h1>Consulte a nuestros especialistas</h1>
                    </div>
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12" style="margin-top: 50px">
                            <div class="sec-title centered">
                                <p class="text" style="text-align: initial;margin-top: 20px;font-size: 16px;">
                                    Ponemos a su disposición nuestro equipo de 
                                    profesionales totalmente capacitados con años 
                                    de experiencia que le guiarán de forma didáctica 
                                    e intercativa. 
                                </p>
                                <p class="text" style="text-align: initial;margin-top: 20px;font-size: 16px;">
                                    Para conocer las principales funcionalidades 
                                    de nuestro software Omega ITSM, enmarcado en 
                                    las mejores práctica ITIL. 
                                </p>
                                <p class="text" style="text-align: initial;margin-top: 20px;font-size: 16px;">
                                    Solo debes completar el registro y solicitar 
                                    una demo guiada y descubrir nuevas funcionalidades 
                                    y soluciones.. 
                                </p>
                            </div>
                    </div>

                    <div class="col-md-7 col-sm-7 col-xs-12" style="margin-top: 60px;">
                       <div class="form-style-one quote-form">
                       {{ Form::open(array('route' => 'demo.send', 'id' => 'form_demo')) }}
                            <div
                                class="recaptcha-hide" 
                                id="g-recaptcha-demo"
                                data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                data-callback="callbackDemo"
                                data-size="invisible">
                            </div>     
                            <div class="row clearfix">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" value="" placeholder="Nombre y Apellido" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="company" value="" placeholder="Compañia" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Correo Electronico" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea style="height: 130px;" name="message" required placeholder="Escriba su Mensaje"></textarea>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="text-center">
                                    <button type="submit" class="theme-btn btn-style-two btn-send">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                       </div>
                    </div>
                    
                </div>
                
               <!-- <div class="form-container">
    
                </div>-->
            </div>
        </section>
    
@endsection

@section('javascript')
<script>
    function callbackDemo(data){
        $('#form_demo').submit()
    }
</script>
@endsection