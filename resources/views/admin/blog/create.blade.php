@extends('layouts.app')
@section('title', 'Admin')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-2 col-sm-3"></div>
                <div class="col-md-8 col-sm-6 col-xs-12" style="text-align: center;">
                   <div>
                       <h1 style="margin-top: 50px">Detalles del Blog</h1>
                   </div>
                   <div class="form-style-one quote-form">
                   {{ Form::open(array('route' => 'blog.store', 'id' => 'form-blog', 'enctype'=>'multipart/form-data')) }}
                           <div class="row clearfix">
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Titulo', 'required'=> 'required']) }}
                                   
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                               {{ Form::select('category', $categories, null, ['class'=>'form-control', 'placeholder'=>'Seleccione una categoria', 'required'=> 'required'] ) }}
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::textarea('content', null, array('class'=>'form-control', 'placeholder'=>'Contenido', 'required'=> 'required')) }}
                               </div>
                                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: end;">
                                    <input accept=".png, .jpg, .jpeg, .gif" name="image" type="file" required>
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
                <div class="col-md-2 col-sm-3"></div>
            </div>
            
           <!-- <div class="form-container">

            </div>-->
        </div>
    </section>
@endsection