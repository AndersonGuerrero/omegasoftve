@extends('layouts.web.base')
@section('title', 'Nuestro Equipo')
@section('content')
    <section class="page-title">
    	<div class="image-layer" 
             style="opacity:10.0;">
            <img src="{{ URL::to('/') }}/images/background/nuestro-equipo.jpg" alt="">
        </div>
        <div class="auto-container">
        </div>
    </section>

    <section class="">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 40px;">
                        <div class="sec-title centered">
                            <h1>Únete a esta gran familia</h1>
                            <h2 style="font-size: 28px; margin-top: 20px;" >En Omegasoft más que un empleo, formarás parte de una familia</h2>
                        <div class="text" style="text-align: center;">
                            Si te apasiona  la tecnología y estás interesado  en  desarrollar  
                            soluciones  de  vanguardia  Omegasoft  es  el  lugar  perfecto  para  
                            ti,  aplica  en  nuestras  vacantes  y forma  parte  del  equipo. El
                            desarrollo  de nuevas soluciones y la expansión de nuestra compañía en
                            gran parte se debe al magnifico equipo de profesionales que nos conforman,
                            es por  esta razón que  estamos  abiertos a  captar  talento  humano  que
                            nos  lleve  al  crecimiento  como  organización  y  nos  permita  ofrecer
                            una atención  eficaz,  eficiente  y  de  calidad  a  nuestros  clientes  
                            con  un  armónico  ambiente  de  trabajo. 
                        </div>
                        <div class="text" style="text-align: center; margin-top: 20px">
                             Te invitamos  a  formar   parte
                            de  nuestro  equipo  y emprender  juntos  nuevos  desafíos,  que  nos  permitan
                            demostrar  nuestra  actitud,  pasión  por  lo  que  hacemos,  creatividad,
                            capacidad de  colaboración  y  energía frente a los retos que se nos presenten
                            y hacer la diferencia. Nuestras  prioridades  es  ofrecer  al  nuevo  talento
                            una  propuesta  en  la  que   puedan  desafiar  su potencial y lograr resultados
                            extraordinarios.                                                                                                                                        
                            flexibles  y asequibles para empresas de todos los tamaños.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="careers-page" style="padding:0px">
            <div class="auto-container">
                    <div class="sec-title centered">
                            <h1>Nuestras Vacantes</h1>
                        </div>
                <div class="row clearfix">
                    <!--Left Side-->
                    <div class="left-side col-md-4 col-sm-5 col-xs-12">
                        <div class="inner">
                            <!--Jobs Widget-->
                            <div class="jobs-widget side-widget">
                                <h3>Oportunidades Actuales</h3>
                                <div class="widget-inner">
                                    <ul id="categorys-vacancies-content">
                                        <li class="current"><a data-id="select-Tecnología" class="clearfix categorys-vacancies" href="#">
                                            <span class="pull-left">Tecnología</span> <span class="pull-right"></span></a>
                                        </li>
                                        <li><a data-id="select-Comercial" class="clearfix categorys-vacancies" href="#">
                                            <span class="pull-left">Comercial</span> <span class="pull-right"></span></a>
                                        </li>
                                        <li><a data-id="select-Marketing" class="clearfix categorys-vacancies" href="#">
                                            <span class="pull-left">Marketing</span> <span class="pull-right"></span></a>
                                        </li>
                                        <li><a data-id="select-Administración" class="clearfix categorys-vacancies" href="#">
                                            <span class="pull-left">Administración</span> <span class="pull-right"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    
                    <!--Content Side-->
                    <div class="content-side col-md-8 col-sm-7 col-xs-12">
                        <div class="inner">
                            <div class="career-posts">
                                <!--Career Block-->
                                <div class="career-block select-Tecnología">
                                    <h2> Director de Tecnología</h2>
                                    <p>Praesent ultricies ligula et pellentesque pretium. In sagittis libero vel ante pellentesque pulvinar. Nullam at elit nunc. In nec quam a dui consequat tristique at quis sem. Pellentesque luctus justo et convallis mollis senectus et netus.</p>
                                    <p>Vivamus vitae quam tempus, mattis mi ac, placerat mauris. Pellentesque porta enim non ultricies sagittis. Pellentesque habitant morbi tristique.</p>
                                    <ul>
                                        <li>I must explain to you how all this mistaken idea</li>
                                        <li>How all this mistaken idea of denouncing pleasure</li>
                                        <li>Expound the actual teachings of the great explorer of the truth</li>
                                    </ul>
                                    <div class="link-box"><a href="#" class="theme-btn btn-style-two">Postularse</a></div>
                                </div>
                                <!--Career Block-->
                                <div class="career-block select-Comercial">
                                    <h2>Director Comercial</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    <ul>
                                        <li>I must explain to you how all this mistaken idea</li>
                                        <li>How all this mistaken idea of denouncing pleasure</li>
                                    </ul>
                                    <div class="link-box"><a href="#" class="theme-btn btn-style-two">Postularse</a></div>
                                </div>
                                <!--Career Block-->
                                <div class="career-block select-Administración">
                                    <h2>Junior Innovation Manager</h2>
                                    <p>Pellentesque luctus justo et convallis mollis. Vivamus vitae quam tempus, mattis mi ac, placerat mauris. Pellentesque porta enim non ultricies sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sed nunc tortor. Aliquam lobortis viverra leo.</p>
                                    <div class="link-box"><a href="#" class="theme-btn btn-style-two">Postularse</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('javascript')
<script src="{{ URL::to('/') }}/js/team.js"></script>
@endsection