@extends('layouts.web.base')
@section('title', 'Webcast')
@section('content')

    <section class="page-title" style="height: 530px;">
        <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/webcast.jpg); opacity: 10.0;"></div>
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
                <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left: 55px">
                    <div class="sec-title centered" style="margin-bottom: 30px;    border: 1px solid #c2d1df;">
                        <div class="text" style="font-size: 23px;">
                            OmegaITSM, Potencia y simplicidad en una misma herramienta.
                        </div>
                        <div class="inner-box">
                            <figure  class="image-box"><a href=""><img src="http://127.0.0.1:8000/images/resource/webcast-OITSM.jpg" alt=""></a></figure>
                        </div>
                        <div class="text" style="font-size: 17px; text-align: initial;color:#807d7d; margin-bottom: 15px;padding: 15px;">
                                Duración: 45 min Aprox - Español
                        </div>
                        <div class="text" style="font-size: 20px; text-align: initial;padding: 15px;">
                                <b>Contenido</b>
                        </div>
                        <div class="text" style="text-align: justify; padding: 15px;">
                                Para brindar una atención efectiva y en los
                                tiempos establecidos, Omega ITSM ofrece a su
                                organización un control centralizado de las
                                solicitudes de soporte y garantiza la
                                disponibilidad en las operaciones del negocio,
                        </div>
                        <a href="" href=""data-id="1" data-toggle="modal" data-target="#myModal" style="text-decoration:none;">
                            <div style="height: 70px;background: #2976f5;">
                                <h1 style="color:#fff; padding-top: 20px; font-size: 30px;">Registrate</h1>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:55px">
                        <div class="sec-title centered" style="margin-bottom: 30px;border: 1px solid #c2d1df;">
                            <div class="text" style="font-size: 23px;">
                                OmegaITSM, Potencia y simplicidad en una misma herramienta.
                            </div>
                            <div class="inner-box" style="background: #212165; height: 250px;">
                                <figure  class="image-box"><a href=""><img src="http://localhost:8000/images/resource/" alt=""></a></figure>
                            </div>
                            <div class="inner-box" style="background: #212165;height: 50px; margin-top: 15px">
                                <figure  class="image-box"><a href=""><img src="http://localhost:8000/images/resource/" alt=""></a></figure>
                            </div>
                            <div class="text" style="font-size: 17px; text-align: initial;color:#807d7d; margin-bottom: 15px;padding: 15px;">
                                    Duración: 45 min Aprox - Español
                            </div>
                            <div class="text" style="font-size: 20px; text-align: initial;padding: 15px;">
                                    <b>Contenido</b>
                            </div>
                            <div class="text" style="text-align: justify; padding: 15px;">
                                    Para brindar una atención efectiva y en los
                                    tiempos establecidos, Omega ITSM ofrece a su
                                    organización un control centralizado de las
                                    solicitudes de soporte y garantiza la
                                    disponibilidad en las operaciones del negocio,
                            </div>
                            <a href="" href=""data-id="1" data-toggle="modal" data-target="#myModal" style="text-decoration:none;">
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