<!-- Preloader -->
<div class="preloader"></div>
      
      <!-- Main Header-->
      <header class="main-header header-style-two">
          
              <!--Header Top-->
              <div class="header-top" style="background: #062c4c;">
                  <div class="auto-container clearfix">
                      <div class="top-right clearfix" style = "float: left !important;">
                          <ul class="info clearfix" style="margin-bottom: 0rem; padding-top: 7px;">

            
                              <li style="color: #fff; font-size: 14px;"><span  class="fa fa-envelope"></span> info@omegasoftve.com</li>
                              <li style="color: #fff; font-size: 14px;"><span style="width: 17px;" class="fa fa-phone"></span>(58) 244 386 8448</li>

                                <div class="" style = "float: left !important; padding-left: 250px; " >
                        
                                    <li style="color: #fff; font-size: 16px;">
                                        <a href="" data-id="1" data-toggle="modal" data-target="#myCotizacion" >
                                            <span  class="fa fa-money" style = "text-decoration:underline">
                                                 Solicitar Cotización
                                            </span> 
                                        </a> 
                                    </li>

                                    <li style="color: #fff; font-size: 16px; ">
                                        <a href=""  style = "padding-left: 0px;">
                                            <span  class="fa fa-desktop" style = "text-decoration:underline" >
                                            Solicitar Demostación
                                            </span> 
                                        </a>
                                        
                                    </li>


                                    <li style = "margin-right: -70px;">
                                        <div style = "text-align: center;">
                                                <div class="main-footer footer-style-two3 ">
                                                    <div class="footer-upper2">
                                                        <div class="social-links2" style ="display: inline-block;">
                                                            <ul class="clearfix" >
                                                                <li style = "margin-right: 3px;"><a style = "padding-left:0px;" target="_black" href="https://www.facebook.com/Omegasoftve/"><span class="fa fa-facebook-f"></span></a></li>
                                                                <li style = "margin-right: 3px;"><a style = "padding-left:0px;" target="_black" href="https://twitter.com/Omegasoft01"><span class="fa fa-twitter"></span></a></li>
                                                                <li style = "margin-right: 3px;"><a style = "padding-left:0px;" target="_black" href="https://join.skype.com/invite/rbtBS36Igg1J"><span class="fa fa-skype"></span></a></li>
                                                                <li style = "margin-right: 3px;"><a style = "padding-left:0px;" target="_black" href="https://www.instagram.com/omegasoftve/"><span class="fa fa-instagram"></span></a></li>
                                                                <li style = "margin-right: 3px;"><a style = "padding-left:0px;" target="_black" href="https://www.linkedin.com/company/omegasoft-c-a"><span class="fa fa-linkedin"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div>
                                        </li>

                                
                                
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
                                </div>
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
                                                  <li><a style="text-transform: none " href="{{ route('centalized-asset') }}">Gestión de Activo Centralizada</a></li>
                                              </ul>
                                          </li>
                                          
                                          <li class="dropdown"><a href="">Productos</a>
                                              <ul>
                                                  <li><a style="text-transform: none " href="{{ route('suite') }}">Suite Omega ITSM</a></li>
                                                  <li><a style="text-transform: none " href="{{ route('cmdb') }}">Omega CMDB</a></li>
                                                  <li><a style="text-transform: none " href="{{ route('omegaKB') }}">Omega KnowledgeBase</a></li>
                                              </ul>
                                          </li>


                                          <li class="dropdown"><a href="">Soporte</a>
                                                <ul>
                                                  <li><a style="text-transform: none" href="{{ route('web-soporte') }}">Centro de Soporte</a></li>
                                                  <li><a style="text-transform: none" target="_blank" href="{{ route('ticket_tracking') }}">Ticket de Soporte</a></li>
                                                  <li><a style="text-transform: none" target="_blank" href="{{ route('omega_kwoledgebase')}}">Base de Datos de Conocimiento</a></li>
                                                  <li><a style="text-transform: none" href="{{ route('manuales') }}">Manuales</a></li>
                                              </ul>
                                          </li>


                                          <li class=""><a href="{{ route('clients') }}">Clientes</a>
                                              <!-- <ul> -->
                                                  <!-- <li><a href="{{ route('clients') }}">Nuestros Clientes</a></li> -->
                                                  <!--<li><a href="{{ URL::to('/') }}/casos-de-exito/">Casos de Éxito</a></li>-->
                                              <!-- </ul> -->
                                          </li>

                                          <li class="dropdown"><a href="#">Partner</a>
                                              <ul>
                                                  <!--<li><a href="{{ URL::to('/') }}/partners/">Nuestros Partner</a></li>-->
                                                  <li><a style="text-transform: none" href="{{ route('program-partner') }}">Programa de Partner</a></li>
                                                  <li><a style="text-transform: none" href="{{ route('portal-partner') }}">Portal de Partner</a></li>
                                              </ul>
                                          </li>

                                          <li class=""><a href="{{ URL::to('/') }}/blog/">blog</a>
                                              <!-- <ul> -->
                                                  <!-- <li><a href="{{ URL::to('/') }}/blog/">blog</a></li> -->
                                                  <!-- <li><a href="{{ route('webcast') }}">Webcast</a></li> -->
                                                  <!--<li><a href="{{ URL::to('/') }}/newsletter/">Newsletter</a></li>-->
                                                 <!-- <li><a href="faqs.html">FAQs</a></li>
                                                  <li><a href="coming-soon.html">Comming Soon</a></li>-->
                                              <!-- </ul> -->
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
                                          <li><a style="text-transform: none " href="{{ route('ITSM') }}">Gestión de Servicios IT (ITSM)</a></li>
                                          <li><a style="text-transform: none " href="{{ route('centalized-asset') }}">Gestión de Activo Centralizada</a></li>
                                          </ul>
                                      </li>

                                      <li class="dropdown"><a href="">Productos</a>
                                            <ul>
                                                <li><a style="text-transform: none " href="{{ route('suite') }}">Suite Omega ITSM</a></li>
                                                <li><a style="text-transform: none " href="{{ route('cmdb') }}">Omega CMDB</a></li>
                                                <li><a style="text-transform: none " href="{{ route('omegaKB') }}">Omega KnowledgeBase</a></li>
                                            </ul>
                                        </li>


                                        <li class="dropdown"><a href="">Soporte</a>
                                            <ul>
                                                <li><a style="text-transform: none" href="{{ route('web-soporte') }}">Centro de Soporte</a></li>
                                                <li><a style="text-transform: none" target="_blank" href="{{ route('ticket_tracking') }}">Ticket de Soporte</a></li>
                                                <li><a style="text-transform: none" target="_blank" href="{{ route('omega_kwoledgebase')}}">Base de Datos de Conocimiento</a></li>
                                                <li><a style="text-transform: none" href="{{ route('manuales') }}">Manuales</a></li>
                                            </ul>
                                        </li>



                                        <li class=""><a href="{{ route('clients') }}">Clientes</a>
                                            <!-- <ul> -->
                                                <!-- <li><a href="{{ route('clients') }}">Nuestros Clientes</a></li> -->
                                                <!--<li><a href="{{ URL::to('/') }}/casos-de-exito/">Casos de Éxito</a></li>-->
                                            <!-- </ul> -->
                                        </li>

                                        <li class="dropdown"><a href="#">Partner</a>
                                              <ul>
                                                  <!--<li><a href="{{ URL::to('/') }}/partners/">Nuestros Partner</a></li>-->
                                                  <li><a style="text-transform: none" href="{{ route('program-partner') }}">Programa de Partner</a></li>
                                                  <li><a style="text-transform: none" href="{{ route('portal-partner') }}">Portal de Partner</a></li>
                                              </ul>
                                          </li>


                                          <li class=""><a href="{{ URL::to('/') }}/blog/">blog</a>
                                              <!-- <ul> -->
                                                  <!-- <li><a href="{{ URL::to('/') }}/blog/">blog</a></li> -->
                                                  <!-- <li><a href="{{ route('webcast') }}">Webcast</a></li> -->
                                                  <!--<li><a href="{{ URL::to('/') }}/newsletter/">Newsletter</a></li>-->
                                                 <!-- <li><a href="faqs.html">FAQs</a></li>
                                                  <li><a href="coming-soon.html">Comming Soon</a></li>-->
                                              <!-- </ul> -->
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
      @include('web.modals.quotation')

@section('javascript')
<script src="{{ URL::to('/') }}/js/itsm.js"></script>
<script>
    function callbackQuotation(data){
        $('#form_quotation').submit()
    }
</script>
@endsection