@extends('layouts.app')
@section('title', 'Admin')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: center">
                   <div >
                       <h1 style="margin-top: 20px;text-align: center">Nueva categoria</h1>
                   </div>
                   <div class="form-style-one quote-form">
                   {{ Form::open(array('route' => 'category.store', 'id' => 'form-category')) }}
                           <div style="text-align: center">
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required'=> 'required']) }}
                                   
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <div class="text-center">
                                   {{ Form::submit('Guardar', ['class'=>'btn-primary btn-send btn']) }}
                                    </div>
                               </div>
                           </div>
                           {{ Form::close() }}
                   </div>
                </div>
                <div class="col-md-4 col-sm-4"></div>
            </div>
            
           <!-- <div class="form-container">

            </div>-->
        </div>
    </section>
@endsection