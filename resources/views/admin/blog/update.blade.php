@extends('layouts.app')
@section('title', 'Admin')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-2 col-sm-3"></div>
                <div class="col-md-8 col-sm-6 col-xs-12" style="text-align: center;">
                   <div style="text-align: center">
                       <h1 style="margin-top: 20px">Editar Blog</h1>
                    </div>
                    <div style="padding-bottom: 30px; text-align: center">
                        <img src="{{asset('blogs/'.$blog->id.'/'.$blog->imagen)}}" height="200px" width="250px" alt="">
                    </div>
                   <div class="form-style-one quote-form">
                   {{ Form::open(array(route('blog-update', $blog->id), 'id' => 'form-blog')) }}
                           <div class="row clearfix">
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::text('title', $blog->title, ['class'=>'form-control',  'placeholder'=>'Titulo', 'required'=> 'required']) }}
                                   
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                               {{ Form::select('category', $categories, $blog->category_id, ['class'=>'form-control',  'placeholder'=>'Seleccione una categoria', 'required'=> 'required'] ) }}
                               </div>
                               <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                   {{ Form::textarea('content', $blog->content, array( 'class'=>'form-control',  'placeholder'=>'Contenido', 'required'=> 'required')) }}
                               </div>
                                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: end;">
                                    870x372
                                    <input accept=".png, .jpg, .jpeg, .gif" name="imagen" type="file" required>         
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