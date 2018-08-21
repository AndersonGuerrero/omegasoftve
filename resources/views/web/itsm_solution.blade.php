@extends('layouts.web.base')
@section('title', 'Solucion ITSM')
@section('content')

    <section class="page-title" style="height: 530px;">
        <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/OMEGA-ITSM.jpg); opacity: 10.0;"></div>
        <div class="auto-container">
        </div>
    </section>
    

        <section class="careers-page" style="padding:0px">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Side-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="inner">
                            <!--Jobs Widget-->
                            <div class="jobs-widget side-widget">
                                <div class="widget-inner">
                                    <ul id="categorys-vacancies-content">
                                        <div class="col-md-3 col-ms-3 col-xs-3">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 15px;">
                                                    <a data-id="select-Información-General" style="color: #000;text-decoration:none;" class="clearfix categorys-vacancies" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="" alt="">Información General</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-ms-3 col-xs-3">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 15px;">
                                                    <a data-id="select-Comercial" style="color: #000;text-decoration:none;" class="clearfix categorys-vacancies" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="" alt="">ITSM-ITIL</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-ms-3 col-xs-3">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 15px;">
                                                    <a data-id="select-Marketing" style="color: #000;text-decoration:none;" class="clearfix categorys-vacancies" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="" alt="">Caractristicas</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-ms-3 col-xs-3">
                                            <div class="sec-title centered current">
                                                <h2 style="padding-top: 15px;">
                                                    <a data-id="select-Administración" style="color: #000;text-decoration:none;" class="clearfix categorys-vacancies" href="">
                                                        <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="" alt="">Benefcios</a>
                                                </h2>
                                            </div>
                                        </div>

                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    
                    <!--Content Side-->
                    <div class="content-side col-md-12 col-sm-12 col-xs-12">
                        <div class="inner">
                            <div class="career-posts">
                                <!--Career Block-->
                                <div class="career-block select-Información-General">
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