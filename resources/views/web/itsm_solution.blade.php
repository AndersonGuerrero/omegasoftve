@extends('layouts.web.base')
@section('title', 'Solucion ITSM')
@section('content')

    <section class="page-title">
        <div class="" 
             style="opacity:10.0;">
                <img src="{{ URL::to('/') }}/images/background/itsm.jpg" alt="">
        </div>
        <div class="auto-container">
        </div>
    </section>
    

    <section class="careers-page" style="padding: 0px 0px 0px;">
            <div class="">
                <div class="row clearfix">
                    
                    <!-- <div class="col-md-12 col-sm-12 col-xs-12" style="background:#00325d">
                        <div class="inner">
                          
                            <div class="jobs-widget side-widget">
                                <div class="widget-inner">
                                    <ul id="categorys-tab">
                                        <div class="col-md-3 col-ms-3 col-xs-3">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 5px;">
                                                    <a data-id="select-Información-General" style="text-decoration:none;" class="clearfix seccion-categorys" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/informacion-general.png" alt="">Información General</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-ms-3 col-xs-3">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 5px;">
                                                    <a data-id="select-ITSM-ITIL" style="text-decoration:none;" class="clearfix seccion-categorys" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/itil-itsm.png" alt="">ITSM Alineada con ITIL</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-ms-3 col-xs-3">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 5px;">
                                                    <a data-id="select-Caractristicas" style="text-decoration:none;" class="clearfix seccion-categorys" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/caracteristicas.png" alt="">Caracteristicas</a>
                                                </h2>
                                            </div>
                                        </div>
                                   
                                        <div class="col-md-3 col-ms-3 col-xs-3">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 5px;">
                                                    <a data-id="select-Verciones-y-precios" style="text-decoration:none;" class="clearfix seccion-categorys" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/versiones-y-precios.png" alt="">Versiones y Precios</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div> -->
                    
               
                    <div class="content-side col-md-12 col-sm-12 col-xs-12" style="margin-bottom: -80px">
                        <div class="inner" style="padding-left:0px;">
                            <div class="career-posts">
                            
                                <div class="career-block select-Información-General">
                                    <!-- <section class="services-two" style="padding: 0px; margin-top: -50px;"> 
                                            <div class="auto-container">
                                                <div class="sec-title-two centered" style="margin-bottom: 0px;">
                                                    <h1 style="font-size:30px;padding-top: 65px">Omega ITSM, Provee todo lo necesario
                                                            para la gestión de servicios IT</h1>
                                                </div>
                                                <div class="sec-title centered" style="margin-bottom: 0px">
                                                    <div class="text" style="margin-bottom: 85px; text-align: center">
                                                            Omega ITSM, integra módulos y funcionalidades que le permitirán 
                                                            estandarizar sus procesos y la gestión de servicio, alineándolos 
                                                            con las mejores prácticas de ITIL, de forma fácil y eficaz.
                                                    </div>
                                                </div>
                                            </div>
                                    </section> -->
                                    <!--About Two Section-->    
                                    <!-- <section style="margin-bottom: 60px">
                                            <div class="row" style="display: unset;">
                                                <div class="col-md-6 col-sm-6 col-xs-6"> 
                                                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: end">
                                                        <figure class="icon-box">
                                                                <img  style="height: 260px;margin-top: 26px;" src="{{ URL::to('/') }}/images/icons/gestione-diferentes-procesos.png" alt="">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 size-cap-1">
                                                    <div class="sec-title-two centered2" style="margin-bottom: 10px; text-align: initial;" >
                                                            <h1 style="font-size: 30px;margin-top: 20px; padding-left:15px;padding-right:15px;">
                                                                Centralice la gestión de servicios
                                                            </h1>
                                                    </div>
                                                    <div class="sec-title centered" style="text-align: justify; margin-bottom: 0px">
                                                        <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                                Con omega ITSM, usted podrá centralizar la atención de los diversos procesos de su
                                                                negocio, como lo son requerimientos de servicios, problemas, cambios y proyecto.
                                                                Además, podrá incluir a otras áreas de la compañía diferentes a IT, gracias a nuestra
                                                                funcionalidad de multimesa de servicio.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section> -->
                                    <!--About Two Section-->
                                    <section style="margin-bottom: 60px">
                                        <div class="row" style="display: unset;">
                                            <div class="col-md-6 col-sm-6 col-xs-12  size-cap-2">
                                                <div class="sec-title-two centered3" style="margin-bottom:10px;text-align: initial;"  >
                                                        <h1 style="font-size: 30px;margin-top: 20px;padding-right: 15px;padding-left:15px;">
                                                            Mejore la comunicación con sus usuarios.
                                                        </h1>
                                                </div>
                                                <div class="sec-title centered" style="text-align: justify; margin-bottom: 0px">
                                                    <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                            Facilite la comunicación con sus usuarios finales a través de un portal de autoservicios
                                                            intuitivo, facilitándole la creación y seguimiento de ticket, acceso a información dela base
                                                            de datos de conocimientos y anuncios de interrupciones de servicios programadas o
                                                            generales, entre otros beneficios.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6"> 
                                                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: initial">
                                                    <figure class="icon-box">
                                                            <img style="height: 260px;margin-top: 26px;" src="{{ URL::to('/') }}/images/icons/portal-de-usuarios.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--About Two Section-->
                                    <!-- <section style="margin-bottom: 60px">
                                            <div class="row" style="display: unset;">
                                                <div class="col-md-6 col-sm-6 col-xs-6"> 
                                                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: end">
                                                        <figure class="icon-box">
                                                                <img style="height: 260px;margin-top: 26px;" src="{{ URL::to('/') }}/images/icons/gestion-de-cambios.png" alt="">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12  size-cap-1">
                                                    <div class="sec-title-two centered2" style="margin-bottom: 10px; text-align: initial;">
                                                            <h1 style="font-size: 30px;margin-top: 20px;padding-right: 15px;padding-left:15px;">
                                                                Controle los cambios en su organización
                                                            </h1>
                                                    </div>
                                                    <div class="sec-title centered" style="text-align: justify; margin-bottom: 0px">
                                                        <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                        Las funcionalidades de Gestión de Cambios de Omega ITSM, le permitirá 
                                                        asegurar que todos los cambios de TI se manejen de manera eficiente, 
                                                        con una eficaz gestión del riesgo, reduciendo las demoras, las fallas 
                                                        asociadas y minimizando los problemas relacionados con los cambios.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section> -->

                                    <section style="padding-top: 50px;">
                                        <div class="auto-container">
                                            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                                                <h1 style="font-size:30px;">Obtenga beneficios para su organización con nuestras soluciones</h1>
                                            </div>
                                        </div>
                                    </section>
                                    

                                    <section class="services-two" style="padding: 0px">
                                        <div class="auto-container">     
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/flexibilidad.png" alt=""></figure>
                                                        <h3>Flexibilidad</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                                Nuestras soluciones son fácilmente configurables y 
                                                                personalizables, para que las mismas se ajusten al 
                                                                negocio y no de forma contraria.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/toma_de_decisiones.png" alt=""></figure>
                                                        <h3>Toma de Decisiones</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                                Base la toma de decisiones en información oportuna, precisa y en tiempo real, evitando
                                                                desviaciones y retardos en la prestación de servicio.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/satisfaccion-del-cliente.png" alt=""></figure>
                                                        <h3>Satisfacción del Cliente</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Mejora los tiempos de respuesta, cumpliendo así a cabalidad los acuerdos de niveles de
                                                            servicios y aumentando la satisfacción de tus clientes.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/reduccion_de_costos.png" alt=""></figure>
                                                        <h3>Reducción de Costos</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                                Aumente la productividad y reduzca los costos, eliminando las tareas manuales y la
                                                                duplicación de esfuerzos, retrabajos u otras tareas que impliquen desperdicio de tiempo.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/prestacion-de-servicio.png" alt=""></figure>
                                                        <h3>Prestación de Servicio</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            El usuario final tiene la expectativa de que sus problemas y solicitudes se resuelvan
                                                            rápidamente. La estandarización de los procesos, notificaciones y automatización eliminan la
                                                            dependencia del factor humano para efectuar actividades manuales y reducir los tiempos
                                                            de espera, aumentando así su satisfacción.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/gobernabilidad-control.png" alt=""></figure>
                                                        <h3>Gobernabilidad y Control</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            La estandarización de los procesos basados en mejores prácticas, permiten la
                                                            introducción de controles internos, sobre los cambios efectuados en la infraestructura
                                                            reduciendo los riesgos e interrupciones en el servicio que afecten al negocio.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/eficiencia.png" alt=""></figure>
                                                        <h3>Eficacia</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Las expectativas del usuario final respecto centro de soporte, se basa en cuán rápido se
                                                            resuelven las solicitudes. Omega ITSM posibilitan a los solucionadores sacar el mayor provecho a su día de trabajo, sin necesidad de trabajar más arduamente sino más
                                                            inteligentemente.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/disponibilidad.png" alt=""></figure>
                                                        <h3>Disponibilidad</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Proporcionar a los usuarios finales acceso a un portal de autoservicios, que incluye una
                                                            base de datos de conocimiento con información relevante para la solución de incidencia y
                                                            sumado a la automatización de tareas permiten que el usuario pueda tener ayuda
                                                            disponible, aunque la mesa de servicio no este operativa.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/automatizacion.png" alt=""></figure>
                                                        <h3>Automatización</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Automatice sus procesos de gestión de servicios para TI, de tal manera que cada ticket
                                                            entrante sea automáticamente asignado a la persona o grupo de resolución más
                                                            apropiado dentro de la mesa de servicio.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                     
                                    <section>
                                        <div class="imgback" > 
                                            <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 40px">
                                                <div class="sec-title centered" style="margin-bottom: 0px">
                                                        <h1 style="font-size: 20px;color: #fff;">Demo en Linea</h1>
                                                        <p class="text" style="margin-top: -10px;color: #fff;">
                                                                Prueba nuestra solución sin limitaciones y de forma gratuita 
                                                        </p>
                                                    <a href="{{ URL::to('/') }}/demo/">
                                                        <figure class="icon-box">
                                                                <img src="{{ URL::to('/') }}/images/icons/demo-online.png" alt="">
                                                        </figure>
                                                    </a>
                                                </div>
                                        
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 40px">
                                                <div class="sec-title centered" style="margin-bottom: 0px">
                                                    <h1 style="font-size: 20px;color: #fff;">Demostración Guiada</h1>
                                                    <p class="text" style="margin-top: -10px;color: #fff;">
                                                            Solicite que uno de nuestros expertos le muestren nuestros productos 
                                                    </p>
                                                    <a href="{{ URL::to('/') }}/demo-guiada/">
                                                        <figure class="icon-box">
                                                            <img src="{{ URL::to('/') }}/images/icons/demo-guiada.png" alt="">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    
                                    <section style="margin-bottom: 60px">
                                            <div class="row" style="display: unset;">
                                                <div class="col-md-6 col-sm-6 col-xs-6"> 
                                                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: end">
                                                        <figure class="icon-box">
                                                                <img style="height: 260px;margin-top: 26px;" src="{{ URL::to('/') }}/images/icons/gestion-de-cambios.png" alt="">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12  size-cap-1">
                                                    <div class="sec-title-two centered2" style="margin-bottom: 10px; text-align: initial;">
                                                            <h1 style="font-size: 30px;margin-top: 20px;padding-right: 15px;padding-left:15px;">
                                                                Controle los cambios en su organización
                                                            </h1>
                                                    </div>
                                                    <div class="sec-title centered" style="text-align: justify; margin-bottom: 0px">
                                                        <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                        Las funcionalidades de Gestión de Cambios de Omega ITSM, le permitirá 
                                                        asegurar que todos los cambios de TI se manejen de manera eficiente, 
                                                        con una eficaz gestión del riesgo, reduciendo las demoras, las fallas 
                                                        asociadas y minimizando los problemas relacionados con los cambios.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>


                                    <section class="services-two" style="padding: 0px">
                                        <div class="auto-container">     
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/flexibilidad.png" alt=""></figure>
                                                        <h3>Flexibilidad</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                                Nuestras soluciones son fácilmente configurables y 
                                                                personalizables, para que las mismas se ajusten al 
                                                                negocio y no de forma contraria.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/toma_de_decisiones.png" alt=""></figure>
                                                        <h3>Toma de Decisiones</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                                Base la toma de decisiones en información oportuna, precisa y en tiempo real, evitando
                                                                desviaciones y retardos en la prestación de servicio.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/satisfaccion-del-cliente.png" alt=""></figure>
                                                        <h3>Satisfacción del Cliente</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Mejora los tiempos de respuesta, cumpliendo así a cabalidad los acuerdos de niveles de
                                                            servicios y aumentando la satisfacción de tus clientes.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/reduccion_de_costos.png" alt=""></figure>
                                                        <h3>Reducción de Costos</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                                Aumente la productividad y reduzca los costos, eliminando las tareas manuales y la
                                                                duplicación de esfuerzos, retrabajos u otras tareas que impliquen desperdicio de tiempo.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/prestacion-de-servicio.png" alt=""></figure>
                                                        <h3>Prestación de Servicio</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            El usuario final tiene la expectativa de que sus problemas y solicitudes se resuelvan
                                                            rápidamente. La estandarización de los procesos, notificaciones y automatización eliminan la
                                                            dependencia del factor humano para efectuar actividades manuales y reducir los tiempos
                                                            de espera, aumentando así su satisfacción.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/gobernabilidad-control.png" alt=""></figure>
                                                        <h3>Gobernabilidad y Control</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            La estandarización de los procesos basados en mejores prácticas, permiten la
                                                            introducción de controles internos, sobre los cambios efectuados en la infraestructura
                                                            reduciendo los riesgos e interrupciones en el servicio que afecten al negocio.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/eficiencia.png" alt=""></figure>
                                                        <h3>Eficacia</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Las expectativas del usuario final respecto centro de soporte, se basa en cuán rápido se
                                                            resuelven las solicitudes. Omega ITSM posibilitan a los solucionadores sacar el mayor provecho a su día de trabajo, sin necesidad de trabajar más arduamente sino más
                                                            inteligentemente.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/disponibilidad.png" alt=""></figure>
                                                        <h3>Disponibilidad</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Proporcionar a los usuarios finales acceso a un portal de autoservicios, que incluye una
                                                            base de datos de conocimiento con información relevante para la solución de incidencia y
                                                            sumado a la automatización de tareas permiten que el usuario pueda tener ayuda
                                                            disponible, aunque la mesa de servicio no este operativa.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/automatizacion.png" alt=""></figure>
                                                        <h3>Automatización</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Automatice sus procesos de gestión de servicios para TI, de tal manera que cada ticket
                                                            entrante sea automáticamente asignado a la persona o grupo de resolución más
                                                            apropiado dentro de la mesa de servicio.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div> 
                                <!--Career Block-->
            
                                    

                                </div>
                                <!--Career Block-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
 
@include('web.modals.versiones_precios')
@endsection

@section('javascript')
<script src="{{ URL::to('/') }}/js/itsm.js"></script>
<script>
    function callbackQuotation(data){
        $('#form_quotation').submit()
    }
</script>
@endsection