@extends('layouts.web.base')
@section('title', 'Blog')
@section('content')
<section class="page-title">
		<div class="image-layer" 
			 style="opacity:10.0;">
			<img src="{{ URL::to('/') }}/images/background/blog.jpg" alt="">
		</div>
		<div class="auto-container">
		</div>
	</section>

	<!--<section>
		<div class="sec-title centered">
			<div class="text">
				Nuestro Programa de Parten tiene un claro enfoque en la rentabilidad. Nuestro objetivo es
				proporcionar a nuestros socios todas las herramientas y recursos que necesitan para tener
				éxito en la venta, implementación y soporte de nuestras soluciones para ITSM
			</div>
		</div>
	</section>-->

     <!--Page Title-->
     <!--<section class="page-title">
    	<div class="image-layer" style="background-image:url({{ URL::to('/') }}/images/background/7.jpg);"></div>
        <div class="auto-container">
        	<h1>Blog List</h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="index-2.html">Home</a></li>
                    <li class="active">Blog List</li>
                </ul>
            </div>
        </div>
    </section>-->
    
    
    <!--News Section-->
    <section class="news-section-three" style="padding-bottom: 0px">
    	<div class="auto-container">
            
            <div class="row clearfix">
				<div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<!--News Block-->
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="">
                                <img src="{{ URL::to('/') }}/images/resource/porque-adoptar-itil.jpg" alt=""></a></figure>
							<h3><a href="">Explain quarterly forecasting...</a></h3>
							<div class="post-info">Post: 15 April 2018</div>
							<div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
						</div>
					</div>
					<!--News Block-->
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-detail.html">
                                <img src="{{ URL::to('/') }}/images/resource/itil.jpg" alt=""></a></figure>
							<h3><a href="blog-detail.html">Get home loan & a chance to...</a></h3>
							<div class="post-info">Post: 18 April 2018</div>
							<div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
						</div>
					</div>
					<!--News Block-->
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-detail.html">
                                <img src="{{ URL::to('/') }}/images/resource/importancia-de-itil-en-un-service-desk.jpg" alt=""></a></figure>
							<h3><a href="blog-detail.html">Spirit second whales under...</a></h3>
							<div class="post-info">Post: 22 April 2018</div>
							<div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
						</div>
					</div>
					<!--News Block-->
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-detail.html">
                                <img src="{{ URL::to('/') }}/images/resource/help-desk-vs-service-desk.jpg" alt=""></a></figure>
							<h3><a href="blog-detail.html">Explain quarterly forecasting...</a></h3>
							<div class="post-info">Post: 15 April 2018</div>
							<div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
						</div>
					</div>
					<!--News Block-->
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-detail.html">
                                <img src="{{ URL::to('/') }}/images/resource/gestion-de-incidentes.jpg" alt=""></a></figure>
							<h3><a href="blog-detail.html">Get home loan & a chance to...</a></h3>
							<div class="post-info">Post: 18 April 2018</div>
							<div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
						</div>
					</div>
					<!--News Block-->
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-detail.html">
                                <img src="{{ URL::to('/') }}/images/resource/como-elegir-un-software-de-mesa-de-servicio.jpg" alt=""></a></figure>
							<h3><a href="blog-detail.html">Spirit second whales under...</a></h3>
							<div class="post-info">Post: 22 April 2018</div>
							<div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
						</div>
					</div>
					<!--News Block-->
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-detail.html">
                                <img src="{{ URL::to('/') }}/images/resource/beneficios-de-un-service-desk-para-su-organizacion.jpg" alt=""></a></figure>
							<h3><a href="blog-detail.html">Explain quarterly forecasting...</a></h3>
							<div class="post-info">Post: 15 April 2018</div>
							<div class="text">Nouvelle trouvait supplice lupanars revendre me. Crispent ethiopie philippe essaiera.</div>
						</div>
					</div>
					<!--News Block-->

					<!--News Block-->
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
						
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Buscar" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
                        
                        <!-- Popular Category -->
                        <div class="sidebar-widget popular-category">
                        	<div class="sidebar-title">
                            	<h3>Categorias</h3>
                            </div>
                            <ul class="popular-category-list">
                            	<li><a style="text-decoration:none;" href="#">ITIL</a></li>
                                <li><a style="text-decoration:none;" href="#">Service Desk</a></li>
                                <li><a style="text-decoration:none;" href="#">Gestión de Servicio</a></li>
                                <li><a style="text-decoration:none;" href="#">Cmdb</a></li>
                                <li><a style="text-decoration:none;" href="#">ITSM</a></li>
                            </ul>
						</div>
                        
                        <!-- Latest Posts -->
                        <div class="sidebar-widget latest-posts">
                            <div class="sidebar-title">
                            	<h3>Ultimos Post</h3>
                            </div>
							
                            <article class="post">
                            	<figure class="post-thumb"><a href="#">
                                    <img src="{{ URL::to('/') }}/images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                <h4><a href="#">Get a Duplex Home with Premium Partition</a></h4>
                                <div class="post-info">Post 30 Mar, 18</div>
                            </article>
                            
                            <article class="post">
                            	<figure class="post-thumb"><a href="#">
                                    <img src="{{ URL::to('/') }}/images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                <h4><a href="#">Get a Duplex Home with Premium Partition</a></h4>
                                <div class="post-info">Post 30 Mar, 18</div>
                            </article>
                            
                            <article class="post">
                            	<figure class="post-thumb"><a href="#"><img src="{{ URL::to('/') }}/images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                <h4><a href="#">Get a Duplex Home with Premium Partition</a></h4>
                                <div class="post-info">Post 30 Mar, 18</div>
                            </article>
                            
                            <article class="post">
                            	<figure class="post-thumb"><a href="#"><img src="{{ URL::to('/') }}/images/resource/post-thumb-4.jpg" alt=""></a></figure>
                                <h4><a href="#">Get a Duplex Home with Premium Partition</a></h4>
                                <div class="post-info">Post 30 Mar, 18</div>
                            </article>
                            
						</div>
                        
                    </aside>
                </div><!--End Sidebar Side-->
				
			</div>
            <br><br>
            <!-- Styled Pagination -->
			<div class="styled-pagination">
				<ul class="clearfix">
					<li class="prev"><a href="#"><span class="fa fa-angle-left"></span> &nbsp;Anterios</a></li>
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><span class="gap">&bull; &bull; &bull;</span></li>
					<li><a href="#">20</a></li>
					<li class="next"><a href="#">Siguiente &nbsp;<span class="fa fa-angle-right"></span></a></li>
				</ul>
			</div>
            
        </div>
    </section>
    
    <!--Call To Acion Two Section-->
    <!--<section class="call-to-action-two">
    	<div class="auto-container">
        	<div class="outer-box clearfix">
            	<h2>Are you looking a professional advisor for your business?</h2>
                <div class="link-box"><a href="contact.html" class="theme-btn btn-style-three">Get a quote</a></div>
            </div>
        </div>
    </section>-->
@endsection