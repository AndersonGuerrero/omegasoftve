<!-- Preloader -->
<div class="preloader"></div>
      
      <!-- Main Header-->
      <header class="main-header header-style-two">
          
              <!--Header Top-->
              <div class="header-top" style="background: #062c4c;">
                  <div class="auto-container clearfix">
                      <div class="top-right clearfix">
                          <ul class="info clearfix" style="margin-bottom: 0rem;">
                              <li><a href="email:info@omegasoftve.com" style="color: #fff; font-size: 14px;"><span  class="fa fa-envelope"></span> info@Omegasoftve.com</a></li>
                              <li><a href="#" style="color: #fff; font-size: 14px;"><span style="width: 17px;" class="fa fa-phone"></span>(58) 244 386 8448</a></li>                                  
                              <!-- <div class="top-right clearfix">
                                  <div class="options-box clearfix">
                                      <div class="lang-box">
                                          <div class="dropdown">
                                              <button style="color: #fff; margin-top: 3px;" class="lang-btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <img style="height: 15px;width:15px;margin-right:5px;margin-top: -5px;" 
                                                  src="{{ URL::to('/') }}/images/icons/imgpsh_fullsize.png" alt="">Español<span class=""></span></button>
                                              <ul class="dropdown-menu search-panel" aria-labelledby="dropdownMenu2">
                                                  <li><a style="font-size: 15px;" href="{{ URL::to('/') }}/english/">English</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div> -->
                          </ul>
                      </div>
                      
      
                  </div>
              </div>
              
              <!--Main Box-->
              <div class="main-box">
                  <div class="auto-container">
                      <div class="clearfix">
                          
                          <div class="logo-box">
                              <div class="logo"><a href="{{ route('index') }}"><img src="{{ URL::to('/') }}/images/logo.png" alt="" title=""></a></div>
                          </div>
                          
                          <div class="nav-outer clearfix">
                              <!-- Main Menu -->
                              <nav class="main-menu">
                                  <div class="navbar-header">
                                      <!-- Toggle Button -->    	
                                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      </button>
                                  </div>
                                  
                                  <div class="navbar-collapse collapse clearfix">
                                      <ul class="navigation clearfix">
                                          <li class="dropdown"><a href="">Soluciones</a>
                                              <ul>
                                                  <li><a style="text-transform: none " href="{{ route('ITSM') }}">Gestión de Servicios IT (ITSM)</a></li>
                                              </ul>
                                          </li>
                                          </li>
                                          <li class=""><a href="{{ route('web-soporte') }}">Soporte</a>
                                          </li>
                                          <li class="dropdown"><a href="#">Clientes</a>
                                              <ul>
                                                  <li><a href="{{ route('clients') }}">Nuestros Clientes</a></li>
                                                  <!--<li><a href="{{ URL::to('/') }}/casos-de-exito/">Casos de Éxito</a></li>-->
                                              </ul>
                                          </li>
                                          <li class="dropdown"><a href="#">Partner</a>
                                              <ul>
                                                  <!--<li><a href="{{ URL::to('/') }}/partners/">Nuestros Partner</a></li>-->
                                                  <li><a style="text-transform: none" href="{{ route('program-partner') }}">Programa para Partner</a></li>
                                                  <li><a style="text-transform: none" href="{{ route('portal-partner') }}">Portal de Partner</a></li>
                                              </ul>
                                          </li>
                                          <li class="dropdown"><a href="#">Comunidad</a>
                                              <ul>
                                                  <li><a href="{{ URL::to('/') }}/blog/">blog</a></li>
                                                  <!-- <li><a href="{{ route('webcast') }}">Webcast</a></li> -->
                                                  <!--<li><a href="{{ URL::to('/') }}/newsletter/">Newsletter</a></li>-->
                                                 <!-- <li><a href="faqs.html">FAQs</a></li>
                                                  <li><a href="coming-soon.html">Comming Soon</a></li>-->
                                              </ul>
                                          </li>
                                          <li class="dropdown"><a href="#">Nosotros</a>
                                              <ul>
                                                  <li><a href="{{ route('about') }}">Quines somos</a></li>
                                                  <li><a href="{{ route('team') }}">Únete a Nosotros</a></li>
                                                  <li><a href="{{ route('contact') }}">Contáctanos</a></li>
                                              </ul>
                                          </li>
                                          <!--<li><a href="contact.html">Contact Us</a></li>-->
                                      </ul>
                                  </div>
                              </nav>
                              <!-- Main Menu End-->
                          </div>
                          
                      </div>
                  </div>
              </div>
              <!--End Main Box-->
              @include('flash::message')
              <!--Sticky Header-->
              <div class="sticky-header">
                  <div class="auto-container clearfix">
                      <!--Logo-->
                      <div class="logo pull-left">
                          <a href="{{ route('index') }}" class="img-responsive"><img src="{{ URL::to('/') }}/images/logo-small.png" alt="" title=""></a>
                      </div>
                      
                      <!--Right Col-->
                      <div class="right-col pull-right">
                          <!-- Main Menu -->
                          <nav class="main-menu">
                              <div class="navbar-header">
                                  <!-- Toggle Button -->    	
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                  </button>
                              </div>
                              
                              <div class="navbar-collapse collapse clearfix">
                                  <ul class="navigation clearfix">
                                      <li class="dropdown"><a href="">Soluciones</a>
                                          <ul>
                                              <li><a style="text-transform: none" 
                                              href="{{ route('ITSM') }}">Gestión de Servicios IT (ITSM)</a></li>
                                          </ul>
                                      </li>
                                      <li class=""><a href="{{ route('web-soporte') }}">Soporte</a>
                                      </li>
                                      <li class="dropdown"><a href="#">Clientes</a>
                                          <ul>
                                              <li><a href="{{ route('clients') }}">Nuestros Clientes</a></li>
                                              <!--<li><a href="{{ URL::to('/') }}/casos-de-exito/">Casos de Éxito</a></li>-->
                                          </ul>
                                      </li>
                                      <li class="dropdown"><a href="#">Partner</a>
                                          <ul>
                                             <!-- <li><a href="{{ URL::to('/') }}/partners/">Nuestros Partner</a></li>-->
                                              <li><a style="text-transform: none" href="{{ route('program-partner') }}"> Programa para Partner</a></li>
                                              <li><a style="text-transform: none" href="{{ route('portal-partner') }}">Portal de Partner</a></li>
                                          </ul>
                                      </li>
                                      <li class="dropdown"><a href="#">Comunidad</a>
                                          <ul>
                                              <li><a href="{{ URL::to('/') }}/blog/">Blog</a></li>
                                              <!-- <li><a href="{{ route('webcast') }}">Webcast</a></li> -->
                                              <!--<li><a href="{{ URL::to('/') }}/newsletter/">Newsletter</a></li>-->
                                          </ul>
                                      </li>
                                      <li class="dropdown"><a href="#">Nosotros</a>
                                          <ul>
                                              <li><a href="{{ route('about') }}">Quines somos</a></li>
                                              <li><a href="{{ route('team') }}">Únete a Nosotros</a></li>
                                              <li><a href="{{ route('contact') }}">Contáctanos</a></li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                          </nav><!-- Main Menu End-->
                      </div>
                      
                     </div>
                 </div>
              <!--End Sticky Header-->
          
      </header>
      <!--End Main Header -->