<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/properties.html by g4bbar, Thu, 24 Jan 2019 15:34:57 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Properties</title>
<!-- Stylesheets -->
<link href="{{asset('realestate/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('realestate/css/style.css')}}" rel="stylesheet">
<link href="{{asset('realestate/css/responsive.css')}}" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--Color Switcher Mockup-->
<link href="{{asset('realestate/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('realestate/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<link href="{{asset('style/ownstyle.css')}}" rel="stylesheet">

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
                        <span class="title"><span class="fo">FIND YOUR HOUSE IN YOUR CITY</span></span>
                        <h2>POPULAR PROPERTY</h2>
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
                 @forelse($all_popular_properties as $all_popular_property)
                
                    <div class="property-block all mix house villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset($all_popular_property->image)}}" alt="" style="max-height:320px;min-height:320px"></figure>
                                <span class="for">{{$all_popular_property->status}}</span>
                                <span class="featured">{{$all_popular_property->property_type}}</span>
                                <ul class="option-box">
                                    <li><a href="{{$all_popular_property->image}}" class="lightbox-image" data-fancybox="property"><i class="la la-camera"></i></a></li>
                                    <li><a><span class="label label-default {{$all_popular_property->likes->where('user_id',auth()->id())->where('property_id',$all_popular_property->id)->first()?'liked':''}}" onclick="likeIt('{{$all_popular_property->id}}',this)"><span class="la la-heart"></span>
                                </span></a>
                                
                                    </li>

                                   
                                    <li><a href="{{route('property.more.detail',$all_popular_property->id)}}"><i class="la la-comment"></i></a></li>
                                </ul>
                                <ul class="info clearfix">
                                    <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>{{$all_popular_property->created_at}}</a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li><a href="property-detail.html">Apartment</a>,</li>
                                    <li><a href="property-detail.html">Bar</a>,</li>
                                    <li><a href="property-detail.html">House</a>,</li>
                                </ul>
                                <div class="thumb"><img src="images/resource/thumb-5.jpg" alt=""></div>
                                <h3><a href="{{route('property.more.detail',$all_popular_property->id)}}">{{$all_popular_property->title}}</a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i>{{$all_popular_property->address}}</div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> {{$all_popular_property->area}} sqft</li>
                                    <li><i class="flaticon-bed"></i> {{$all_popular_property->nong_of_bedroom}} Bedrooms</li>
                                    <li><i class="flaticon-car"></i> {{$all_popular_property->nong_of_gourage}} Garage</li>
                                    <li><i class="flaticon-bathtub"></i> {{$all_popular_property->nong_of_bathroom}}Bathroom
                                    </li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="{{route('property.more.detail',$all_popular_property->id)}}" class="theme-btn">More Detail</a></div>
                                    <div class="price">$ {{$all_popular_property->price}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="property-block all mix house villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images" alt="No Property"></figure>
                             </div>
                        </div>
                     </div>
                 @endforelse
                </div>
            </div>
                <div class="load-more-btn text-center">
                   {!! $all_popular_properties->links(); !!}
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
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('images/clients/2.png')}}" alt=""></a></figure></li>
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


<script>
 
function likeIt(threadId,elem){
var csrfToken='{{csrf_token()}}';
$.post('{{route('toggleLike')}}',{threadId:threadId,_token:csrfToken},function(data){
  console.log(data);
  if(data.message==='liked'){
    $(elem).addClass('liked');
    $(elem).css({color:'red'});
  }else{
    $(elem).css({color:'#ffffff'});
    $(elem).removeClass('liked');
  }
  
});
}
</script>
</body>

<!-- Tiger Cage/properties.html by g4bbar, Thu, 24 Jan 2019 15:34:57 GMT -->
</html>