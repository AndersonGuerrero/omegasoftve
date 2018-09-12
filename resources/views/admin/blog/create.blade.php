@extends('layouts.admin.base')
@section('title', 'Admin')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 20px">
                   <div class="sec-title centered">
                       <h1 style="margin-top: 50px">Detalles del Blog</h1>
                   </div>
                   <div class="form-style-one quote-form">
                   {{ Form::open(array('route' => 'blog.store', 'id' => 'form-blog', 'enctype'=>'multipart/form-data')) }}
                           <div class="row clearfix">
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::text('title', null, ['placeholder'=>'Titulo', 'required'=> 'required']) }}
                                   
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                               {{ Form::select('category', $categories, null, ['placeholder'=>'Seleccione una categoria', 'required'=> 'required'] ) }}
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::textarea('content', null, array('placeholder'=>'Contenido', 'required'=> 'required')) }}
                               </div>
                                <div style="">
                                    <label class="btn btn-primary" style="font-weight: 600;font-size: 12px;border-color: #8baad6 !important;background: #8baad6 !important;">
                                            Adjuntar Imagen<input accept=".png, .jpg, .jpeg, .gif" name="image" type="file" required style="">
                                    </label>
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