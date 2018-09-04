@extends('layouts.web.base')
@section('title', 'Webcast')
@section('content')

    <section class="page-title">
        <div class="image-layer" 
            style="opacity: 10.0;">
            <img src="{{ URL::to('/') }}/images/background/webcast.jpg" alt="">
        </div>
        <div class="auto-container">
        </div>
    </section>

    <section>
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 40px;">
                    <div class="sec-title centered" style="margin-bottom: 30px">
                        <h1 style="font-size: 33px">Conozca las principales funcionalidades de nuestras soluciones</h1>
                        <div class="text">
                            Participe en nuestros Webcast  en línea, interactúe con 
                            nuestros especialistas y descubra las soluciones que 
                            traemos para ustedes.
                        </div>
                        <h1 style="padding-top: 35px; font-size: 33px;">Próximos Eventos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 30px">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title centered" style="margin-bottom:30px;border:1px solid #c2d1df;">    
                        <img style="width: 100%;" src="{{ URL::to('/') }}/images/resource/webcast-omega-itsm.jpg">
                        <div class="text" style="text-align: center; padding: 15px;">
                            Con Omega ITSM, usted podrá centralizar la atención de los diversos 
                            procesos de su negocio, como lo son Requerimientos de Servicios, 
                            problemas, cambios y proyecto. Además, podrá incluir a otras áreas 
                            de la compañía diferentes a IT, gracias a nuestra funcionalidad de 
                            multimesa de servicio. Además, podrá proporcionales a sus usuarios 
                            un portal de autoservicio potente y fácil de utilizar.
                        <br>
                        <br>
                        <u><b> Este Webcast conoceremos:</b></u>
                        <br>
                         Visión General de Omega ITSM
                        <br>
                         Gestiones Itil Incorporadas.
                        <br>
                         Principales funcionalidades.
                        <br>
                         Demostración del Aplicativo.
                        </div>
                        <div class="text-center button-conten-webcas">
                            <a href="" class="theme-btn btn-style-three-2 button-webcas" data-title="OmegaITSM, Potencia y simplicidad en una misma herramienta." data-toggle="modal" data-target="#myModal">Registrate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title centered" style="margin-bottom: 30px;border: 1px solid #c2d1df;">
                    <img style="width: 100%;" src="{{ URL::to('/') }}/images/resource/webcast-2.jpg">
                        <div style="min-height:440px;">
                            <div class="text" style="text-align:center;padding:15px;">
                            Con el fin de fortalecer el conocimiento de nuestros usuarios y
                            solucionadores, Omega Service Desk integra su módulo
                            Knowledgebase que garantiza el almacenamiento del conocimiento
                            aplicado durante la resolución de las solicitudes, procedimientos
                            diarios, errores conocidos y demás documentación útil para el ahorro
                            de tiempo y esfuerzo. 
                            <br>
                            <br>
                            </div>
                            <div class="text" style="text-align:center;padding:15px;padding-bottom: 40px;">
                                <u><b> Este Webcast conoceremos:</b></u>
                                <br>
                                    Base de Conocimiento.
                                <br>
                                    Vinculacion entre Omega Service Desk y Knowledgebase.
                                <br>
                                    Demostracion del aplicativo
                            </div>
                            <div class="text-center button-conten-webcas">
                                <a href="" class="theme-btn btn-style-three-2 button-webcas" data-title="Integración de Omega Service Desk con Knowledgebase." data-toggle="modal" data-target="#myModal">Registrate</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>   
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title centered" style="margin-bottom: 30px;    border: 1px solid #c2d1df;">
                            <img style="width: 100%;" src="{{ URL::to('/') }}/images/resource/webcast-3.jpg" alt="">
                        <div class="text" style="text-align: center; padding: 15px;">
                            Para gestionar los activos de la organización, Omega ITSM integra 
                            el módulo CMDB, desde el cual podemos registrar la información de 
                            los activos de la organización, así como sus relaciones, sirviendo 
                            de gran ayuda a las gestiones de requerimientos, incidentes, problemas 
                            y cambios, siendo estas las encargadas de resolver las afectaciones 
                            relacionadas con el negocio y los activos que lo soportan. 
                        <br>
                        <br>
                        <u><b> Este Webcast conoceremos:</b></u>
                        <br>
                         Gestión de Configuración.
                        <br>
                         Vinculación entre Omega Service Desk y CMDB.
                        <br>
                         Demostración del aplicativo.
                        </div>
                        <div class="text-center button-conten-webcas">
                            <a href="" class="theme-btn btn-style-three-2 button-webcas" data-title="Integración de Omega Service Desk con la Gestión de Activos." data-toggle="modal" data-target="#myModal">Registrate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="sec-title centered" style="margin-bottom: 30px;    border: 1px solid #c2d1df;">
                                <img style="width: 100%;" src="{{ URL::to('/') }}/images/resource/webcast-4.jpg" alt="">
                            <div class="text webcast-media2" style="text-align:center;padding:15px;min-height:337px;">
                                    Nuestra solución de gestión de servicios IT, Omega ITSM, incluye un módulo para la 
                                    gestión de proyectos, basados en la metodología SCRUM, el cual le permitirá registrar, 
                                    monitorear y controlar, cada una de las fases del proyecto y sus respectivas tareas, 
                                    así como los tiempos de ejecución y avance de manera automatizada.
                                <br>
                                <br>
                                <u><b> Este Webcast conoceremos:</b></u>
                                <br>
                                 Gestión de Proyectos
                                <br>
                                 Demostración del Aplicativo
                            </div>
                            <div class="text-center button-conten-webcas">
                                <a href="" class="theme-btn btn-style-three-2 button-webcas" data-title="Gestionando Proyectos con Omega ITSM." data-toggle="modal" data-target="#myModal">Registrate</a>
                            </div>
                        </div>
                </div>
            </div> 
        </div>
    </section>
    @include('web.modals.webcast')
    @endsection
