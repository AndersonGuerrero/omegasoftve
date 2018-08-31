<!-- Modal -->
<div class="modal fade" id="myTeam" tabindex="-1" role="dialog" aria-labelledby="myTeamLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="callback-box">
                        <div class="callback-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;position: absolute;height: 30px;width: 30px;top: 5px;right: 6px;z-index: 9;"><i class="fa fa-times"></i></button>
                            <h2 id="title-team"></h2>
                        </div>
                        <div class="form-box" style="padding-left:15px;padding-right:15px;padding-top:25px">
                            <div class="form-style-two callback-form">
                            {{ Form::open(array('route' => 'team.register', 'id' => 'form_team', 'enctype' => 'multipart/form-data')) }}
                                   <div class="col-md-12 col-md-12 col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                                        <div class="col-md-12 col-md-12 col-xs-12 form-group" style="padding-left: 0px; padding-right: 0px">
                                            <div style="margin-bottom: 10px">
                                                <input type="text" name="name" value="" placeholder="Nombre y Apellido" required>
                                            </div>
                                            <div  style="margin-bottom: 10px">
                                                <input type="text" name="email" value="" placeholder="Correo electronico" required>
                                            </div>
                                        </div>
                                        <div>
                                            <textarea name="resume" required placeholder="Resumen de Experiencia"></textarea>
                                        </div>
                                        <div style="text-align: end;">
                                            <label class="btn btn-primary" style="font-weight: 600;font-size: 12px;border-color: #8baad6 !important;background: #8baad6 !important;">
                                                    Adjuntar CV<input accept=".pdf, .odt, .docx, .pptx, .doc, .dot" name="cv" type="file" style="display: none;">
                                            </label>
                                        </div>
                                        <input type="hidden" name="team_title" id="input-team-title">
                                        <div
                                            class="recaptcha-hide" 
                                            id="g-recaptcha-team"
                                            data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                            data-callback="callbackTeam"
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