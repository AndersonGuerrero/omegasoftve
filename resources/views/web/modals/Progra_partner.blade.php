<!-- Modal -->
<div class="modal fade" id="myPartner" tabindex="-1" role="dialog" aria-labelledby="myPartnerLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="callback-box">
                    <div class="callback-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;position: absolute;height: 30px;width: 30px;top: 5px;right: 6px;z-index: 9;"><i class="fa fa-times"></i></button>
                        <h2 style="text-transform: none" >Registrate  y conviértete en nuestro socio </h2>
                    </div>
                    <div class="form-box" style="padding-left:15px;padding-right:15px;padding-top:25px">
                        <div class="form-style-two callback-form">
                            {{ Form::open(array('route' => 'partner.send', 'id' => 'form_partner')) }}
                               <div class="col-md-12 col-md-12 col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                                    <div class="col-md-6 col-md-6 col-xs-6 form-group" style="padding-left: 0px">
                                        <div style="margin-bottom: 10px">
                                            <input type="text" name="company" value="" placeholder="Empresa" required>
                                        </div>
                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="person_contact" value="" placeholder="Persona a Contactar" required>
                                        </div>
                                        <div style="margin-bottom: 10px">
                                            <input type="email" name="email" value="" placeholder="Email" required>
                                        </div>
                                        <div style="margin-bottom: 10px">
                                            <input type="text" name="phone" value="" placeholder="Telefono" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-6 col-xs-6" style="padding-right: 0px">
                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="cel" value="" placeholder="Celular" required>
                                        </div>
                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="country" value="" placeholder="País" required>
                                        </div>
                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="city" value="" placeholder="Ciudad" required>
                                        </div>
                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="web_page" value="" placeholder="Pagina Web" required>
                                        </div>
                                    </div>
                                    <div>
                                        <textarea name="message" required placeholder="Mensaje"></textarea>
                                    </div>
                                    <div
                                        class="recaptcha-hide" 
                                        id="g-recaptcha-partner"
                                        data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                        data-callback="callbackPartner"
                                        data-size="invisible">
                                    </div>
                                    <div>
                                        <div class="text-center">
                                            <button type="submit" class="theme-btn btn-style-two btn-send" style="margin-top: 0px; margin-bottom: 25px;">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div><!-- modal content -->
        </div><!-- modal dialog -->
    </div><!-- modal fade -->
<!-- Cierra Modal -->
@section('javascript')
    <script>
        function callbackPartner(data){
            $('#form_partner').submit()
        }
    </script>
@endsection