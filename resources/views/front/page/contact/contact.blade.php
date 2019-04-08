<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/contact.html by g4bbar, Thu, 24 Jan 2019 15:35:49 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Contact Us</title>
<!-- Stylesheets -->
<link href="realestate/css/bootstrap.css" rel="stylesheet">
<link href="realestate/css/style.css" rel="stylesheet">
<link href="realestate/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="realestate/css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="realestate/css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
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
    
        <!-- Main Header-->
   @include('front.includes.full-header')
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section style-two">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <span class="title">How To</span>
                            <h2>Contact Us</h2>
                            <div class="text">Don’t Hesitate to Contact with us for any kind of information</div>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="https://expert-themes.com/html/ourland/sendemail.php" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Massage"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Now</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <!-- Info Box -->
                        <div class="contact-info-box">
                            <div class="inner-box">
                                <span class="icon la la-phone"></span>
                                <h4>Phones</h4>
                                <ul>
                                    <li>88 867 56 453</li>
                                    <li>21 535 42 546</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="contact-info-box">
                            <div class="inner-box">
                                <span class="icon la la-envelope-o"></span>
                                <h4>Emails</h4>
                                <ul>
                                    <li>info@yousite.com</li>
                                    <li>sale@yousite.com</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="contact-info-box">
                            <div class="inner-box">
                                <span class="icon la la-globe"></span>
                                <h4>Address</h4>
                                <ul>
                                    <li>123 Ipsum Ave, Lorem City, <br> Dolor Country, Thw World</li>
                                </ul> 
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="contact-info-box follow-us">
                            <div class="inner-box">
                                <h4>Follow Us:</h4>
                                <ul class="social-icon-three">
                                    <li><a href="#"><span class="la la-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="la la-twitter"></span></a></li>
                                    <li><a href="#"><span class="la la-google-plus"></span></a></li>
                                    <li><a href="#"><span class="la la-dribbble"></span></a></li>
                                    <li><a href="#"><span class="la la-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!--End Contact Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>
    <!-- End Map Section -->

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
<script src="realestate/js/jquery.js"></script> 
<script src="realestate/js/popper.min.js"></script>
<script src="realestate/js/bootstrap.min.js"></script>
<script src="realestate/js/jquery-ui.js"></script>
<script src="realestate/js/jquery.fancybox.js"></script>
<script src="realestate/js/owl.js"></script>
<script src="realestate/js/wow.js"></script>
<script src="realestate/js/validate.js"></script>
<script src="realestate/js/appear.js"></script>
<script src="realestate/js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeEODj4mnpmSCoPcBVOIPzzHXRZLHHd3Q"></script>
<script src="realestate/js/map-script.js"></script>
<!--End Google Map APi-->
<!-- Color Setting -->
<script src="realestate/js/color-settings.js"></script>
</body>

<!-- Tiger Cage/contact.html by g4bbar, Thu, 24 Jan 2019 15:35:49 GMT -->
</html>