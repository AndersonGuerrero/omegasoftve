@extends('layouts.web.base')
@section('title', 'Portal partner')
@section('content')

<section class="page-title">
    <div class="image-layer" 
         style="
         opacity:10.0;
         background-image:url('{{ URL::to('/') }}/images/background/fondo-para-portal-de-partner.jpg');
         height:100vh;">
        <div class="auto-container">
            <div class="row" style="padding-top:55px;">
                <div class="col- md-4 col-sm-4 col-xs-12">
                    <figure style="text-align: center" class="image-box"><a href=""><img style="height: 70px;" src="{{ URL::to('/') }}/images/resource/pruebas-beta-2.png" alt=""></a></figure>
                    <div class="sec-title centered">
                        <h3><a href=""  style="color: #fff; font-size: 24px"><b>Soluciones BETA</b></a></h3>
                        <p class="text" style="color: #fff; font-size: 15px;">
                            Conozca nuestras nuevas soluciones 
                            antes de ser lanzadas y ayudenos a mejorarlas.
                        </p>
                    </div>
                </div>
                <div class="col- md-4 col-sm-4 col-xs-12">
                    <figure style="text-align: center" class="image-box"><a href=""><img style="height: 70px;" src="{{ URL::to('/') }}/images/resource/oportunidades-de-negocio-2.png" alt=""></a></figure>
                    <div class="sec-title centered">
                        <h3><a href=""  style="color: #fff; font-size: 24px"><b>Oportunidades de Negocio</b></a></h3>
                        <p class="text" style="color: #fff; font-size: 15px;">
                            Registro y seguimiento de las oportunidades de 
                            negocio actualmente manejadas por su empresa.
                        </p>
                    </div>
                </div>
                <div class="col- md-4 col-sm-4 col-xs-12">
                    <figure style="text-align: center" class="image-box"><a href=""><img style="height: 70px;" src="{{ URL::to('/') }}/images/resource/solicitud-de-seriales.png" alt=""></a></figure>
                    <div class="sec-title centered">
                        <h3><a href="{{ URL::to('/') }}/solicitud/serial/" target="_back"  style="color: #fff; font-size: 24px"><b>Seriales</b></a></h3>
                        <p class="text" style="color: #fff; font-size: 15px;">
                            Solicite seriales para nuestras soluciones según las licencias adquiridas. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection