<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/ by g4bbar, Thu, 24 Jan 2019 15:29:21 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Home Page 01</title>
<!-- Stylesheets -->
<link href="{{asset('realestate/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('realestate/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{asset('realestate/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('realestate/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{asset('realestate/css/style.css')}}" rel="stylesheet">
<link href="{{asset('realestate/css/responsive.css')}}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{asset('realestate/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('realestate/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link href="{{asset('ratingcss/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('ratingcss/bootstrap/css/rating.css')}}" rel="stylesheet">
<link href="{{asset('ratingcss/bootstrap/awesome-font/css/fontawesome-all.min.css')}}" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>


<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    <?php
    use App\Model\Property;
    use App\Comment;
    ?>
 <!-- Main Header-->
<header class="main-header header-style-one">
<!--Header Top-->
@include('front.includes.index-header.top-header') 
    <!-- End Header Top -->

<!-- Header Lower -->
 @include('front.includes.lower-header') 
<!--End Header Lower-->

<!-- Sticky Header  -->
 @include('front.includes.drop-header') 
 <!-- End Sticky Menu -->
</header>
<!--End Main Header -->
@yield('content')

<!-- Main Footer -->
    @include('front.includes.full-footer')
    <!-- End Main Footer -->
</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="la la-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>
    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="#" class="purchase-btn">Purchase now $17</a>
</div><!-- End Color Switcher -->

<script src="{{asset('realestate/js/jquery.js')}}"></script> 
<script src="{{asset('realestate/js/popper.min.js')}}"></script>
<script src="{{asset('realestate/js/bootstrap.min.js')}}"></script>
<!--Revolution Slider-->
<script src="{{asset('realestate/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('realestate/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('realestate/js/main-slider-script.js')}}"></script>
<!--End Revolution Slider-->
<script src="{{asset('realestate/js/jquery-ui.js')}}"></script>
<script src="{{asset('realestate/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('realestate/js/owl.js')}}"></script>
<script src="{{asset('realestate/js/wow.js')}}"></script>
<script src="{{asset('realestate/js/isotope.js')}}"></script>
<script src="{{asset('realestate/js/appear.js')}}"></script>
<script src="{{asset('realestate/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="{{asset('realestate/js/color-settings.js')}}"></script>

<script src="{{asset('ratingcss/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('ratingcss/bootstrap/js/jquery.min.js')}}"></script>
<script src="{{asset('ratingcss/bootstrap/js/rating.js')}}"></script>    
<script>
$('.ratings').rating(function(vote,event){
  $.ajax({
    method:"POST",
    url:'{{ url('edit-star') }}',
    data:{vote:vote}
  }).done(function(info){
    $('.info').html("your vote: <b>"+info+"<b>")
  })
})
</script>
</body>
</html>