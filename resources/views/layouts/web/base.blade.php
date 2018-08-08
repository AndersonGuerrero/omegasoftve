<!DOCTYPE html>
<html>

<!-- Mirrored from themebunch.com/html/fico/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 May 2018 20:35:00 GMT -->
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- Stylesheets -->
<link href="{{ URL::to('/') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ URL::to('/') }}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ URL::to('/') }}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ URL::to('/') }}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ URL::to('/') }}/css/style.css" rel="stylesheet">
<link href="{{ URL::to('/') }}/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<!--Color Switcher Mockup-->
<link href="{{ URL::to('/') }}/css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{ URL::to('/') }}/css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{ URL::to('/') }}/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ URL::to('/') }}/js/respond.js"></script><![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
@yield('css')
</head>

<body>
<div class="page-wrapper">
    @include('layouts.web.sidebar')
    @yield('content')
    @include('layouts.web.footer')
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<!-- Color Palate / Color Switcher -->
<a href="{{ URL::to('/') }}/demo/" target="_black">
    <div class="color-trigger">
    Demo en linea
</div>
</a>
<!-- /.End Of Color Palate -->
<script src="{{ URL::to('/') }}/js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="{{ URL::to('/') }}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ URL::to('/') }}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ URL::to('/') }}/js/main-slider-script.js"></script>

<script src="{{ URL::to('/') }}/js/bootstrap.min.js"></script>
<script src="{{ URL::to('/') }}/js/jquery.fancybox.js"></script>
<script src="{{ URL::to('/') }}/js/owl.js"></script>
<script src="{{ URL::to('/') }}/js/jquery-ui.min.js"></script>
<script src="{{ URL::to('/') }}/js/appear.js"></script>
<script src="{{ URL::to('/') }}/js/wow.js"></script>
<script src="{{ URL::to('/') }}/js/validate.js"></script>
<script src="{{ URL::to('/') }}/js/script.js"></script>

<script>
    function send_newsletter(){
        if($('#form-newsletter input[name="email"]').val()){
            $('#form-newsletter').submit()
        }else{
            alert('Debe ingresar su correo!')
        }
    }

    function send_newsletterForm(){
        if($('#form-newsletter-form input[name="email"]').val()){
            $('#form-newsletter-form').submit()
        }else{
            alert('Debe ingresar su correo!')
        }
    }
</script>
@yield('javascript')
<!--Color Switcher-->
<script src="{{ URL::to('/') }}/js/color-settings.js"></script>
</body>
</html>