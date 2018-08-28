@extends('layouts.web.base')
@section('title', 'Programa partner')
@section('content')

<section class="page-title">
    <div class="image-layer" 
         style="opacity:10.0;">
        <img src="{{ URL::to('/') }}/images/background/programa-de-partner.jpg" alt="">
    </div>
    <div class="auto-container">
    </div>
</section>

<section class="services-two" style="padding-top: 50px; margin-bottom: -40px"> 
        <div class="auto-container">
            <div class="sec-title-two centered" style="margin-bottom: 30px;">
                <h1 style="font-size:30px">Acompáñanos a expandir nuestros horizontes, ofreciendo soluciones de calidad.</h1>
            </div>
            <div class="sec-title centered" style="margin-bottom: 30px;">
                    <div class="text">
                        Nuestro Programa de Parten tiene un claro enfoque en la rentabilidad. Nuestro objetivo es
                        proporcionar a nuestros socios todas las herramientas y recursos que necesitan para tener
                        éxito en la venta, implementación y soporte de nuestras soluciones para ITSM
                    </div>
                </div>
            <div class="sec-title centered" style="margin-bottom: 10px;">
                <div class="text">
                    Conviértase en Partner de Omegasoft y pasará a formar parte de
                    nuestro equipo. Tendrá acceso al portal de Partner, para estar al día en
                    las últimas noticias relacionadas con muestras soluciones y accederá al
                    variado contenido de marketing disponible que puede necesitar para
                    acercarse a sus clientes: casos de éxito, nuevas alianzas, integraciones,
                    etc. Le guiaremos en su viaje para conseguir nuevos clientes e
                    implementaciones exitosas con nuestras soluciones  
                </div>
            </div>
            <!--<div class="sec-title centered" style="margin-bottom: 30px;">
                <div class="text">
                        Nuestro Programa de Partner lo ayudará a mejorar sus ventas, ampliar su portafolio de
                        soluciones, conocer nuestros productos y facilitar a sus clientes la gestión de servicio dentro de sus
                        organizaciones
                </div>
            </div> -->
        </div>
</section>

<!--<section class="services-two" style="padding-top: 0px;margin-bottom: -100px;" > 
        <div class="auto-container">
            <div class="sec-title centered" style="margin-bottom: 30px;">
                <h1 style="font-size:20px; color: #5a6d92;">Por qué asociarse con Omegasoft</h1>
            </div>
            <div class="sec-title centered" style="margin-bottom: 30px;">
                <div class="text">
                        Una gran motivación propicia grandes resultados, y queremos que sepa que valoramos,
                        animamos y reconocemos a los Partner comprometidos que se esfuerzan para alcanzar la
                        excelencia. Una filosofía clave en Omegasoft es que el éxito llega cuando los resultados se
                        compensan directa y generosamente. Por esto nuestros Partner consiguen altos márgenes y bonos
                        por su rendimiento destacado. Y dado que queremos aprovechar todas las oportunidades de
                        crecimiento, siempre nos aseguraremos que pase al siguiente nivel cuando intensifica sus esfuerzos.
                        En función de su rendimiento, pasara a niveles de Partner más elevados, lo cual implica recompensas
                        aún mayores.
                </div>
            </div>
        </div>
</section> -->

<section class="services-two" style="padding: 0px; margin-top:0px;"> 
    <div class="auto-container">
        <div class="sec-title centered" style="margin-bottom: 20px;">
            <h1 style="font-size:30px;padding-top: 65px;">Alguno de los beneficios de forma parte de nuestro equipo</h1>
            <div class="text" style="font-size: 25px;">
                Nuestro programa de partner le proporciona los recursos esenciales
                para acelerar su ciclo de venta y ayudar a hacer crecer su negocio
            </div>
        </div>
    </div>
</section>

<section class="services-two" style="padding: 0px">
    <div class="auto-container">     
        <div class="row clearfix">
            <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/amplie-su-portafolio-de-soluciones.png" alt=""></figure>
                    <h3>Portafolio de Soluciones</h3>
                    <div style="font-size: 15px;" class="text">
                        Amplié su portafolio con nuestras soluciones y maximicé 
                        las posibilidades de captar clientes ofreciendo soluciones 
                        de calidad comprobada.
                    </div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/impulse-su-marca.png" alt=""></figure>
                    <h3>Impulsa tu marca</h3>
                    <div style="font-size: 15px;" class="text">
                        Llegar a nuevos mercados e industrias ayudando a que los 
                        clientes mejoren su eficiencia en soporte de TI.</div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/oportunidades-de-negocio2.png" alt=""></figure>
                    <h3>Generación de demanda</h3>
                    <div style="font-size: 15px;" class="text">
                        Para impulsar las demandas de nuestras soluciones y generar oportunidades de negocio, llevamos a
                        cabo frecuentemente programas de marketing y ventas, en conjunto con nuestros partner.</div>
                </div>
            </div>
            <!--Service Block-->
        </div>
        <div class="row clearfix">
            <!--Service Block-->
            <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/maximice-sus-ingresos.png" alt=""></figure>
                    <h3>Maximice sus ingresos</h3>
                    <div style="font-size: 15px;" class="text">
                        Nuestra atractiva relación costo beneficios, le permitirá captar nuevos clientes,
                        obteniendo importantes márgenes en nuevas ventas y renovaciones.</div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/formacion-tecnica1.png" alt=""></figure>
                    <h3>Formación técnica</h3>
                    <div style="font-size: 15px;" class="text">
                        Para nosotros, es de vital importancia la formación de nuestros Partner, para lo cual contamos con
                        varios programas de formación según el nivel del partner.</div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/soporte_directo.png" alt=""></figure>
                    <h3>Soporte Directo</h3>
                    <div style="font-size: 15px;" class="text">
                        Como partner, recibirás servicios de soporte comercial y técnico dedicado para que
                        puedas brindar la ayuda que tú y tus clientes necesitan.</div>
                </div>
            </div>
            <!--Service Block-->
        </div>
    </div>
</section>


<section style=" margin-bottom: 40px;background: #5aceff12;">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                        <div class="sec-title centered" style="margin-bottom: 30px;padding-top: 40px;">
                                <h1 style="font-size:30px;">Niveles de Membresía</h1>
                            </div>
                            <div class="sec-title centered" style="margin-bottom: 30px;">
                                <div class="text">
                                        La red de socios de Omegasoft está estructurada en cuatro categorías de socios
                                        basadas en las ventas y los servicios que los socios proporcionan. Estas cuatro
                                        categorías de socios son: Partner Distribuidor, Partner de Servicios, Partner de
                                        Soluciones Plata y Partner de Soluciones Oro
                                </div>
                            </div>
                    <div class="col-md-6 col-ms-6 col-xs-6">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div style="padding: 0px; margin-bottom: 0px;">
                                    <figure style="text-align: center;" class="icon-box">
                                        <img src="{{ URL::to('/') }}/images/icons/partner-nivel-oro.png" alt="">
                                    </figure>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <h1 style="font-size: 18px;">Partner de Soluciones Oro</h1>
                                <div class="text" style="text-align:initial; font-size:15px;">
                                        Opción para compañías proveedoras de soluciones IT que quieran convertirse en
                                        socios estratégicos de Omegasoft. Con un alto compromiso para el
                                        posicionamiento de nuestros productos a nivel nacional y con amplios
                                        conocimientos y capacidad para prestar servicios alrededor de los mismos.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div style="padding: 0px; margin-bottom: 0px;">
                                    <figure style="text-align: center;" class="icon-box">
                                        <img src="{{ URL::to('/') }}/images/icons/partner-nivel-plata.png" alt="">
                                    </figure>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <h1 style="font-size: 18px;">Partner de Soluciones Plata</h1>
                                <div class="text" style="text-align:initial; font-size:15px;margin-bottom: 48px;">
                                        Opción para proveedores de soluciones IT, interesados en hacer crecer su
                                        negocio ofreciendo nuestras soluciones y otros servicios de valor añadido sobre
                                        las ediciones comerciales.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-ms-12 col-xs-12">
                        <div class="col-md-6 col-ms-6 col-xs-6">
                            <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                                <div style="padding: 0px; margin-bottom: 0px;">
                                        <figure style="text-align: center;" class="icon-box">
                                            <img src="{{ URL::to('/') }}/images/icons/partner-de-servicio.png" alt="">
                                        </figure>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <h1 style="font-size: 18px;">Partner de Servicio</h1>
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                            Opción para compañías prestadoras de servicios para la gestión IT, que pudieran
                                            generar oportunidades de negocios en sus respectivos clientes recomendando
                                            nuestras soluciones.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-ms-6 col-xs-6">
                            <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                                <div style="padding: 0px; margin-bottom: 0px;">
                                        <figure style="text-align: center;" class="icon-box">
                                            <img src="{{ URL::to('/') }}/images/icons/partner-distribuidor.png" alt="">
                                        </figure>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <h1 style="font-size: 18px;">Partner Distribuidor</h1>
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                        Es la opción más fácil para comenzar a hacer negocios basados en nuestras
                                        soluciones, revendiendo ediciones comerciales sin compromiso de formación y
                                        con un compromiso de ventas anual mínimo.
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</section>


<section class="services-two" style="padding: 0px;margin-bottom: 20px"> 
        <div class="auto-container">
            <div class="sec-title centered" style="margin-bottom: 30px;">
                <h1 style="font-size:30px;">Únete a Nosotros</h1>
            </div>
            <div class="sec-title centered" style="margin-bottom: 30px;">
                <div class="text">
                        Buscamos apoyar a los asociados para que puedan 
                        expandir su portafolio con el fin de llegar a más 
                        clientes con soluciones de valor agregado, productos 
                        y servicios de forma simple y efectiva.
                </div>
            </div>
        </div>
</section>


<section class="services-two" style="margin-top: -30px;padding:22px;height:100px;"> 
    <div class="auto-container">
        <div class="sec-title centered">
            <div class="text-center"  style="transition: none; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 10px;"><a href="" data-id="1" data-toggle="modal" data-target="#myPartner" class="theme-btn btn-style-three" style="transition: none; text-align: inherit; line-height: 24px; border-width: 2px; margin: 0px; padding: 15px 45px 11px; letter-spacing: 1px; font-weight: 600; font-size: 16px;border-color: #3ccc00; background: #3ccc00">Registrate</a></div>
        </div>
        
    </div>
</section>

@include('web.modals.Progra_partner')
@endsection