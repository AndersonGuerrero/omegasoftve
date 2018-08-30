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
    

    <section class="careers-page" style="padding:0px">
            <div class="">
                <div class="row clearfix">
                    <!--Left Side-->
                    <div class="col-md-12 col-sm-12 col-xs-12" style="background:#00325d">
                        <div class="inner">
                            <!--Jobs Widget-->
                            <div class="jobs-widget side-widget">
                                <div class="widget-inner">
                                    <ul id="categorys-tab">
                                        <div class="col-md-3 col-ms-3 col-xs-3" style="padding-left:0px; padding-right: 0px;">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 5px;">
                                                    <a data-id="select-Información-General" style="text-decoration:none;" class="clearfix seccion-categorys" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/informacion-general.png" alt="">Información General</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-ms-3 col-xs-3" style="padding-left:0px; padding-right: 0px;">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 5px;">
                                                    <a data-id="select-ITSM-ITIL" style="text-decoration:none;" class="clearfix seccion-categorys" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/itil-itsm.png" alt="">ITSM Alineada con ITIL</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-ms-3 col-xs-3" style="padding-left:0px; padding-right: 0px;">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 5px;">
                                                    <a data-id="select-Caractristicas" style="text-decoration:none;" class="clearfix seccion-categorys" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/caracteristicas.png" alt="">Caracteristicas</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-2 col-ms-2 col-xs-2" style="padding-left:0px; padding-right: 0px;">
                                            <div class="sec-title centered current">
                                                <h2>
                                                    <a data-id="select-Benefcios" style="text-decoration:none;" class="clearfix seccion-categorys" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="" alt="">Beneficios</a>
                                                </h2>
                                            </div>
                                        </div>-->
                                        <div class="col-md-3 col-ms-3 col-xs-3" style="padding-left:0px; padding-right: 0px;">
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
                    </div>
                    
                    <!--Content Side-->
                    <div class="content-side col-md-12 col-sm-12 col-xs-12" style="margin-bottom: -80px">
                        <div class="inner" style="padding-left:0px; ">
                            <div class="career-posts">
                                <!--Career Block-->
                                <div class="career-block select-Información-General">
                                    <section class="services-two" style="padding: 0px; margin-top: -50px;"> 
                                            <div class="auto-container">
                                                <div class="sec-title-two centered" style="margin-bottom: 0px;">
                                                    <h1 style="font-size:30px;padding-top: 65px">Omega ITSM, Provee todo lo necesario
                                                            para la gestión de servicios IT</h1>
                                                </div>
                                                <div class="sec-title centered" style="margin-bottom: 0px">
                                                    <div class="text" style="font-size: 20px;margin-bottom: 85px; text-align: center">
                                                            Omega ITSM, integra módulos y funcionalidades que le permitirán 
                                                            estandarizar sus procesos y la gestión de servicio, alineándolos 
                                                            con las mejores prácticas de ITIL, de forma fácil y eficaz.
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                    <!--About Two Section-->    
                                    <section style="margin-bottom: 60px">
                                            <div class="row" style="display: unset;">
                                                <div class="col-md-6 col-sm-6 col-xs-6"> 
                                                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: end">
                                                        <figure class="icon-box">
                                                                <img  style="height: 260px;margin-top: 26px;" src="{{ URL::to('/') }}/images/icons/gestione-diferentes-procesos.png" alt="">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="sec-title-two centered2" style="margin-bottom: 10px; text-align: initial;" >
                                                            <h1 style="font-size: 30px;margin-top: 20px; padding-left:15px;padding-right:15px;">
                                                                Centralice la gestión de servicios
                                                            </h1>
                                                    </div>
                                                    <div class="sec-title centered" style="text-align: justify; margin-bottom: 0px">
                                                        <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                                Con Omega ITSM, usted podrá centralizar la atención de los diversos procesos de su
                                                                negocio, como lo son Requerimientos de Servicios, problemas, cambios y proyecto.
                                                                Además, podrá incluir a otras áreas de la compañía diferentes a IT, gracias a nuestra
                                                                funcionalidad de multimesa de servicio.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                    <!--About Two Section-->
                                    <section style="margin-bottom: 60px">
                                        <div class="row" style="display: unset;">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
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
                                    <section style="margin-bottom: 60px">
                                            <div class="row" style="display: unset;">
                                                <div class="col-md-6 col-sm-6 col-xs-6"> 
                                                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center">
                                                        <figure class="icon-box">
                                                                <img style="height: 260px;margin-top: 26px;" src="{{ URL::to('/') }}/images/icons/gestion-de-cambios.png" alt="">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="sec-title-two centered2" style="margin-bottom: 10px; text-align: initial;">
                                                            <h1 style="font-size: 30px;margin-top: 20px;padding-right: 15px;padding-left:15px;">
                                                                Controle los cambios en su organización
                                                            </h1>
                                                    </div>
                                                    <div class="sec-title centered" style="text-align: justify; margin-bottom: 0px">
                                                        <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                                Las funcionalidades de Gestión de Cambios de Omega ITSM, le permitirá asegurar que
                                                                todos los cambios de TI se manejen de manera eficiente, con una eficaz gestión del riesgo
                                                                que minimice las demoras, las fallas asociadas y minimice los problemas relacionados con
                                                                los cambios.
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
                                                    <a href="http://localhost:8000/demo/">
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
                                                    <a href="http://localhost:8000/demo-guiada/">
                                                        <figure class="icon-box">
                                                            <img src="{{ URL::to('/') }}/images/icons/demo-guiada.png" alt="">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    
                                    <section>
                                        <div class="auto-container">
                                            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                                                <h1 style="font-size:30px;">Beneficios</h1>
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
                                                            Restablezca los servicios afectados, gestione 
                                                            los incidentes notificados por los usuarios
                                                            resolviendo con eficiencia y eficacia las interrupciones 
                                                            con el menor impacto</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/toma_de_decisiones.png" alt=""></figure>
                                                        <h3>Toma de decisiones</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Proporcione una gestión adecuada a las solicitudes 
                                                            de los usuarios ante las peticiones orientadas a mejoras 
                                                            de los servicios.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/satisfaccion-del-cliente.png" alt=""></figure>
                                                        <h3>Satisfaccion del cliente</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Defina un catálogo de servicio de fácil 
                                                            comprensión para usuarios y solucionadores, 
                                                            donde detalle los servicios ofrecidos por el 
                                                            negocio, grupos solucionadores encargados de la
                                                            atención.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/reduccion_de_costos.png" alt=""></figure>
                                                        <h3>Reduccion de costos</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Establezca contratos de tiempos para la resolución 
                                                            de las solicitudes entre el usuario y TI, los SLA 
                                                            implementados garantizarán el cumplimiento del soporte.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/prestacion-de-servicio.png" alt=""></figure>
                                                        <h3>Prestacion de servicio</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Disponga de un espacio para el almacenamiento 
                                                            de artículos y soluciones que sirva de canal 
                                                            colaborativo para usuarios y solucionadores 
                                                            en la resolución de inquietudes 24*7.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/gobernabilidad-control.png" alt=""></figure>
                                                        <h3>Gobernabilidad control</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Determine las causas raíz de los incidentes 
                                                            recurrentes sobre los activos de su organización, 
                                                            identifique errores conocidos y proporcione 
                                                            soluciones efectivas a problemas.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/eficiencia.png" alt=""></figure>
                                                        <h3>Eficiencia</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Registre, controle y evalúe los cambios sugeridos 
                                                            sobre su infraestructura IT, mejore el servicio e 
                                                            incremente la productividad del usuario.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/disponibilidad.png" alt=""></figure>
                                                        <h3>Disponibilidad</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Planifique el desarrollo de nuevos proyectos para 
                                                            su organización, orientados a la implementación de 
                                                            nuevas tecnologías, programaciones, mejoras de servicio, etc</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/automatizacion.png" alt=""></figure>
                                                        <h3>Automatizacion</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Rastrea y administra todos los elementos de 
                                                            configuración y asigna sus relaciones y dependencias.&nbsp;
                                                            Analice visualmente el impacto de los cambios y las
                                                            interrupciones en la toma de decisiones</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div> 
                                <!--Career Block-->
                                <div class="career-block select-ITSM-ITIL">
                                    <section class="services-two" style="padding: 0px; margin-top: -50px;"> 
                                            <div class="auto-container">
                                                <div class="sec-title centered" style="margin-bottom: 40px;">
                                                    <h1 style="font-size:30px; padding-top: 65px">
                                                        Omega ITSM, ha sido desarrollado para soportar y facilitar la automatización de los procesos,
                                                        basados en las mejores prácticas de ITIL.</h1>
                                                </div>
                                            </div>
                                    </section>

                                    <section class="services-two" style="padding: 0px">
                                        <div class="auto-container">     
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/incidentes.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Incidentes</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Restablezca los servicios afectados, gestione los incidentes 
                                                            notificados por los usuarios resolviendo con eficiencia y 
                                                            eficacia las interrupciones con el menor impacto
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/requerimientos.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Requerimientos</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Proporcione una gestión adecuada a las solicitudes de los usuarios ante las peticiones
                                                            orientadas a mejoras de los servicios.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/catalogo-de-servicio.png" alt=""></figure>
                                                        <h3><a href="">Catálogo de Servicio</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Defina un catálogo de servicio de fácil comprensión para usuarios y solucionadores, donde
                                                            detalle los servicios ofrecidos por el negocio, grupos solucionadores encargados de la
                                                            atención.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/SLA.png" alt=""></figure>
                                                        <h3><a href="">Acuerdo de Niveles de Servicio</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Establezca contratos de tiempos para la resolución de las solicitudes entre el usuario y TI,
                                                            los SLA implementados garantizarán el cumplimiento del soporte.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/bd-conocimiento.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Conocimiento</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Disponga de un espacio para el almacenamiento de artículos y soluciones que sirva de
                                                            canal colaborativo para usuarios y solucionadores en la resolución de inquietudes 24*7.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/problemas.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Problemas</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Determine las causas raíz de los incidentes recurrentes sobre los activos de su
                                                            organización, identifique errores conocidos y proporcione soluciones efectivas a
                                                            problemas.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/cambios.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Cambios</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Registre, controle y evalúe los cambios sugeridos sobre su infraestructura IT, mejore el
                                                            servicio e incremente la productividad del usuario.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/proyectos.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Proyectos</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Planifique el desarrollo de nuevos proyectos para su organización, orientados a la
                                                            implementación de nuevas tecnologías, programaciones, mejoras de servicio, etc
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/CMDB.png" alt=""></figure>
                                                        <h3><a href="">CMDB</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Rastrea y administra todos los elementos de configuración y asigna sus relaciones
                                                            y dependencias. Analice visualmente el impacto de los cambios y las
                                                            interrupciones en la toma de decisiones    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/activos.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Activos</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Lleve el control de todos los elementos de configuración de la infraestructura TI, como
                                                            hardware y software, entre otros. Optimice la utilización de activos, evitando la
                                                            vulnerabilidad.    
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/contratos.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Contratos</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Lleve el control de todos contratos relacionados con los activos, generando alarmas por
                                                            vencimiento, permitiendo conocer y distribuir el costo total de los recursos en las áreas de
                                                            la organización    
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/proveedores.png" alt=""></figure>
                                                        <h3><a href="">Gestión de Proveedores</a></h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Gestione la relación con los proveedores de servicios de los que depende su organización.
                                                            Con la finalidad de alcanzar la mayor calidad y velar por el cumplimiento de los contratos
                                                            próximos a vencer.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <div class="imgback" > 
                                            <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 40px">
                                                <div class="sec-title centered" style="margin-bottom: 0px">
                                                        <h1 style="font-size: 20px;color: #fff;">Demo en Linea</h1>
                                                        <p class="text" style="margin-top: -10px;color: #fff;">
                                                                Prueba nuestra solución sin limitaciones y de forma gratuita 
                                                        </p>
                                                    <a href="http://localhost:8000/demo/">
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
                                                    <a href="http://localhost:8000/demo-guiada/">
                                                        <figure class="icon-box">
                                                            <img src="{{ URL::to('/') }}/images/icons/demo-guiada.png" alt="">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!--Career Block-->
                                <div class="career-block select-Caractristicas">

                                    <section class="services-two" style="padding: 0px; margin-top: -50px;"> 
                                        <div class="auto-container">
                                            <div class="sec-title centered" style="margin-bottom: 85px;">
                                                <h1 style="font-size:30px;padding-top: 65px;">Conozca algunas de las características de Omega ITSM</h1>
                                            </div>
                                        </div>
                                    </section>

                                    <section>
                                            <div class="auto-container">
                                                <div class="row">
                                                    <div class="col-md-12 col-ms-12 col-xs-12" style="margin-top: -50px">
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12 " style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                        <span class="text">
                                                                                            <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/multimesa-de-servicio.png" alt="">Multi mesa de servicio</h1>
                                                                                        </span>
                                                                                    </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               <hr/>
                                                               <div class="row">
                                                                   <div class="col-md-12 col-ms-12 col-xs-12">
                                                                       <div class="sec-title centered">
                                                                         <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                Omega Service Desk permite la gestión de múltiples áreas del negocio desde una
                                                                                misma consolas y base de datos, para dar atención especializada a las solicitudes
                                                                                de los usuarios de la organización.
                                                                         </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                    <span class="text">
                                                                                        <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/reglas-de-negocio.png" alt="">Reglas de Negocios</h1>
                                                                                    </span>
                                                                                </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="sec-title centered">
                                                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                    Defina reglas basadas en los parámetros de configuración para ejecutar de forma
                                                                                    automática el envío de notificaciones vía mail y la generación de alertas a usuarios
                                                                                    y solucionadores.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                    <span class="text">
                                                                                        <h1 style="font-size: 19px;"><img style="padding-right: 0px;padding-left: 10px;" src="{{ URL::to('/') }}/images/icons/encuestas-de-satisfaccion.png" alt="">Encuestas de Satisfacción</h1>
                                                                                    </span>
                                                                                </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="sec-title centered">
                                                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                Conozca el nivel de satisfacción de sus usuarios finales mediante encuestas de
                                                                                satisfacción y evalué el resultado de las mismas, permitiéndole así elevar los
                                                                                niveles de servicios.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12" style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                        <span class="text">
                                                                                            <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/asignacion_automatica.png" alt="">Asignaciones Automáticas</h1>
                                                                                        </span>
                                                                                    </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="sec-title centered">
                                                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                Configure el tipo de asignación para las solicitudes registradas y garantice una
                                                                                distribución automática de las peticiones por especialista con el fin de dar atención
                                                                                inmediata a sus usuarios.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                    <span class="text">
                                                                                        <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/notificaciones.png" alt="">Notificaciones</h1>
                                                                                    </span>
                                                                                </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="sec-title centered">
                                                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                Alerte a los técnicos de TI cuando se creen o se asignen tickets y mantenga
                                                                                informados a sus usuarios finales en cada paso del proceso de atención con
                                                                                notificaciones por correo electrónico.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                                <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                                                            <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                                                <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                        <span class="text">
                                                                                            <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/integracion-ldap.png" alt="">Integración LDAP</h1>
                                                                                        </span>
                                                                                    </div>     
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                                                            <div class="sec-title centered">
                                                                                <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                    Realice la Importación de los usuarios desde el directorio activo, mantenga
                                                                                    actualizada la información realizando la sincronización con Omega ITSM y
                                                                                    agregue detalles sin alterar la estructura original del directorio.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12" style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                        <span class="text">
                                                                                            <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/indicadores-de-gestion.png" alt="">Indicadores de Gestión</h1>
                                                                                        </span>
                                                                                    </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="sec-title centered">
                                                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                Genere de informes con los resultados de las diferentes gestiones, orientados a
                                                                                mejorar los procesos para alcanzar los objetivos de la organización.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                    <span class="text">
                                                                                        <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/dashboard.png" alt="">Dashboard</h1>
                                                                                    </span>
                                                                                </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="sec-title centered">
                                                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                    Obtenga información en tiempo real del estado del centro de soporte, detectando
                                                                                    posibles desviaciones y mejore la toma de decisiones.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                                <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                                                            <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                                                <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                        <span class="text">
                                                                                            <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/procesos-de-aprobaciones.png" alt="">Gestión de Aprobaciones</h1>
                                                                                        </span>
                                                                                    </div>     
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                                                            <div class="sec-title centered">
                                                                                <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                    Proceso de aprobaciones o desaprobaciones requeridas por el centro de soporte
                                                                                    que necesitan la autorización previa de un grupo aprobatorio para dar continuidad
                                                                                    a la solicitud realizada por el usuario.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12" style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                        <span class="text">
                                                                                            <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/portal_de_usuario.png" alt="">Portal de Autoservicio</h1>
                                                                                        </span>
                                                                                    </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="sec-title centered">
                                                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                Reduzca la cantidad de llamadas al centro de soporte, poniendo a disposición de
                                                                                los usuarios finales un portal con capacidades de autoservicios para el registro y
                                                                                seguimiento de ticket.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                    <span class="text">
                                                                                        <h1 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/calendarios-de-trabajo.png" alt="">Calendarios de Servicios</h1>
                                                                                    </span>
                                                                                </div>     
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                                                        <div class="sec-title centered">
                                                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                Permite la configuración de la jornada laboral, utilizada en la organización,
                                                                                facilitando el registro de información relevante asociadas a los días de la semana,
                                                                                días festivos, enfocados en la atención de las solicitudes.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-ms-4 col-xs-4">
                                                                <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                                                            <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                                                <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                                                        <span class="text">
                                                                                            <h1 style="font-size: 20px;"><img style="padding-right: 5px;padding-left:7px;" src="{{ URL::to('/') }}/images/icons/tickets-por-correo.png" alt="">Creación de Ticket por Correo</h1>
                                                                                        </span>
                                                                                    </div>     
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                                                            <div class="sec-title centered">
                                                                                <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                                                    Permita la creación de tickets de forma automática a través de correos
                                                                                    electrónicos, garantizando a los usuarios el registro y seguimiento de las
                                                                                    solicitudes en tiempo real y gestionado por la mesa de servicios.
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

                                    <div class="imgback" > 
                                            <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 40px">
                                                <div class="sec-title centered" style="margin-bottom: 0px">
                                                        <h1 style="font-size: 20px;color: #fff;">Demo en Linea</h1>
                                                        <p class="text" style="margin-top: -10px;color: #fff;">
                                                                Prueba nuestra solución sin limitaciones y de forma gratuita 
                                                        </p>
                                                    <a href="http://localhost:8000/demo/">
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
                                                    <a href="http://localhost:8000/demo-guiada/">
                                                        <figure class="icon-box">
                                                            <img src="{{ URL::to('/') }}/images/icons/demo-guiada.png" alt="">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <!--Career Block-->
                                <div class="career-block select-Benefcios">
                                    <section class="services-two" style="padding: 0px; margin-top: -50px;"> 
                                        <div class="auto-container">
                                            <div class="sec-title centered" style="margin-bottom: 85px;">
                                                <h1 style="font-size:30px;padding-top: 65px;">Todo lo que necesita para el soporte de TI</h1>
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
                                                            Restablezca los servicios afectados, gestione 
                                                            los incidentes notificados por los usuarios
                                                            resolviendo con eficiencia y eficacia las interrupciones 
                                                            con el menor impacto</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/toma_de_decisiones.png" alt=""></figure>
                                                        <h3>Toma de decisiones</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Proporcione una gestión adecuada a las solicitudes 
                                                            de los usuarios ante las peticiones orientadas a mejoras 
                                                            de los servicios.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/satisfaccion-del-cliente.png" alt=""></figure>
                                                        <h3>Satisfaccion del cliente</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Defina un catálogo de servicio de fácil 
                                                            comprensión para usuarios y solucionadores, 
                                                            donde detalle los servicios ofrecidos por el 
                                                            negocio, grupos solucionadores encargados de la
                                                            atención.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/reduccion_de_costos.png" alt=""></figure>
                                                        <h3>Reduccion de costos</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Establezca contratos de tiempos para la resolución 
                                                            de las solicitudes entre el usuario y TI, los SLA 
                                                            implementados garantizarán el cumplimiento del soporte.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/prestacion-de-servicio.png" alt=""></figure>
                                                        <h3>Prestacion de servicio</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Disponga de un espacio para el almacenamiento 
                                                            de artículos y soluciones que sirva de canal 
                                                            colaborativo para usuarios y solucionadores 
                                                            en la resolución de inquietudes 24*7.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/gobernabilidad-control.png" alt=""></figure>
                                                        <h3>Gobernabilidad control</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Determine las causas raíz de los incidentes 
                                                            recurrentes sobre los activos de su organización, 
                                                            identifique errores conocidos y proporcione 
                                                            soluciones efectivas a problemas.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/eficiencia.png" alt=""></figure>
                                                        <h3>Eficiencia</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Registre, controle y evalúe los cambios sugeridos 
                                                            sobre su infraestructura IT, mejore el servicio e 
                                                            incremente la productividad del usuario.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/disponibilidad.png" alt=""></figure>
                                                        <h3>Disponibilidad</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Planifique el desarrollo de nuevos proyectos para 
                                                            su organización, orientados a la implementación de 
                                                            nuevas tecnologías, programaciones, mejoras de servicio, etc</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/automatizacion.png" alt=""></figure>
                                                        <h3>Automatizacion</h3>
                                                        <div style="font-size: 15px;" class="text">
                                                            Rastrea y administra todos los elementos de 
                                                            configuración y asigna sus relaciones y dependencias.&nbsp;
                                                            Analice visualmente el impacto de los cambios y las
                                                            interrupciones en la toma de decisiones</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    

                                </div>
                                <!--Career Block-->
                                <div class="career-block select-Verciones-y-precios">

                                    <section class="services-two" style="padding: 0px; margin-top: -50px;"> 
                                        <div class="auto-container">
                                            <div class="sec-title centered" style="margin-bottom: 50px;">
                                                <h1 style="font-size:30px;padding-top: 65px;">Nuestras versiones se ajustan a empresas de cualquier tamaño</h1>
                                                <div class="text">
                                                        Disponible en las modalidades On Premise | On Demand
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section>
                                        <div class="row">
                                            <div class="col-md-3 col-ms-3 col-xs-3">
                                                <div class="col-md-12 col-ms-12 col-xs-12" style="padding-left: 15px;padding-right:15px">
                                                    <div style="min-height:170px;max-height:170px;">
                                                        <img style="border-top-right-radius:14px;border-top-left-radius: 14px;" src="{{ URL::to('/') }}/images/icons/initial.jpg" alt="">
                                                    </div>
                                                    <div style="min-height:140px;max-height:140px;margin-top: -5px;background:#007aff">
                                                            <div class="sec-title centered" style="text-align: center; margin-bottom: -5px;">
                                                                <h1 style="font-size: 23px; color: #fff; padding-top: 4px">INITIAL</h1>
                                                                <div class="text" style="font-size: 15px; color: #fff;padding-left: 7px; padding-right: 7px;padding-top: 0px;">
                                                                    Ideal para pequeas compañias que empiesan a centralizar el registro de idependencia.
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div style="min-height:465px;max-height:465px;background:#5cbdde54;border-bottom-left-radius: 14px;border-bottom-right-radius: 14px;">
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 15px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de incidentes</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de solicitudes (preticket)</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Portal de autoservicios</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Catálogos de servicios</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Acuerdos de niveles de servisios</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Reglas de negocios (standard)</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>calendario de servicios (único)</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Reportes standard</span>
                                                            </span>
                                                        </div>
                                                        <div class="text-center"><a style="padding: 6px;border-color: #3ccc00;background: #3ccc00;margin-top: 110px;color: #fff" data-id="1" data-toggle="modal" data-target="#myVerciones" style="text-decoration:none;" class="theme-btn btn-style-three"><div style="text-transform: none;padding-left: 5px;padding-right: 5px;">solicitar cotización</div></a></div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-ms-3 col-xs-3">
                                                <div class="col-md-12 col-ms-12 col-xs-12" style="padding-left: 15px;padding-right:15px">
                                                    <div style="min-height:170px;max-height:170px;">
                                                        <img style="border-top-right-radius: 14px;border-top-left-radius: 14px;" src="{{ URL::to('/') }}/images/icons/standard.jpg" alt="">
                                                    </div>
                                                    <div style="min-height:140px;max-height:140px;margin-top: -5px;background:#007aff">
                                                            <div class="sec-title centered" style="text-align: center; margin-bottom: -5px;">
                                                                <h1 style="font-size: 23px; color: #fff; padding-top: 4px">STANDARD</h1>
                                                                <div class="text" style="font-size: 15px; color: #fff;padding-left: 7px; padding-right: 7px;padding-top: 0px;">
                                                                    Gestiones necesarias para el manejo completo de su mesa de servicio e integracion con base de datos de Conocimiento
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div style="min-height:465px;max-height:465px;background:#5cbdde54;border-bottom-left-radius: 14px;border-bottom-right-radius: 14px;">
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 15px;">
                                                            <span class="text">
                                                                <div style="font-size: 15px"><i class="fa fa-check check"></i>Incluye las caracteristicas de <div style="margin-top: -7px;margin-left: 25px;">la versión initial</div></div>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de tareas</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <div style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de requerimiento de <div style="margin-top: -7px;margin-left: 25px;">servicios</div></div>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Encuesta de satisfacción</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Base de datos de conocimientos</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <div style="font-size: 15px"><i class="fa fa-check check"></i>Creación de tickets por correo <div style="margin-top: -7px;margin-left: 25px;">(cuenta unica)</div></div>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Reglas de negocios personalizadas</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Calendario de servicios múltiples</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Reportes personalizados</span>
                                                            </span>
                                                        </div>
                                                        <div class="text-center"><a style="padding: 6px;border-color: #3ccc00;background: #3ccc00;margin-top: 15px;color: #fff" data-id="1" data-toggle="modal" data-target="#myVerciones" style="text-decoration:none;" class="theme-btn btn-style-three"><div style="text-transform: none;padding-left: 5px;padding-right: 5px;">solicitar cotización</div></a></div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-ms-3 col-xs-3">
                                                <div class="col-md-12 col-ms-12 col-xs-12" style="padding-left: 15px;padding-right:15px">
                                                    <div style="min-height:170px;max-height:170px;">
                                                        <img style="border-top-right-radius:14px;border-top-left-radius: 14px;" src="{{ URL::to('/') }}/images/icons/professional.jpg" alt="">
                                                    </div>
                                                    <div style="min-height:140px;max-height:140px;margin-top: -5px;background:#007aff">
                                                            <div class="sec-title centered" style="text-align: center; margin-bottom: -5px;">
                                                                <h1 style="font-size: 23px; color: #fff; padding-top: 4px">PROFECIONAL</h1>
                                                                <div class="text" style="font-size: 15px; color: #fff;padding-left: 7px; padding-right: 7px;padding-top: 0px;">
                                                                    servicie Desk + CMDB, ideal para compañias que quieren integrar la gestión de activos a la mesa de servicios
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div style="min-height:465px;max-height:465px;background:#5cbdde54;border-bottom-left-radius: 14px;border-bottom-right-radius: 14px;">
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 15px;">
                                                            <span class="text">
                                                                <div style="font-size: 15px"><i class="fa fa-check check"></i>Incluye caracteristicas de la <div style="margin-top: -7px;margin-left: 25px;">versión standard</div></div>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de problemas</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <div style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de tickets por correo <div style="margin-top: -7px;margin-left: 25px;">(multiples cuentas)</div></div>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <div style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de configuraciones <div style="margin-top: -7px;margin-left: 25px;">(CMDB)</div></div>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de activos (CI´s)</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de cambios</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Dashboard standard</span>
                                                            </span>
                                                        </div>
                                                        <div class="text-center"><a style="padding: 6px;border-color: #3ccc00;background: #3ccc00;margin-top: 85px;color: #fff" data-id="1" data-toggle="modal" data-target="#myVerciones" style="text-decoration:none;" class="theme-btn btn-style-three"><div style="text-transform: none;padding-left: 5px;padding-right: 5px;">solicitar cotización</div></a></div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-ms-3 col-xs-3">
                                                <div class="col-md-12 col-ms-12 col-xs-12" style="padding-left: 15px;padding-right:15px">
                                                    <div style="min-height:170px;max-height:170px;">
                                                        <img style="border-top-right-radius:14px;border-top-left-radius: 14px;" src="{{ URL::to('/') }}/images/icons/enterprise.jpg" alt="">
                                                    </div>
                                                    <div style="min-height:140px;max-height:140px;margin-top: -5px;background:#007aff">
                                                            <div class="sec-title centered" style="text-align: center; margin-bottom: -5px;">
                                                                <h1 style="font-size: 23px; color: #fff; padding-top: 4px">ENTERPRISE</h1>
                                                                <div class="text" style="font-size: 15px; color: #fff;padding-left: 7px; padding-right: 7px;padding-top: 0px;">
                                                                    Suete compretla de ITSM + Administacion de proyecto, necesaria para la implementación de mejores placticas ITIL
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div style="min-height:465px;max-height:465px;background:#5cbdde54;border-bottom-left-radius: 14px;border-bottom-right-radius: 14px;">
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 15px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Resolución de incidencias</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <div style="font-size: 15px"><i class="fa fa-check check"></i>Incluye caracteristicas de la <div style="margin-top: -7px;margin-left: 25px;">versión professional</div></div>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de proveedores</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de proyectos</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de contratos</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Gestión de mantenimiento</span>
                                                            </span>
                                                        </div>
                                                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-left: 20px;padding-top: 6px;">
                                                            <span class="text">
                                                                <span style="font-size: 15px"><i class="fa fa-check check"></i>Dashboard personalizados</span>
                                                            </span>
                                                        </div>
                                                        <div class="text-center"><a style="padding: 6px;border-color: #3ccc00;background: #3ccc00;margin-top: 125px;color: #fff" data-id="1" data-toggle="modal" data-target="#myVerciones" style="text-decoration:none;" class="theme-btn btn-style-three"><div style="text-transform: none;padding-left: 5px;padding-right: 5px;">solicitar cotización</div></a></div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>  
                                    </section>

                                    <section class="services-two" style="padding-bottom: 160px;padding-top: 20px;">
                                            <div class="" style="margin-bottom: 60px">
                                                <div class="sec-title centered" style="margin-bottom: 0px;">
                                                    <h1 style="font-size:30px;margin-top: 60px;">Omega ITSM</h1>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4" style="padding: 20px">
                                                    <div class="sec-title centered" style="margin-bottom: 0px">
                                                        <p class="text" style="margin-top: -10px; text-align: justify">
                                                            <b>Concurrente:</b> Este esquema se administra según la disponibilidad 
                                                            de licencias adquiridas y el acceso de especialistas a la aplicación, 
                                                            depende de la liberación de cada licencia para un nuevo ingreso. 
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4" style="padding: 20px">
                                                    <div class="sec-title centered" style="margin-bottom: 0px">
                                                        <p class="text" style="margin-top: -10px; text-align: justify">
                                                            <b>Nombrado:</b>Este esquema otorga una licencia personalizada y 
                                                            única con los datos básicos del especialista que ingresa a la 
                                                            consola en cualquier momento. 
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4" style="padding: 20px">
                                                    <div class="sec-title centered" style="margin-bottom: 0px">
                                                        <p class="text" style="margin-top: -10px; text-align: justify">
                                                            <b>Activos (CMDB):</b>Una licencia para cada activo de configuración CI´s 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                    <!--Call |To Acion Section-->
                                    <div class="imgback" > 
                                        <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 40px">
                                            <div class="sec-title centered" style="margin-bottom: 0px">
                                                    <h1 style="font-size: 20px;color: #fff;">Demo en Linea</h1>
                                                    <p class="text" style="margin-top: -10px;color: #fff;">
                                                            Prueba nuestra solución sin limitaciones y de forma gratuita 
                                                    </p>
                                                <a href="http://localhost:8000/demo/">
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
                                                <a href="http://localhost:8000/demo-guiada/">
                                                    <figure class="icon-box">
                                                        <img src="{{ URL::to('/') }}/images/icons/demo-guiada.png" alt="">
                                                    </figure>
                                                </a>
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
    

     
        <div class="auto-container">
            <div class="sec-title centered" style="margin-bottom: 40px;">
                <h1 style="font-size:30px;">Empresas que han confiado en nosotros …</h1>
            </div>
        </div>
   


        <section class="page-title" style="background: #5aceff5c;">
                <div style="opacity: 10.0;">        
                    <img src="{{ URL::to('/') }}/images/background/clientes-nuevo.png" alt="">
                </div>
            </section>
    
        <!--Testimonials Two Section-->
     <section class="testimonials-two" style="padding: 0px 0px;padding-top: 30px;">
            <div class="sec-title-two centered" style="margin-bottom: 30px;margin-left: 20px;">
                    <h1 style="font-size: 30px">Que dicen nuestros clientes</h1>
            </div>
            <div class="auto-container">
                <!--Heading-->                    
                <div class="carousel-box">
                    <div class="testimonial-carousel-two owl-theme owl-carousel">
                        <!--Slide Item-->
                        <div class="testimonial-block">
                            <div class="inner">
                                <div style="text-align: justify;" class="text">
                                    Omega ITSM nos ha ayudado totalmente
                                    a mejorar nuestra gestión de servicios. La gerencia
                                    de Tecnología ahora es mucho más eficiente, mejorando
                                    nuestros Tiempos de respuesta teniendo un unico punto de
                                    contacto con los distintos departamentos de la gerencia. 
                                </div>
                                <div class="info">
                                    <figure class="image img-circle">
                                        <img class="img-circle" src="{{ URL::to('/') }}/images/clients/cliente1.png" alt=""></figure>
                                    <h4>Arnoldo Rodriguez</h4>
                                    <div class="designation">Gerente de Tecnología, Grupos de Ultimas Noticias.</div>
                                </div>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="testimonial-block">
                            <div class="inner">
                                <div style="text-align: justify;" class="text">
                                    Con las soluciones de Omegasoft, hemos podido
                                    gestiona de manera eficiente las necesidades
                                    de nuestros usuarios, ha permitido mayor 
                                    contro en el tiempo de atención loque ha sido 
                                    una oportunidad para el mejoramiento continuo
                                    de nuestros procesos, en particular se ha
                                    mejorando notablemente la comunicación entre
                                    los usuarios y nuestros departamnto, los
                                    cuales ahora conocen en todo momento el 
                                    estado en el que se encuentra su solucitud.</div>
                                <div class="info">
                                    <figure class="image img-circle">
                                        <img class="img-circle" src="{{ URL::to('/') }}/images/clients/cliente2.png" alt=""></figure>
                                    <h4>Jesús Reyes</h4>
                                    <div class="designation">Gerente de Tecnología, Technip Velam</div>
                                </div>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="testimonial-block">
                            <div class="inner">
                                <div style="text-align: justify;" class="text">
                                    Con Omega ITSM tenemos gestión
                                    controlada y alineada aTIL, una comunicacion
                                    efectiva con los usuarios, una distribución
                                    más eficiente de las cargas de trabajo, un
                                    seguimiento continuo mediante reportes e
                                    informes y una medición de niveles de 
                                    servicios para mejora del servicios.</div>
                                <div class="info">
                                    <figure class="image img-circle">
                                        <img class="img-circle" src="{{ URL::to('/') }}/images/clients/cliente3.png" alt=""></figure>
                                    <h4>José Flores</h4>
                                    <div class="designation">Gerente de Tecnología, Ron Santa Teresa</div>
                                </div>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="testimonial-block">
                            <div class="inner">
                                <div style="text-align: justify;" class="text">
                                    Omegasoft nosha permitido la
                                    implementacion de una solución intergra
                                    par la gestión de los servicios TI, alineando
                                    los procesos del área con las buenas prácticas
                                    que ofrece ITIL lo cual hoy nos facilita
                                    el brindar servicios de mayor calidad.</div>
                                <div class="info">
                                    <figure class="image img-circle">
                                        <img class="img-circle" src="{{ URL::to('/') }}/images/clients/cliente4.png" alt=""></figure>
                                    <h4>Juan Carlos Duque</h4>
                                    <div class="designation">Gerente de Tecnología,Mapre la Seuridad</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="sec-title centered" style="background: #007affb8; margin-bottom: 0px;">
                <div style="padding-bottom: 30px">
                    <h1 style="font-size:25px; margin-bottom: 15px;padding-top: 15px;">Participe en nuestros eventos en línea</h1>
                    <div class="text-center" style="transition: none; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 10px;"><a href="http://localhost:8000/webcast/" class="theme-btn btn-style-three" style="transition: none; text-align: inherit; line-height: 24px; border-width: 2px; margin: 0px; padding: 15px 45px 11px; letter-spacing: 1px; font-weight: 600; font-size: 16px;border-color: #3ccc00; background: #3ccc00">Programación Eventos En Línea</a></div>
                </div>
            </div>
    </section>
   
@endsection

@section('javascript')
<script src="{{ URL::to('/') }}/js/itsm.js"></script>
@endsection
@include('web.modals.verciones_precios')