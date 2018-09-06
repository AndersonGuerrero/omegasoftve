@extends('layouts.web.base')
@section('title', 'Nuestros Clientes')
@section('content')
<section class="page-title">
    	<div class="" style="opacity: 10.0;"></div>
            <img src="{{ URL::to('/') }}/images/background/nuestros-clientes.jpg">
        <div class="auto-container">
        </div>
    </section>
    
    <section class="">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 40px;">
                    <div class="sec-title-two centered sec-title" style="margin-bottom: 0px">
                        <h1>Algunas de las empresas que han confiado en nosotros</h1>
                        <div class="text">Para nosotros nuestros clientes son la gran apuesta de valor,
                            el verdadero aval de la compañía y la mayor garantía de continuidad.
                            les agradecemos la confianza que nos han brindado durante toda nuestra
                            trayectoria, un apoyo que ha permitido que seamos una empresa con gran
                            proyección de futuro, son nuestra mejor razón para despertarnos cada dia.
                        </div>
                    </div>
                    <div class="sec-title centered">
                            <div class="text">Le invitamos a que conozca algunos de las organizaciones que han confiado 
                                en Omegasoft para la optimización de la gestión IT y sus historias.
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-title" style="background: #5aceff5c;">
            <div class="image-layer" style="opacity: 10.0;"></div>
                <img src="{{ URL::to('/') }}/images/background/clientes-nuevo.png">
            <div class="auto-container">
            </div>
    </section>

        <!--Testimonials Two Section-->
    <section class="testimonials-two">
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
                                    gestionar de manera eficiente las necesidades
                                    de nuestros usuarios, ha permitido mayor 
                                    control en el tiempo de atención lo que ha sido 
                                    una oportunidad para el mejoramiento continuo
                                    de nuestros procesos, en particular se ha
                                    mejorado notablemente la comunicación entre
                                    los usuarios y nuestros departamentos, los
                                    cuales ahora conocen en todo momento el 
                                    estado en el que se encuentra su solicitud.</div>
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
                                    controlada y alineada a TIL, una comunicacion
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
                                omegasoft nos permite implementar una solucion integra
                                    para la gestión de los servicios TI, alineando
                                    los procesos del área con las buenas prácticas
                                    que ofrece ITIL lo cual nos facilita
                                    brindar servicios de mayor calidad.</div>
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
    </section>
@endsection