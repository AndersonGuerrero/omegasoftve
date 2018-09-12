@extends('layouts.admin.base')
@section('title', 'Admin')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 20px">
                   <div class="sec-title centered">
                       <h1 style="margin-top: 50px">Editar Categoria</h1>
                   </div>
                   <div class="form-style-one quote-form">
                   {{ Form::open(array(route('category-update', $category->id), 'id' => 'form-category')) }}
                           <div class="row clearfix">
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::text('name', $category->name, ['placeholder'=>'Nombre', 'required'=> 'required']) }}
                                   
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   <div class="text-center">
                                   {{ Form::submit('Guardar', ['class'=>'theme-btn btn-style-two btn-send']) }}
                                    </div>
                               </div>
                           </div>
                           {{ Form::close() }}
                   </div>
                </div>
            </div>
            
           <!-- <div class="form-container">

            </div>-->
        </div>
    </section>
@endsection