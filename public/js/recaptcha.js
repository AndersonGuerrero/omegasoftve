function send_newsletter_footer(){
    $('#form-newsletter').submit()
}

function send_newsletter(){
    $('#form-newsletter-form').submit()
}

var CaptchaLoad = function() {
    var data = {'sitekey': '6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW'}
    if($('#g-recaptcha-footer')[0]){
        window.id_captcha_footer = grecaptcha.render($('#g-recaptcha-footer')[0], data);
    }
    
    if($('#g-recaptcha-webcast')[0]){
        window.id_captcha_webcast = grecaptcha.render($('#g-recaptcha-webcast')[0], data);
    }

    if($('#g-recaptcha-newsletter')[0]){
        window.id_captcha_newsletter = grecaptcha.render($('#g-recaptcha-newsletter')[0], data);
    }

    if($('#g-recaptcha-contact')[0]){
        window.id_captcha_contact = grecaptcha.render($('#g-recaptcha-contact')[0], data);
    }
    
    if($('#g-recaptcha-team')[0]){
        window.id_captcha_team = grecaptcha.render($('#g-recaptcha-team')[0], data);
    }

    if($('#g-recaptcha-partner')[0]){
        window.id_captcha_partner = grecaptcha.render($('#g-recaptcha-partner')[0], data);
    }

    if($('#g-recaptcha-quotation')[0]){
        window.id_captcha_quotation = grecaptcha.render($('#g-recaptcha-quotation')[0], data);
    }
    
    if($('#g-recaptcha-demo')[0]){
        window.id_captcha_demo = grecaptcha.render($('#g-recaptcha-demo')[0], data);
    }
    
};

$('.btn-send').on('click', function (event) {
    event.preventDefault()
    if($(event.currentTarget).closest('form')[0].checkValidity()){
        var idcaptcha = $(event.currentTarget).closest('form').find('.recaptcha-hide')[0].id
        if(idcaptcha === 'g-recaptcha-footer'){
            grecaptcha.execute(window.id_captcha_footer);
        }else if(idcaptcha === 'g-recaptcha-webcast'){
            grecaptcha.execute(window.id_captcha_webcast);
        }else if(idcaptcha === 'g-recaptcha-newsletter'){
            grecaptcha.execute(window.id_captcha_newsletter);
        }else if(idcaptcha === 'g-recaptcha-contact'){
            grecaptcha.execute(window.id_captcha_contact);
        }else if(idcaptcha === 'g-recaptcha-team'){
            grecaptcha.execute(window.id_captcha_team);
        }else if(idcaptcha === 'g-recaptcha-partner'){
            grecaptcha.execute(window.id_captcha_partner);
        }else if(idcaptcha === 'g-recaptcha-quotation'){
            grecaptcha.execute(window.id_captcha_quotation);
        }else if(idcaptcha === 'g-recaptcha-demo'){
            grecaptcha.execute(window.id_captcha_demo);
        }
    }else{
        $(event.currentTarget).closest('form')[0].reportValidity()
    }
});