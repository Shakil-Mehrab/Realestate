<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/about.html by g4bbar, Thu, 24 Jan 2019 15:34:44 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | About Us</title>
<!-- Stylesheets -->
<link href="{{asset('realestate/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('realestate/css/style.css')}}" rel="stylesheet">
<link href="{{asset('realestate/css/responsive.css')}}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{asset('realestate/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('realestate/css/color-themes/default-theme.css')}}" rel="stylesheet">

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
    <!-- Appointment Section -->
    <section class="appointment-section">
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Meet our agent</span>
                            <h2>Get Appointment</h2>
                        </div>
                        <div class="text">Please fill out the booking form and very soon we will contact with you to schedule an appointment. </div>
                    </div>
                </div>

                <div class="form-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Appointment Form -->
                        <div class="appointment-form">
                                @include('admin.dashboard-includes.message')
                            <form method="post" action="{{route('agent.store')}}" enctype="multipart/form-data">
                                @csrf

                            <div class="row">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-lg-4 col-md-12 col-sm-12">
                                    <input type="text" name="name" id="name" placeholder="Name" value="{{Request::old('name')}}">
                                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>                                       
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-lg-4 col-md-12 col-sm-12">
                                    <input type="text" name="email" id="email" placeholder="Email" value="{{Request::old('email')}}">
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-lg-4 col-md-12 col-sm-12">
                                    <input type="text" name="phone" id="phone" placeholder="Phone" value="{{Request::old('phone')}}">
                                     @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="detail" placeholder="Detail" required>{{Request::old('detail')}}</textarea>
                                     @if ($errors->has('detail'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('detail') }}</strong>
                                    </span>
                                @endif   
                                </div>     
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="address" id="address" placeholder="Address" value="{{Request::old('address')}}">
                                     @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong style="color:red">{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                   <input type="file" class='form-control' class="form-control-file" name='image' id="exampleInputFile2" aria-describedby="fileHelp">
                                </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Information</button>
                                    </div> 
                                </div>
                            </form>
                        </div>
                        <!--End Appointment Form --> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End FAQ Form Section -->

    <!-- Agents Section -->
    <div class="agents-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">MEET OUR PROFESSIONAL AGENTS</span>
                <h2>MEET OUR AGENTS</h2>
            </div>
                <div class="agents-carousel owl-carousel owl-theme">
                    <!-- Agent Block -->
                    @forelse($agents as $agent)   
                        <div class="agent-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="agent-detail.html"><img src="{{$agent->image}}" alt=""></a></figure>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="la la-twitter"></i></a></li>
                                        <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                        <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                        <li><a href="#"><i class="la la-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="info-box">
                                    <h4 class="name"><a href="{{route('agent.detail',$agent->id)}}">{{$agent->name}}</a></h4>
                                    <span class="designation">Real Estate Agent</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3> No Agent</h3>
                    @endforelse
            </div>
        </div>
    </div>
    <!-- End Agents Section -->

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

<script src="{{asset('realestate/js/jquery.js')}}"></script> 
<script src="{{asset('realestate/js/popper.min.js')}}"></script>
<script src="{{asset('realestate/js/bootstrap.min.js')}}"></script>
<script src="{{asset('realestate/js/jquery-ui.js')}}"></script>
<script src="{{asset('realestate/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('realestate/js/owl.js')}}"></script>
<script src="{{asset('realestate/js/wow.js')}}"></script>
<script src="{{asset('realestate/js/isotope.js')}}"></script>
<script src="{{asset('realestate/js/mixitup.js')}}"></script>
<script src="{{asset('realestate/js/appear.js')}}"></script>
<script src="{{asset('realestate/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="{{asset('realestate/js/color-settings.js')}}"></script>
</body>

<!-- Tiger Cage/about.html by g4bbar, Thu, 24 Jan 2019 15:34:49 GMT -->
</html>
