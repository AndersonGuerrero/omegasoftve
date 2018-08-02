@extends('layouts.web.base')
@section('title', 'Webcast')
@section('content')
    <section class="page-title" style="height: 530px;">
        <div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/webcast.jpg); opacity: 10.0;"></div>
        <div class="auto-container">
        </div>
    </section>

    <section class="">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 40px;">
                    <div class="sec-title centered" style="margin-bottom: 30px">
                        <h1 style="font-size: 30px">Conozca las principales funcionalidades que ofrece <br> nuestro aplicativo</h1>
                        <div class="text">Participe en nuestros Webcast en línea, interactúe con nuestros especialistas y descubra las soluciones que <br> traemos para ustedes.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection