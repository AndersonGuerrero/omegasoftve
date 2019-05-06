@extends('layouts.app')
@section('title', 'Admin')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4 col-xs-12" style="text-align: center">
                   <div style="text-align: center;">
                       <h2 style="margin-top: 20px;">Editar Categoria</h2>
                   </div>
                   <div class="form-style-one quote-form">
                   {{ Form::open(array(route('category-update', $category->id), 'id' => 'form-category')) }}
                           <div style="text-align: center">
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::text('name', $category->name, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required'=> 'required']) }}
                                   
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <div class="text-center">
                                   {{ Form::submit('Guardar', ['class'=>'btn btn-primary btn-send']) }}
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