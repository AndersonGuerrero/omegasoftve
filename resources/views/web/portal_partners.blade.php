@extends('layouts.web.base')
@section('title', 'Portal partner')
@section('content')

<section class="page-title" style="height:530px;">
    <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/fondo-para-portal-de-partner.jpg); opacity: 10.0;"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col- md-4 col-sm-4 col-xs-12">
                    <figure class="image-box"><a href=""><img style="padding: 80px;" src="{{ URL::to('/') }}/images/resource/solicitud-de-seriales.png" alt=""></a></figure>
            </div>
            <div class="col- md-4 col-sm-4 col-xs-12">
                    <figure class="image-box"><a href=""><img style="padding: 80px;" src="{{ URL::to('/') }}/images/resource/pruebas-beta-2.png" alt=""></a></figure>
            </div>
            <div class="col- md-4 col-sm-4 col-xs-12">
                    <figure class="image-box"><a href=""><img style="padding: 80px;" src="{{ URL::to('/') }}/images/resource/oportunidades-de-negocio-2.png" alt=""></a></figure>
            </div>
        </div>
    </div>
</section>

@endsection