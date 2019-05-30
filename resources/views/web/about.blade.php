@extends('layouts.web.base')
@section('title', 'Quienes Somos')
@section('content')
    <section class="page-title">
    	<div class="image-layer" style="opacity: 10.0;"></div>
         <img src="{{ URL::to('/') }}/images/background/quienes somos.png" alt="EMPRESA_SOFTWARE ">
        <div class="auto-container">
        </div>
    </section>
    
    <section class="">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 40px;">
                    <div class="sec-title centered" style="margin-bottom: 15px;">
                        <h1>Acerca de Nosotros</h1>
                        <div class="text">
                        Omegasoft, nace en el 2010 como una empresa de servicios IT, integrada por un grupo 
                        de profesionales experimentados y altamente calificados en el área, ofreciendo a las 
                        organizaciones, soluciones y servicios para mejorar sus capacidades organizativas, 
                        enfocándonos en la simplificación de sus procesos, empleando metodologías que se 
                        adaptan a las diferentes empresas.            
                        </div>
                    </div>
                    <div class="sec-title centered">
                        <div class="text">
                        Nuestros principales objetivos son combinar la facilidad, la accesibilidad y la practicidad al
                        proporcionar soluciones flexibles y asequibles a las organizaciones, permitiéndoles obtener control
                        en la entrega de servicios, simplificar los procesos de gestión, adquirir visibilidad en tiempo real en
                        todos sus servicios e infraestructura y orquestar las interacciones de personas, procesos y
                        tecnologías para un rendimiento óptimo.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class = "">
        <div class="sec-title-two centered" style = "margin-bottom: 0px;">
            <h2>Historia</h2>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                  <div class="timeline-icon2">
                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/lanzamiento-2.jpg" alt=""></figure>
                                  </div>
                                  <div class="content">
                                    <h3 class="title">2019</h3>
                                    <p class="description">Lanzamiento de la versión comercial Suite Omega ITSM, el cual integra soluciones que permiten a las empresas gestionar los servicios IT de manera efectiva, simplificando sus procesos y alineándolos con el negocio.
                                    </p>
                                  </div>
                                </a>
                            </div>

                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                  <div class="timeline-icon">
                                       <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/lanzamiento-1.jpg" alt=""></figure>
                                  </div>
                                  <div class="content">
                                    <h3 class="title">2016</h3>
                                    <p class="description">Iniciamos el proceso de desarrollo de nuestro primer software para la gestión de servicios IT basadas en las mejores prácticas ITIL, integrando firmemente toda la funcionalidad necesaria para orquestar las interacciones de personas, procesos y tecnologías para un rendimiento óptimo siendo intuitivo y accesible para los usuarios no técnicos.
                                    </p>
                                  </div>
                                </a>
                            </div>

                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                  <div class="timeline-icon">
                                     <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/2013.png" alt=""></figure>
                                  </div>
                                  <div class="content">
                                    <h3 class="title">2013</h3>
                                    <p class="description">Como parte del proceso de expansión formalizamos alianza con proveedores de servicios, brindando soluciones para integrar los procesos de monitoreo de aplicaciones y servidores.
                                    </p>
                                  </div>
                                </a>
                            </div>
                            
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                  <div class="timeline-icon3">
                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/2011.png" alt=""></figure>
                                  </div>
                                  <div class="content">
                                    <h3 class="title">2011</h3>
                                    <p class="description">Incursionamos en el mercado venezolano, formalizando alianza con un fabricante de soluciones  para la gestión de servicios IT, ofreciendo aplicaciones que integran las funcionabilidades de Service Desk, CMDB y Asset Maangement, para adoptar e implementar fácilmente las mejores prácticas ITIL.
                                    </p>
                                  </div>
                                </a>
                            </div>

                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                  <div class="timeline-icon2">
                                       <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/nacimiento.jpg" alt=""></figure>
                                  </div>
                                  <div class="content">
                                    <h3 class="title">2010</h3>
                                    <p class="description">Nace Omegasoft como una empresa dedicada a ofrecer soluciones informáticas orientadas a la gestión de servicios IT.
                                    </p>
                                  </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="news-section-two" style="margin-top: 30px; padding: 30px 0px 70px; background: #5aceff33 !important;">
            <div class="auto-container">
                <!--Heading-->
                <div class="sec-title-two centered" style = "margin-bottom: 30px;">
                    <h2>Misión, Visión y Valores</h2>
                </div>
                
                <div class="row clearfix">
                    <!--News Block-->
                    <div class="news-block-two col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-box"  style = "height: 530px !important;"  >
                            <figure class="image-box"><img src="{{ URL::to('/') }}/images/resource/Mision.jpg" alt="MISION_EMPRESARIAL"></figure>
                            <div class="lower-box">
                                <div class="sec-title centered">
                                    <h3>Misión</h3>
                                    <div class="text" style="font-size: 16px;text-align: justify;">
                                    Proveer soluciones que permitan optimizar los procesos de atención de soporte y servicios IT, en
                                    apoyo a las organizaciones para satisfacer las necesidades de sus clientes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block-two col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-box"  style = "height: 530px !important;">
                            <figure class="image-box"><img src="{{ URL::to('/') }}/images/resource/Vision.jpg" alt="VISION_DE_LA_EMPRESA"></figure>
                            <div class="lower-box">
                                <div class="sec-title centered">
                                    <h3>Visión</h3>
                                    <div class="text" style="font-size: 16px;text-align: justify;">
                                        Convertirnos en un aliado estratégico de soluciones para la gestión de servicios IT, en el mercado
                                        latinoamericano reconocido por la calidad y el servicio. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block-two col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-box"  style = "height: 530px !important;"  >
                            <figure class="image-box"><img src="{{ URL::to('/') }}/images/resource/Valores.jpg" alt="VALORES_EMPRESA"></figure>
                            <div class="lower-box">
                                <div class="sec-title centered">
                                    <h3>Valores</h3>
                                    <div class="text" style="font-size: 16px;text-align: justify;">
                                        Nuestros valores fundamentales que nos identifican son: responsabilidad, excelencia,
                                        profesionalismo, trabajo en equipo y compromiso, enmarcados en el enfoque a nuestros clientes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        
    <section class="default-section" style = "padding: 60px 0px 100px;">
            <div class="auto-container">
            
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-md-7 col-sm-12 col-xs-12">
                        <div class="inner">
                            <!--Heading-->
                            <div class="sec-title-two">
                                <h2>Nuestros Éxitos</h2>
                            </div>
                            <div class="fun-facts">
                                    <div class="row clearfix">
                                        <div class="count-column col-md-4 col-sm-4 col-xs-12">
                                            <div class="inner-box count-box">
                                                <div class="count-outer"><span class="count-text" data-speed="2000" data-stop="30">0</span>+</div>
                                                <h4 class="counter-title">Proyectos completados</h4>
                                            </div>
                                        </div>
                                        <div class="count-column col-md-4 col-sm-4 col-xs-12">
                                            <div class="inner-box count-box">
                                                <div class="count-outer"><span class="count-text" data-speed="2000" data-stop="25">0</span>+</div>
                                                <h4 class="counter-title">Clientes Felices</h4>
                                            </div>
                                        </div>
                                        <div class="count-column col-md-4 col-sm-4 col-xs-12">
                                            <div class="inner-box count-box">
                                                <div class="count-outer"><span class="count-text" data-speed="2000" data-stop="8">0</span></div>
                                                <h4 class="counter-title">años experiencia</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    
                    <!--Logos Column-->
                    <div class="logos-column col-md-5 col-sm-12 col-xs-12">
                        <div class="inner">
                            <div class="logos">
                                <div class="row clearfix">
                                    <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image"><a href="https://www.multinacional.com.ve/Multinacional/"><img src="{{ URL::to('/') }}/images/clients/1.png" alt=""></a></figure>
                                    </div>
                                    <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image"><a href="https://www.seguroscaracas.com/portal/paginasv4/"><img src="{{ URL::to('/') }}/images/clients/2.png" alt=""></a></figure>
                                    </div>
                                    <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image"><a href="http://www.fundacionsantateresa.org/web/inicio.php"><img src="{{ URL::to('/') }}/images/clients/3.png" alt=""></a></figure>
                                    </div>
                                    <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image"><a href="https://www.grupophoenix.com/es/"><img src="{{ URL::to('/') }}/images/clients/4.png" alt=""></a></figure>
                                    </div>
                                    <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image"><a href="https://www.mapfre.com.ve/"><img src="{{ URL::to('/') }}/images/clients/5.png" alt=""></a></figure>
                                    </div>
                                    <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image"><a href="http://protinalproagro.com.ve/"><img src="{{ URL::to('/') }}/images/clients/6.png" alt=""></a></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    </section>

            <!--Testimonials Two Section-->
    <section class="testimonials-two" style = "padding: 60px 0px;">
        <div class="auto-container">

            <div class="sec-title-two centered" style = "margin-bottom: 25px;">
                <h2 style="margin-top: -100px">Nuestro Equipo</h2>
            </div>

            <div class="demo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="testimonial-carousel-two" class="owl-carousel">

                            <div class="testimonial">
                                    <div class="testimonial-profile">
                                        <a href="https://www.linkedin.com/in/carlos-villegas-79540213b/">
                                            <img src="{{ URL::to('/') }}/images/resource/author-3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-title">
                                            <a href="https://www.linkedin.com/in/carlos-villegas-79540213b/"
                                               style = "color: #000; text-decoration: none; outline: none;">    
                                               Carlos Villegas
                                            </a>
                                        </h3>
                                        <span class="testimonial-post">Technical Support Analyst</span>
                                        <p class="testimonial-description">
                                        Lo que más me gusta de trabajar en OmegaSoft es que cada día me da la oportunidad de crecer
                                        profesional y personalmente, es para mí un privilegio poder estar con un grupo de trabajo que
                                        constantemente busca mejorar e innovar para ofrecer un producto y un servicio de calidad.
                                        </p>
                                    </div>
                                </div>


                                <div class="testimonial">
                                    <div class="testimonial-profile">
                                        <a href="https://www.linkedin.com/in/dangela-garcia/">
                                            <img src="{{ URL::to('/') }}/images/resource/author-4.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-title">
                                            <a href="https://www.linkedin.com/in/dangela-garcia/"
                                               style = "color: #000; text-decoration: none; outline: none;">    
                                               Dangela Garcia
                                            </a>
                                        </h3>
                                        <span class="testimonial-post">Support Coordinator</span>
                                        <p class="testimonial-description">
                                        Omegasoft representa un nuevo reto profesional, la oportunidad de crecer profesionalmente en
                                        nuevas áreas, un lugar donde encuentro un excelente ambiente de trabajo con un grupo de
                                        profesionales dedicados en brindar soluciones tecnológicas innovadoras.
                                        </p>
                                    </div>
                                </div>

                                <div class="testimonial">
                                    <div class="testimonial-profile">
                                        <a href="https://www.linkedin.com/in/anderson-guerrero/">
                                            <img src="{{ URL::to('/') }}/images/resource/author-1.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-title">
                                            <a href="https://www.linkedin.com/in/anderson-guerrero/"
                                               style = "color: #000; text-decoration: none; outline: none;">    
                                                Andersón Guerrero
                                            </a>
                                        </h3>
                                        <span class="testimonial-post">Web Developer Leader</span>
                                        <p class="testimonial-description">
                                        Omegasoft significó para mí en su momento un cambio de aire, luego de cuatro años representó
                                        un lugar de crecimiento profesional que se fue gestando día a día, un lugar donde encontré
                                        excelentes compañeros; donde los errores te llevan a mejorar y que con constancia y
                                        perseverancia se pueden alcanzar las metas.
                                        </p>
                                    </div>
                                </div>
                            
                                <div class="testimonial">
                                    <div class="testimonial-profile">
                                        <a href="https://www.linkedin.com/in/dubraska-figuera/">
                                            <img src="{{ URL::to('/') }}/images/resource/author-2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-title">
                                            <a  href="https://www.linkedin.com/in/dubraska-figuera/" 
                                                style = "color: #000; text-decoration: none; outline: none;">
                                                Dubraska Figuera
                                            </a>
                                        </h3>
                                        <span class="testimonial-post">Support Coordinator.</span>
                                        <p class="testimonial-description">
                                        Me complace compartir mis experiencias como parte de la familia Omegasoft, donde recibí
                                        grandes oportunidades y retos durante cinco años de carrera, es una empresa que permite a sus
                                        empleados un crecimiento continuo y donde se cuenta con un grupo de profesionales que
                                        trabajan esmeradamente para la satisfacción de los clientes.
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