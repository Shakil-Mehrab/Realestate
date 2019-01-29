<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/properties.html by g4bbar, Thu, 24 Jan 2019 15:34:57 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Properties</title>
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
                <h1>Properties</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Properties</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Property Filter Section -->
    <section class="property-filter-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                        <h2>PROPERTY TYPES</h2>
                    </div>

                    <!--Filter-->
                    <div class="filters">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All</li>
                            <li class="filter" data-role="button" data-filter=".apprtment">Apprtment</li>
                            <li class="filter" data-role="button" data-filter=".house">House</li>
                            <li class="filter" data-role="button" data-filter=".villa">Villa</li>
                            <li class="filter" data-role="button" data-filter=".form">Form</li>
                            <li class="filter" data-role="button" data-filter=".restaurent">Restaurent</li>
                        </ul>                                    
                    </div>
                </div>

                <div class="filter-list row">
                    <!-- Property Block -->
                    <div class="property-block all mix house villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/property-1.jpg" alt=""></figure>
                                <span class="for">FOR SALE</span>
                                <span class="featured">FEATURED</span>
                                <ul class="option-box">
                                    <li><a href="images/resource/property-1.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                </ul>
                                <ul class="info clearfix">
                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                    <li><a href="property-detail.html">Bar</a>,</li>
                                    <li><a href="property-detail.html">House</a>,</li>
                                </ul>
                                <div class="thumb"><img src="images/resource/thumb-5.jpg" alt=""></div>
                                <h3><a href="property-detail.html">Single House Near Orland Park.</a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                    <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                    <li><i class="flaticon-car"></i> 2 Garage</li>
                                    <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                    <div class="price">$ 13,65,000</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block all mix restaurent apprtment form col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/property-2.jpg" alt=""></figure>
                                <span class="for">FOR SALE</span>
                                <span class="featured">FEATURED</span>
                                <ul class="option-box">
                                    <li><a href="images/resource/property-2.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                </ul>
                                <ul class="info clearfix">
                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                    <li><a href="property-detail.html">Bar</a>,</li>
                                    <li><a href="property-detail.html">House</a>,</li>
                                </ul>
                                <div class="thumb"><img src="images/resource/thumb-6.jpg" alt=""></div>
                                <h3><a href="property-detail.html">Apartment Morden 1243, W No...</a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                    <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                    <li><i class="flaticon-car"></i> 2 Garage</li>
                                    <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                    <div class="price">$ 13,65,000</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block all mix house restaurent villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/property-3.jpg" alt=""></figure>
                                <span class="for">FOR SALE</span>
                                <span class="featured">FEATURED</span>
                                <ul class="option-box">
                                    <li><a href="images/resource/property-3.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                </ul>
                                <ul class="info clearfix">
                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                    <li><a href="property-detail.html">Bar</a>,</li>
                                    <li><a href="property-detail.html">House</a>,</li>
                                </ul>
                                <div class="thumb"><img src="images/resource/thumb-7.jpg" alt=""></div>
                                <h3><a href="property-detail.html">Great Home for Single fmaily</a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                    <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                    <li><i class="flaticon-car"></i> 2 Garage</li>
                                    <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                    <div class="price">$ 13,65,000</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block all mix apprtment villa form col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/property-4.jpg" alt=""></figure>
                                <span class="for">FOR SALE</span>
                                <span class="featured">FEATURED</span>
                                <ul class="option-box">
                                    <li><a href="images/resource/property-4.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                </ul>
                                <ul class="info clearfix">
                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                    <li><a href="property-detail.html">Bar</a>,</li>
                                    <li><a href="property-detail.html">House</a>,</li>
                                </ul>
                                <div class="thumb"><img src="images/resource/thumb-8.jpg" alt=""></div>
                                <h3><a href="property-detail.html">Single House Near Orland Park.</a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                    <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                    <li><i class="flaticon-car"></i> 2 Garage</li>
                                    <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                    <div class="price">$ 13,65,000</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block all mix house restaurent villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/property-5.jpg" alt=""></figure>
                                <span class="for">FOR SALE</span>
                                <span class="featured">FEATURED</span>
                                <ul class="option-box">
                                    <li><a href="images/resource/property-5.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                </ul>
                                <ul class="info clearfix">
                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                    <li><a href="property-detail.html">Bar</a>,</li>
                                    <li><a href="property-detail.html">House</a>,</li>
                                </ul>
                                <div class="thumb"><img src="images/resource/thumb-9.jpg" alt=""></div>
                                <h3><a href="property-detail.html">Apartment Morden 1243, W No...</a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                    <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                    <li><i class="flaticon-car"></i> 2 Garage</li>
                                    <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                    <div class="price">$ 13,65,000</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Property Block -->
                    <div class="property-block all mix apprtment restaurent form col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/resource/property-6.jpg" alt=""></figure>
                                <span class="for">FOR SALE</span>
                                <span class="featured">FEATURED</span>
                                <ul class="option-box">
                                    <li><a href="images/resource/property-6.jpg" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                    <li><a href="#"><i class="la la-heart"></i></a></li>
                                    <li><a href="#"><i class="la la-retweet"></i></a></li>
                                </ul>
                                <ul class="info clearfix">
                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                    <li><a href="property-detail.html">Bar</a>,</li>
                                    <li><a href="property-detail.html">House</a>,</li>
                                </ul>
                                <div class="thumb"><img src="images/resource/thumb-10.jpg" alt=""></div>
                                <h3><a href="property-detail.html">Great Home for Single fmaily</a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                    <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                                    <li><i class="flaticon-car"></i> 2 Garage</li>
                                    <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="property-detail.html" class="theme-btn">More Detail</a></div>
                                    <div class="price">$ 13,65,000</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Load More -->
                <div class="load-more-btn text-center">
                    <a href="#" class="theme-btn btn-style-two">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Property Filter Section -->


    <!--Clients Section-->
    <section class="clients-section style-three">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section--> 

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
<script src="realestate/js/isotope.js"></script>
<script src="realestate/js/mixitup.js"></script>
<script src="realestate/js/appear.js"></script>
<script src="realestate/js/script.js"></script>
<!-- Color Setting -->
<script src="realestate/js/color-settings.js"></script>
</body>

<!-- Tiger Cage/properties.html by g4bbar, Thu, 24 Jan 2019 15:34:57 GMT -->
</html>