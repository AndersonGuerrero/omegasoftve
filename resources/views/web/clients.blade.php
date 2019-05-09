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
                            Les agradecemos la confianza que nos han brindado durante toda nuestra
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

    
        <!--Clients  Section-->
        <section style = "background: #00325d;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="news-slider" class="owl-carousel">
                        
                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/20.png" alt="">
                                </div>
                            </div>
            
                                                
                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/21.png" alt="">
                                </div>
                            </div>
            
                                                
                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/22.png" alt="">
                                </div>
                            </div>

                                    
                                                
                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/23.png" alt="">
                                </div>
                            </div>

                                    
                                                
                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/24.png" alt="">
                                </div>
                            </div>

                                                                        
                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/25.png" alt="">
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/26.png" alt="">
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/27.png" alt="">
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/28.png" alt="">
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/29.png" alt="">
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/30.png" alt="">
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="pic">
                                    <img src="{{ URL::to('/') }}/images/clients/31.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- <section class="page-title" style="background: #5aceff5c;">
            <div class="image-layer" style="opacity: 10.0;"></div>
                <img src="{{ URL::to('/') }}/images/background/clientes-nuevo.png">
            <div class="auto-container">
            </div>
    </section> -->

        <!--Testimonials Two Section-->
        <section class="testimonials-two" style = "padding: 60px 0px;">
            <div class="auto-container">
                <div class="demo">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="testimonial-carousel-two" class="owl-carousel">
                                    <div class="testimonial">
                                        <div class="testimonial-profile">
                                            <a href="https://www.linkedin.com/in/arnoldo-rodriguez-12435949/">
                                                <img src="{{ URL::to('/') }}/images/clients/cleinte7.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonial-content">
                                            <h3 class="testimonial-title">
                                                <a href="https://www.linkedin.com/in/arnoldo-rodriguez-12435949/"
                                                    style = "color: #000; text-decoration: none; outline: none;">
                                                    Arnoldo Rodriguez
                                                </a>
                                            </h3>
                                            <span class="testimonial-post">Gerente de Tecnología, Grupos de Ultimas Noticias.</span>
                                            <p class="testimonial-description">
                                            Omega ITSM nos ayuda totalmente
                                            a mejorar nuestra gestión de servicios. La gerencia
                                            de Tecnología ahora es mucho más eficiente, mejorando
                                            nuestros tiempos de respuesta, teniendo un unico punto de
                                            contacto con los distintos departamentos de la gerencia.
                                            </p>
                                        </div>
                                    </div>
                
                                    <div class="testimonial">
                                        <div class="testimonial-profile">
                                            <a href="https://www.linkedin.com/in/jesusreyesvzla/?originalSubdomain=ve">
                                                <img src="{{ URL::to('/') }}/images/clients/cleinte8.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonial-content">
                                            <h3 class="testimonial-title">
                                                <a href="https://www.linkedin.com/in/jesusreyesvzla/?originalSubdomain=ve"
                                                    style = "color: #000; text-decoration: none; outline: none;">
                                                    Jesús Reyes
                                                </a>
                                            </h3>
                                            <span class="testimonial-post">Gerente de Tecnología, Technip Velam</span>
                                            <p class="testimonial-description">
                                                Con las soluciones de Omegasoft, se puede   
                                                gestionar de manera eficiente las necesidades
                                                de nuestros usuarios, permite mayor 
                                                control en el tiempo de atención lo que da la
                                                oportunidad para el mejoramiento continuo
                                                de nuestros procesos, en particular ha
                                                mejorado notablemente la comunicación entre
                                                los usuarios y nuestros departamentos, los
                                                cuales ahora conocen en todo momento el 
                                                estado en el que se encuentra su solicitud.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonial">
                                        <div class="testimonial-profile">
                                            <a href="https://www.linkedin.com/in/jose-angel-flores-melo-7a209b4/?originalSubdomain=ve"><img src="{{ URL::to('/') }}/images/clients/cleinte9.jpeg" alt=""></a>
                                        </div>
                                        <div class="testimonial-content">
                                            <h3 class="testimonial-title">
                                              <a href="https://www.linkedin.com/in/jose-angel-flores-melo-7a209b4/?originalSubdomain=ve"
                                                 style = "color: #000; text-decoration: none; outline: none;">
                                                José Flores
                                            </a>
                                            </h3>
                                            <span class="testimonial-post">Gerente de Tecnología, Ron Santa Teresa</span>
                                            <p class="testimonial-description">
                                                Con Omega ITSM tenemos gestión
                                                controlada y alineada a ITIL, una comunicacion
                                                efectiva con los usuarios, una distribución
                                                más eficiente de las cargas de trabajo, un
                                                seguimiento continuo mediante reportes e
                                                informes y una medición de niveles de 
                                                servicios para mejora del servicios.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonial">
                                        <div class="testimonial-profile">
                                            <a href="https://www.linkedin.com/in/juan-carlos-duque-mendez-6bab1867/"><img src="{{ URL::to('/') }}/images/clients/cleinte10.jpeg" alt=""></a>
                                        </div>
                                        <div class="testimonial-content">
                                            <h3 class="testimonial-title">
                                            <a href="https://www.linkedin.com/in/juan-carlos-duque-mendez-6bab1867/" 
                                               style = "color: #000; text-decoration: none; outline: none;">
                                                Juan Carlos Duque
                                                </a>
                                            </h3>
                                            <span class="testimonial-post">Gerente de Tecnología,Mapfre la Seguridad</span>
                                            <p class="testimonial-description">
                                                Omegasoft nos permite implementar una solucion integra
                                                para la gestión de los servicios TI, alineando
                                                los procesos del área con las buenas prácticas
                                                que ofrece ITIL lo cual nos facilita
                                                brindar servicios de mayor calidad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection