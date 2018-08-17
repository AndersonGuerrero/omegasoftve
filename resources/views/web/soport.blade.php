@extends('layouts.web.base')
@section('title', 'Soporte')
@section('content')


    <section class="page-title" style="height: 530px;">
        <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/SOPORTE.jpg); opacity: 10.0;"></div>
        <div class="auto-container">
        </div>
    </section>

    <section style="height: 50px;background:#000000;">
        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="col-md-3 col-ms-3 col-xs-3">
                    <div class="sec-title centered">
                        <h2 style="padding-top: 15px;">
                            <a style="color: #fff;text-decoration:none;" href="">Inicio de centro desoporte</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-3 col-ms-3 col-xs-3">
                    <div class="sec-title centered">
                        <h2 style="padding-top: 15px;">
                            <a style="color: #fff;text-decoration:none;" href="http://omegasoftve.com/omega-kwoledgebase/">Base de conocimiento</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-3 col-ms-3 col-xs-3">
                    <div class="sec-title centered">
                        <h2 style="padding-top: 15px;">
                            <a style="color: #fff;text-decoration:none;" href="http://omegasoftve.com/registrar-ticket/">Abrir un nuevo ticket</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-3 col-ms-3 col-xs-3">
                    <div class="sec-title centered">
                        <h2 style="padding-top: 15px;">
                            <a style="color: #fff;text-decoration:none;" href="http://omegasoftve.com/registrar-ticket/">Ver estado de un ticket</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-two"  style="padding: 0px; margin-top: 50px;"> 
            <div class="auto-container">
                <div class="sec-title-two centered" style="margin-bottom: 0px;">
                    <h1 style="font-size:30px" >¿Comó podriamos ayudarte?</h1>
                </div>
                <div class="sec-title centered" style="margin-bottom: 0px">
                    <div class="text" style="font-size: 20px;margin-bottom: 30px;" >
                        Nuestro canales estan estan disponibles para 
                        facilitarte e acceso a nuestro centro de soporte.
                    </div>
                </div>
            </div>
    </section>

    <section style=" margin-bottom: 70px;background: #5aceff12;">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="col-md-6 col-ms-6 col-xs-6">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/soporte-telefonico.jpg" alt=""></figure>
                            </div>
                            <div class="col-md-10 col-ms-10 col-xs-10">
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                    <h1 style="font-size:20px;text-align: initial;" >Soporte Telefónico</h1>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                        Para obtener ayuda o soporte técnico, contactenos a travéz del (58) 244 3868448 ext 602.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6">
                    <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                        <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                            <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/solicitudes-por-correo.jpg" alt=""></figure>
                        </div>
                        <div class="col-md-10 col-ms-10 col-xs-10" style="margin-bottom: -30px;">
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                <h1 style="font-size:20px;text-align: initial;" >Solicitudes por correo</h1>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <div class="text" style="text-align:initial; font-size:15px;">
                                    Para registrar una solicitud, envie un correo a la cuenta 
                                    <a style="text-decoration:none;" href="mailto:solicitud.soporte@omegasoftve.com">solicitud.soporte@omegasoftve.com</a> e indique sus datos de contacto.
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="col-md-6 col-ms-6 col-xs-6" style="margin-top: -31px">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/chat-interctivo.jpg" alt=""></figure>
                            </div>
                            <div class="col-md-10 col-ms-10 col-xs-10">
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                    <h1 style="font-size:20px;text-align: initial;" >Interctivo</h1>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                        A travéz de nuestra página web interactúe con nosotros en nuestro chat en linea.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6" style="margin-top: -31px">
                            <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                                <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/portal-web.jpg" alt=""></figure>
                                </div>
                                <div class="col-md-10 col-ms-10 col-xs-10">
                                    <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                        <h1 style="font-size:20px;text-align: initial;">Portal web</h1>
                                    </div>
                                    <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                        <div class="text" style="text-align:initial; font-size:15px;">
                                            Ingrasa a nuestra base de conocimiento y si eres usuario registrado, 
                                            realiza tus solicitudes y da seguiento <a style="text-decoration:none;" href="http://omegasoftve.com/registrar-ticket/">aqui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
            <div class="row" style="display: unset;">
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="sec-title-two centered" style="margin-bottom: 10px">
                            <h1 style="font-size: 30px">
                                    Beneficios
                            </h1>
                        </div>
                        <div>
                            <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 60px;">
                                    <span class="text">
                                        <span>Resolución de incidencias, inconvenientes técnicos y asesorías.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;margin-left: 60px;">
                                    <span class="text">
                                        <span>Documentación técnica especializada.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;margin-left: 60px;">
                                    <span class="text">
                                        <span>Próximas actualizaciones.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;margin-left: 60px;">
                                    <span class="text">
                                        <span>Presentaciones guiadas con personal y tecnología de vanguardia.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;margin-left: 60px;">
                                    <span class="text">
                                        <span>Capacitaciones con un personal de amplia trayectoria.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;margin-left: 60px;">
                                    <span class="text">
                                        <span>Notificación de mejoras y nuevas funcionalidades.</span>
                                    </span>
                                </div>
                        </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center; margin-bottom: 50px">
                        <div class="sec-title-two centered" style="margin-bottom: 10px">
                            <h1 style="font-size: 30px">Horarios de Atención</h1>
                        </div>
                            <figure class="icon-box">
                                    <img src="{{ URL::to('/') }}/images/icons/bandera.png" alt="">
                            </figure>
                            <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;margin-left: 60px;">
                                <span class="text">
                                    <span></span>
                                </span>
                            </div>
                    </div> 
                </div>
            </div>
    </section>

    <section class="services-two"  style="padding: 0px; margin-top: 50px;"> 
            <div class="auto-container">
                <div class="sec-title centered" style="margin-bottom: 30px;">
                    <h1 style="font-size:30px" >Alcance de soporte</h1>
                </div>
            </div>
    </section>

    <section style=" margin-bottom: 70px;background: #5aceff12;">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="col-md-6 col-ms-6 col-xs-6">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/soporte-telefonico.jpg" alt=""></figure>
                            </div>
                            <div class="col-md-10 col-ms-10 col-xs-10">
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                    <h1 style="font-size:20px;text-align: initial;" >Tipo de soporte</h1>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                        <ul>
                                            <li>• Asesoría Telefónica</li>
                                            <li>• Remoto</li>
                                            <li>• Oficinas del Cliente</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6">
                    <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 28px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                        <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                            <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/niveles-de-servicio.jpg" alt=""></figure>
                        </div>
                        <div class="col-md-10 col-ms-10 col-xs-10" style="margin-bottom: -30px;">
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                <h1 style="font-size:20px;text-align: initial;" >Niveles de servcios</h1>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <div class="text" style="text-align:initial; font-size:15px;">
                                    <ul>
                                        <li>• Solución de dudas y asesoría en el uso de software.</li>
                                        <li>• Incidente complejos en la operación de la herramienta</li>
                                        <li>• Mejora a la plataforma y desarrollos de nuevas funcionalidades.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="col-md-6 col-ms-6 col-xs-6" style="margin-top: -31px">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 16px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/tiempos-de-respuesta-y-solucion.jpg" alt=""></figure>
                            </div>
                            <div class="col-md-10 col-ms-10 col-xs-10">
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                    <h1 style="font-size:20px;text-align: initial;" >Tiempo de Respuesta y Solucion</h1>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                            Para la atención de las solicitudes de nuestros clientes,
                                            OmegaSoft dispone de acuerdos de servicios definidos por
                                            tiempos de respuestas y solución según el servicio afectado.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6" style="margin-top: -31px">
                            <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 16px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                                <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/niveles-de-prioridad.jpg" alt=""></figure>
                                </div>
                                <div class="col-md-10 col-ms-10 col-xs-10">
                                    <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                        <h1 style="font-size:20px;text-align: initial;">Niveles de Prioridad</h1>
                                    </div>
                                        <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                                <div class="text" style="text-align:initial; font-size:15px;">
                                                        Priorizamos las solicitudes en 4 niveles:<br>
                                                        •Critica&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; •Alta<br>
                                                        •Media&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; •Baja
                                                </div>
                                        </div>


                                    </div>
                                </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-two"  style="padding: 0px;"> 
            <div class="auto-container">
                <div class="sec-title centered">
                    <h1 style="font-size:30px" >Limitaciones de soporte</h1>
                </div>
            </div>
    </section>

@endsection