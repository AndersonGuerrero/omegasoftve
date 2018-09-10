@extends('layouts.admin.base')
@section('title', 'Admin-Blogs')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 20px">
                   <div class="sec-title centered">
                       <h1 style="margin-top: 50px">Blogs</h1>
                   </div>
                   <div class="sec-title" style="float:right;">
                    <a href="">
                        <button class="theme-btn btn-style-two btn-send">
                               Crear blog
                            </button>
                    </a>   
                   </div>
                   <div class="form-style-one quote-form">
                   <table class="table" >
                   <thead>
                    <th>
                        <td></td>
                        <td>Imagen</td>
                        <td>Titulo</td>
                    </th>
                   </thead>
                    <tbody>
                    @foreach($blogs as $item)
                        <tr>
                            <td>
                            {{$item->id}}
                            </td>
                            <td>
                            {{$item->id}}
                            </td>
                            <td>
                            {{$item->title}}
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
