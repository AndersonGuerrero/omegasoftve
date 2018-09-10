<!-- Preloader -->
<div class="preloader"></div>
      
      <!-- Main Header-->
      <header class="main-header header-style-two">
          
              <!--Header Top-->
          
              
              <!--Main Box-->
              <div class="main-box">
                  <div class="auto-container">
                      <div class="clearfix">
                          
                          <div class="logo-box">
                              <div class="logo"><a href="{{ URL::to('/') }}/"><img src="{{ URL::to('/') }}/images/logo.png" alt="" title=""></a></div>
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
                                          <li class=""><a href="{{ URL::to('/') }}/admin/blog/">Blogs</a>
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
                          <a href="{{ URL::to('/') }}/" class="img-responsive"><img src="{{ URL::to('/') }}/images/logo-small.png" alt="" title=""></a>
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
                                      <li class=""><a href="{{ URL::to('/') }}/admin/blog/">Soporte</a>
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