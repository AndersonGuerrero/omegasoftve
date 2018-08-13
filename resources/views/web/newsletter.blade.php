@extends('layouts.web.base')
@section('title', 'Newsletter')
@section('content')
    <section class="page-title" style="height: 530px;">
        <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/newsletter.jpg); opacity: 10.0;"></div>
        <div class="auto-container">
        </div>
    </section>

    <section>
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 40px;">
                        <div class="sec-title centered" style="text-align: initial; margin-bottom: 30px">
                            <h1>Acerca de Nosotros</h1>
                            <div class="text">Omegasoft nace en el 2010 como una empresa de servicios IT, 
                            Integrada con un grupo de profecionales experimentados y preparados en el área
                            de gestion servicios IT, ofreciendo a las organazaciones, servicios profecionales
                            para mejorar sus capacidades organizativas, mejorar las prestación de servicio
                            por parte de su centro de soporte, redicir tiempos y mejorar la eficiencia.</div>
                        </div>
                    </div>
                    <div style="height: 100px;"> 
                        <div style="height: 70px; background: #fff">
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="sec-title centered">
                                    <div class="text" style="text-align: initial;">Suscribase al Newsletter de ManageEngine</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: 23px;">
                            {{ Form::open(array('route' => 'newsletter.send', 'id' => 'form-newsletter-form')) }}
                                <div class="input-group mb-3">
                                    <input
                                    name="email" 
                                    type="email" class="form-control" 
                                    placeholder="Email ID" aria-label="Email" 
                                    aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button 
                                        data-callback="send_newsletterForm"
                                        data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                        style="background: green; color: white; font-size: 15px;" 
                                        class="btn btn-outline-secondary g-recaptcha" type="button">Enviar</button>
                                    </div>
                                </div>
                            @include('flash::message')
                            {{ Form::close() }}
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="sec-title centered">
                                    <div class="text" style="text-align: initial;">Nota:Nunca venderemos o compatiremos su direccion de correo electronico</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="news-section-two">
            <div class="auto-container">
                
                <div class="row clearfix">
                    <!--News Block-->
                    <div class="news-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ URL::to('/') }}/images/resource/image-13.jpg" alt=""></figure>
                            <div class="lower-box">
                                <div class="post-info">Post: 15 April 2018</div>
                                <h3>Explain quarterly forecasting...</h3>
                                <div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
                                <div class="link-box">Read More</div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-detail.html"><img src="{{ URL::to('/') }}/images/resource/image-14.jpg" alt=""></a></figure>
                            <div class="lower-box">
                                <div class="post-info">Post: 18 April 2018</div>
                                <h3><a href="blog-detail.html">Explor new plan for business</a></h3>
                                <div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
                                <div class="link-box"><a href="blog-detail.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-detail.html"><img src="{{ URL::to('/') }}/images/resource/image-15.jpg" alt=""></a></figure>
                            <div class="lower-box">
                                <div class="post-info">Post: 19 April 2018</div>
                                <h3><a href="blog-detail.html">How select a good advisor</a></h3>
                                <div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
                                <div class="link-box"><a href="blog-detail.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection