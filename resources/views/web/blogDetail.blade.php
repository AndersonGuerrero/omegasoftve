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

	<section>
		<div class="sec-title centered" style="margin-bottom:0px; padding-top: 30px">
			<div class="text">
					En nuestros blog encontrarás información relevante acerca de temas 
					relacionados con las nuestras soluciones y de gestión TI. Es un medio 
					importante para estar actualizado y encontrar respuestas a preguntas frecuentes.
			</div>
		</div>
	</section>
    
    <!--News Section-->
    <section class="news-section-three" style="padding-bottom: 0px;padding-top: 60px;">
    	<div class="auto-container">
            
            <div class="row clearfix">
				<div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<aside class="sidebar">
							<div class="sidebar-widget search-box">
								<form method="get" action="{{ route('blog') }}">
									<div class="form-group">
										<input type="search" name="search" value="" placeholder="Buscar" required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
						</aside>
					</div>

                        <!--News Block-->
						<div class="news-block-one">
							<div class="inner-box">
								<figure class="image-box"><a href="{{ route('blog-name', str_slug($blog->title)) }}">
                                    <img 
                                    style="width:870px;height: 372px;"
                                    src="{{ URL::to('/').'/blogs/'.$blog->id.'/'.$blog->imagen }}" alt=""></a></figure>
								<h3><a href="{{ route('blog-name', str_slug($blog->title)) }}">{{$blog->title}}</a></h3>
								<div class="post-info">Publicado: {{ $blog->created_at->format('d-m-Y')}}</div>
								<div style="
                                        font-size: 15px;
                                        position: relative;
                                        line-height: 1.60em;
                                        font-weight: 500;
                                        font-family: 'Raleway', sans-serif;
                                    " class="text">
                                        <?php echo ($blog->content)?>
								</div>
							</div>
						</div>
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
						
                        <!-- Search -->
                        <!-- <div class="sidebar-widget search-box">
                        	<form method="get" action="{{ route('blog') }}">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="Buscar" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div> -->
                        
                        <!-- Popular Category -->
                        <div class="sidebar-widget popular-category">
                        	<div class="sidebar-title2">
                            	<h3>Categorias</h3>
                            </div>
                            <ul class="popular-category-list">
								@foreach($categories as $item)
                                    <li>
                                        <a class="clearfix" style="text-decoration:none;" 
                                            href="{{ route('blog-category', str_slug($item->name))}}">{{$item->name}}
                                        </a>
                                    </li>
                                @endforeach
                        	</ul>
						</div>
                        
                        <!-- Latest Posts -->
                        <div class="sidebar-widget latest-posts">
                            <div class="sidebar-title">
                            	<h1>Ultimas Publicaciones</h1>
                            </div>
								<div style = "background: #5aceff21 !important; padding: 20px;">
									@foreach($lastsBlogs as $item)
										<article class="post">
											<figure class="post-thumb">
												<a href="{{ route('blog-name', str_slug($item->title))}}">
													<img
													style="height:72px;width:72px;" 
													src="{{ URL::to('/').'/blogs/'.$item->id.'/'.$item->imagen }}" alt="">
												</a>
											</figure>
											<h4><a href="{{ route('blog-name', str_slug($item->title))}}">{{$item->title}}</a></h4>
											<div class="post-info">Publicado {{ $item->created_at->format('d-m-Y')}}</div>
										</article>
									@endforeach
								</div>
						</div>
                    </aside>
                </div><!--End Sidebar Side-->
			</div>
        </div>
    </section>
    <br>
    <br>

@endsection
@section('javascript')
<script src="{{ URL::to('/') }}/js/team.js"></script>
<script>
    function callbackTeam(data){
        $('#form_team').submit()
    }
    $('#myTeam').on('show.bs.modal', function(event) {
        var title = $(event.relatedTarget).data('title')
        $('#input-team-title').val(title)
        $('#title-team').html(title)
    })
</script>
@endsection