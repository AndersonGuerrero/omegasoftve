@extends('layouts.app')
@section('title', 'Admin-Blogs')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 90px;padding-left:90px;">
                   <div style="text-align: center">
                       <h2 style="margin-top: 50px">Blogs</h2>
                   </div>
                   <div class="sec-title" style="float:right;padding-bottom:15px;">
                    <a href="{{ route('blog-create') }}">
                        <button class="btn btn-outline-success">
                               Crear blog
                        </button>
                    </a>   
                   </div>
                   <div class="form-style-one quote-form">
                   <table class="table table-striped  table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Categoria</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($blogs as $item)
                            <tr>
                                <th scope="row">
                                    {{$item->id}}
                                </th>
                                <td>
                                    <img src="{{asset('blogs/'.$item->id.'/'.$item->imagen)}}" width="40px" alt="">
                                </td>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>
                                    {{$item->category->name}}
                                </td>
                                <td style="text-align: center">
                                    <a href="{{ route('blog-update', $item->id) }}" style="color:#fff;font-size:12px;font-weight:600;text-decoration:none">
                                    <button type="button" class="btn btn-primary" style="width: 50%;">
                                        Editar
                                    </button>
                                    </a>
                                
                                <td style="text-align: center;">
                                    <a href="{{ route('blog-delete', $item->id) }}" style="color:#fff;font-size:12px;font-weight:600;text-decoration:none">
                                        <button type="button" class="btn btn-danger" style="width: 50%;">
                                        Eliminar
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                   </table>
                   </div>
                </div>
            </div>
            
           <!-- <div class="form-container">

            </div>-->
        </div>
    </section>
@endsection
