<!--Main Footer-->
<footer class="main-footer footer-style-two">
        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">    
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <div class="widget-inner">
                                        <div class="logo"><img src="{{ URL::to('/') }}/images/logo.png" alt=""></div>
                                        <div class="text">Nuestro   principales  objetivos   son 
                                                          combinar la facilidad,la accesibilidad
                                                          y  la  practicidad   al   proporcionar 
                                                          soluciones  flexibles  y  asequi  para 
                                                          empresas  de  todos  los tamaños.</div>
                                        <!--<div class="social-links">
                                            <ul class="clearfix">
                                                <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        	<!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <div class="widget-inner">
                                        <h3>Link de Acceso rapido</h3>
                                        <div class="links">
                                            <ul>
                                                <li><a href="#">Acceso de Soporte</a></li>
                                                <li><a href="#">Registre un ticket</a></li>
                                                <li><a href="#">Portal autoservicio</a></li>
                                                <li><a href="#">Omega ITSM</a></li>
                                                <li><a href="#">Omega CMDB</a></li>
                                                <li><a href="#">Omega Knowledge</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">    
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget info-widget">
                                    <div class="widget-inner">
                                        <h3 style="text-align: center;">CONTACTANOS</h3>
                                        <div class="info">
                                            <ul>
                                                <li class="clearfix"><strong>Telefono: </strong> <span class="txt">(58) 244 386 8448</span></li>
                                                <li class="clearfix"><strong>Email: </strong> <span class="txt"><a href="">info@omegasoftve.com</a></span></li>
                                                <li class="clearfix"><strong>Direccion: </strong> <span class="txt">Calle páez #24 entre calle carabaño y leopoldo tosta sector centro. villa de cura, venezuela.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget gallery-widget">
                                    <div class="widget-inner">
                                        <h3 style="margin-left: 25px;" >Redes Sociales</h3>
                                        <div> 
                                            <div>
                                                <div class="social-links">
                                                        <ul class="clearfix">
                                                            <li><a target="_black" href="https://www.facebook.com/Omegasoftve/"><span class="fa fa-facebook-f"></span></a></li>
                                                            <li><a target="_black" href="https://twitter.com/Omegasoft01"><span class="fa fa-twitter"></span></a></li>
                                                            <li><a target="_black" href="https://join.skype.com/invite/MHGMd5TGZRR9"><span class="fa fa-skype"></span></a></li>
                                                            <li><a target="_black" href="https://www.instagram.com/omegasoftve/"><span class="fa fa-instagram"></span></a></li>
                                                            <li><a target="_black" href="https://www.linkedin.com/company/omegasoft-c-a"><span class="fa fa-linkedin"></span></a></li>
                                                        </ul>
                                                </div>
                                            </div>
                                            {{ Form::open(array('route' => 'newsletter.send', 'id' => 'form-newsletter')) }}
                                            <div style="width: 203px;">
                                                    <h4 style="text-align: center; color: white; font-size: 16px;padding: 7px; margin-top: 14px !important;">Suscribete a nuestros boletin mensual</h4>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" 
                                                                name="email"
                                                                required
                                                                placeholder="Email" 
                                                                aria-label="Recipient's username" 
                                                                aria-describedby="button-addon2">
                                                            <div class="input-group-append">
                                                                <button 
                                                                data-callback="send_newsletter"
                                                                data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                                                style="background:#2387e4; color: white; font-size: 15px;" 
                                                                class="btn btn-outline-secondary g-recaptcha" 
                                                                type="button" id="button-addon2">Enviar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style=""> 
                                                        <label style="color: white; font-size: 9px;">
                                                            <input type="checkbox" name="acepta" required checked autocomplete="off"> Acepto Politicas de tratamiento de datos.
                                                        </label>
                                                    </div>
                                                    @include('flash::message')
                                                    {{ Form::close() }}    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright">&copy; 2018 todos los derechos reservados <!--<a href="https://themeforest.net/user/yogsthemes/portfolio">YogsThemes--></a></div>
                    </div>
                   <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-nav clearfix">
                            <ul class="clearfix">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>


    </footer>