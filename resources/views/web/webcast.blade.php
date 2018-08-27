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
                        <h1 style="font-size: 30px">Conozca las principales funcionalidades que ofrece nuestro aplicativo</h1>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Ducimus quam doloremque sequi id debitis voluptatum illum 
                            porro asperiores nostrum, qui ad deleniti, laboriosam cum 
                            saepe temporibus architecto nobis commodi expedita!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Iusto possimus impedit, magni laudantium in deleniti odit 
                            nisi eos ipsa saepe dolores velit voluptates sapiente molestiae 
                            praesentium architecto amet neque sed.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6 col-sm-6 col-xs-6" >
                    <div class="sec-title centered" style="margin-bottom:30px;border:1px solid #c2d1df;">
                        <div class="text" style="font-size: 23px;min-height: 82px;">
                            OmegaITSM, Potencia y simplicidad en una misma herramienta.
                        </div>
                        <div class="inner-box">
                            <figure  class="image-box"><a href=""><img src="{{ URL::to('/') }}/images/resource/webcast-proyectos-con-OITSM.jpg" alt=""></a></figure>
                        </div>
                        <div class="text" style="font-size: 17px; text-align: initial;color:#807d7d; margin-bottom: 15px;padding: 15px;">
                                Duración: 45 min Aprox - Español
                        </div>
                        <div class="text" style="font-size: 20px; text-align: initial;padding: 15px;">
                                <b>Contenido</b>
                        </div>
                        <div class="text" style="text-align: justify; padding: 15px;">
                        Para brindar una atención efectiva y en los tiempos establecidos,
                        Omega ITSM ofrece a su organización un control centralizado de las
                        solicitudes de soporte y garantiza la disponibilidad en las operaciones
                        del negocio, recurso humano capacitado y sistematización de las
                        soluciones a incidencias y problemas presentados. Compatible en las
                        mejores prácticas para la gestión de servicio y único punto de
                        contacto se convertirá en el mejor aliado para su organización. En
                        este Webcast conoceremos:
                        <br>
                        <br>
                        • Visión General de Omega ITSM
                        <br>
                        • Gestiones Itil Incorporadas.
                        <br>
                        • Principales funcionalidades.
                        <br>
                        • Demostración del Aplicativo.
                        </div>
                        <a data-title="OmegaITSM, Potencia y simplicidad en una misma herramienta." data-toggle="modal" data-target="#myModal" style="text-decoration:none;">
                            <div style="height: 70px;background: #2976f5;">
                                <h1 style="color:#fff; padding-top: 20px; font-size: 30px;">Registrate</h1>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="sec-title centered" style="margin-bottom: 30px;    border: 1px solid #c2d1df;">
                            <div class="text" style="font-size: 23px;min-height: 82px;">
                            Integración de Omega Service Desk con Knowledgebase.
                            </div>
                            <div class="inner-box">
                                <figure  class="image-box"><a href=""><img src="{{ URL::to('/') }}/images/resource/webcast-OITSM-pontencia-y-simplicidad-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="text" style="font-size: 17px; text-align: initial;color:#807d7d; margin-bottom: 15px;padding: 15px;">
                                    Duración: 45 min Aprox - Español
                            </div>
                            <div class="text" style="font-size: 20px; text-align: initial;padding: 15px;">
                                    <b>Contenido</b>
                            </div>
                            <div class="text" style="text-align:justify;padding:15px;min-height:366px;">
                            Con el fin de fortalecer el conocimiento de nuestros usuarios y
                            solucionadores, Omega Service Desk integra su módulo
                            Knowledgebase que garantiza el almacenamiento del conocimiento
                            aplicado durante la resolución de las solicitudes, procedimientos
                            diarios, errores conocidos y demás documentación útil para el ahorro
                            de tiempo y esfuerzo. En este Webcast conoceremos:
                            <br>
                            <br>
                            • Base de Conocimiento.
                            <br>
                            • Vinculacion entre Omega Service Desk y Knowledgebase.
                            <br>
                            • Demostracion del aplicativo
                            </div>
                            <a data-title="Integración de Omega Service Desk con Knowledgebase." data-toggle="modal" data-target="#myModal" style="text-decoration:none;">
                                <div style="height: 70px;background: #2976f5;">
                                    <h1 style="color:#fff; padding-top: 20px; font-size: 30px;">Registrate</h1>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>   
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6 col-sm-6 col-xs-6" >
                    <div class="sec-title centered" style="margin-bottom: 30px;    border: 1px solid #c2d1df;">
                        <div class="text" style="font-size: 23px;">
                        Integración de Omega Service Desk con la Gestión de Activos.
                        </div>
                        <div class="inner-box">
                            <figure  class="image-box"><a href=""><img src="{{ URL::to('/') }}/images/resource/webcast-integracion-OSDK-CMDb.jpg" alt=""></a></figure>
                        </div>
                        <div class="text" style="font-size: 17px; text-align: initial;color:#807d7d; margin-bottom: 15px;padding: 15px;">
                                Duración: 45 min Aprox - Español
                        </div>
                        <div class="text" style="font-size: 20px; text-align: initial;padding: 15px;">
                                <b>Contenido</b>
                        </div>
                        <div class="text" style="text-align: justify; padding: 15px;">
                        Para gestionar los activos de la organización Omega Service Desk
                        integra el módulo CMDB, que controla los detalles de la infrestructura
                        de IT teniendo una estrecha interacción con las gestiones de
                        requerimientos,incidentes, problemas y cambios, siendo estas las
                        encargadas de resolver las incidencias presentadas que mantienen
                        actualizada la CMDB. En este Webcast conoceremos:
                        <br>
                        <br>
                        • Gestión de Configuración.
                        <br>
                        • Vinculación entre Omega Service Desk y CMDB.
                        <br>
                        • Demostración del aplicativo.
                        </div>
                        <a data-title="Integración de Omega Service Desk con la Gestión de Activos." data-toggle="modal" data-target="#myModal" style="text-decoration:none;">
                            <div style="height: 70px;background: #2976f5;">
                                <h1 style="color:#fff; padding-top: 20px; font-size: 30px;">Registrate</h1>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="sec-title centered" style="margin-bottom: 30px;    border: 1px solid #c2d1df;">
                            <div class="text" style="font-size:23px;min-height:82px;">
                            Gestionando Proyectos con Omega ITSM.
                            </div>
                            <div class="inner-box">
                                <figure  class="image-box">
                                    <a href="">
                                        <img src="{{ URL::to('/') }}/images/resource/integracion-de-OSDK-con-KB-webcast-2.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="text" style="font-size: 17px; text-align: initial;color:#807d7d; margin-bottom: 15px;padding: 15px;">
                                    Duración: 45 min Aprox - Español
                            </div>
                            <div class="text" style="font-size: 20px; text-align: initial;padding: 15px;">
                                    <b>Contenido</b>
                            </div>
                            <div class="text" style="text-align:justify;padding:15px;min-height:310px;">
                                Nuestra solución de gestión de servicios, Omega ITSM, incluye un
                                modulo para la gestión de proyectos, basados en la metodoligía
                                SCRUM, el cual le permitira registrar, seguir y controlar, cada una de
                                las fase de los proyecto y sus respectivas tareas, asi como los tiempos
                                de ejecución y avance de manera automatizada. En este Webcast
                                conoceremos:
                                <br>
                                <br>
                                • Gestión de Proyectos
                                <br>
                                • Demostración del Aplicativo
                            </div>
                            <a data-title="Gestionando Proyectos con Omega ITSM." data-toggle="modal" data-target="#myModal" style="text-decoration:none;">
                                <div style="height: 70px;background: #2976f5;">
                                    <h1 style="color:#fff; padding-top: 20px; font-size: 30px;">Registrate</h1>
                                </div>
                            </a>
                        </div>
                    </div>
            </div> 
        </div>
    </section>
    @include('web.modals.webcast')
    @endsection
@section('javascript')
<script>
    //alert()
</script>
@endsection
