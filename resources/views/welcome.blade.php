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
    
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    @forelse($most_popular_properties as $most_popular_property)
                      <?php 
                         Session::put('most_popular_property_id',$most_popular_property->id);      
                        ?>
                      
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{$most_popular_property->image}}" data-title="Slide Title" data-transition="parallaxvertical">
                      
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" src="{{$most_popular_property->image}}"> 

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-text-align="center"
                        data-hoffset="['10','50','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'>
                            <div class="content-box">
                                <div class="inner-box">
                                    <div class="title-box">
                                        <h3>{{$most_popular_property->tile}}</h3>
                                        <p>{{$most_popular_property->address}}</p>
                                    </div>
                                    <ul class="info-list">
                                        <li><span>{{$most_popular_property->area}}</span>Area Sq-ft</li>
                                        <li><span>{{$most_popular_property->nong_of_bedroom}}</span>Bed Room</li>
                                        <li><span>{{$most_popular_property->nong_of_kitchen}}</span>Kitchen</li>
                                    </ul>
                                    <div class="price">${{$most_popular_property->price}}</div>
                                    <div class="btn-box"><a href="agent-detail.html" class="theme-btn btn-style-one">CONTACT AGENT</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @empty
                        <li>No Property</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- Property Search Section -->
    <section class="property-search-section">
        <div class="auto-container">
            <div class="property-search-tabs tabs-box">
                <ul class="tab-buttons">
                    <li data-tab="#sale" class="tab-btn active-btn">Sale</li>
                    <li data-tab="#rent" class="tab-btn">Rent</li>
                </ul>

                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="sale">                         
                        <div class="property-search-form">
                            <form method="post" action="{{route('target.property.search')}}">
                                <div class="row">
                                    <!-- Form Group -->
                                    <?php 
                                      use App\Model\Property;
                                      $select_properties=Property::all();
                                    ?>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>country</label>
                                        <select class="custom-select-box" name="country">
                                            @forelse($select_properties as $select_property)
                                            <option value="{{$select_property->country}}">{{$select_property->country}}</option>
                                            @empty
                                             <option>No Property</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>State</label>
                                        <select class="custom-select-box" name="state">
                                            @forelse($select_properties as $select_property)
                                            <option value="{{$select_property->state}}">{{$select_property->state}}</option>
                                            @empty
                                             <option>No Property</option>
                                            @endforelse
                                        </select>
                                    </div>
                                      <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>search by Address</label>
                                        <input type="text" name="address" placeholder="Search By Address" required>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Price</label>
                                        <select class="custom-select-box" name="price">
                                            @forelse($select_properties as $select_property)
                                            <option value="{{$select_property->price}}">{{$select_property->price}}</option>
                                            @empty
                                             <option>No Property</option>
                                            @endforelse
                                        </select>
                                    </div> 
                                     <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Locaton</label>
                                        <select class="custom-select-box" name="location">
                                            @forelse($select_properties as $select_property)
                                            <option value="{{$select_property->location}}">{{$select_property->location}}</option>
                                            @empty
                                             <option>No Property</option>
                                            @endforelse
                                        </select>
                                    </div>                                      
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Tab -->
                    <div class="tab" id="rent">
                        <div class="property-search-form">
                            <form method="post" action="https://expert-themes.com/html/ourland/index.html">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>city</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>search by property id</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>search by Address</label>
                                        <input type="text" name="text" placeholder="Search ID" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Location</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>country</label>
                                        <select class="custom-select-box">
                                            <option>Any</option>
                                            <option>California</option>
                                            <option>Florida</option>
                                            <option>Georgia</option>
                                            <option>New York</option>
                                            <option>Texas</option>
                                        </select>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <div class="range-slider-one clearfix">
                                            <label>Area</label>
                                            <div class="area-range-slider"></div>
                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                            <div class="title">m<sup>2</sup></div>
                                        </div>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <div class="range-slider-one clearfix">
                                            <label>Price Filter</label>
                                            <div class="price-range-slider"></div>
                                            <div class="input"><input type="text" class="price-amount" name="field-name" readonly></div>
                                            <div class="title">US Doller</div>
                                        </div>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Property Search Section -->

    <!-- Recent Section -->
    <section class="property-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2>RECENT PROPERTIES</h2>
            </div>

            <div class="row">
                <!-- slide recent property -->
                <div class="property-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                               @forelse($recent_slide_properties as $slide_property)
                                <?php $a=Session::put('slide_property_id',$slide_property->id); ?>
                                <figure class="image"><img src="{{$slide_property->image}}" alt={{$slide_property->id}} style="max-height:320px;min-height:320px"></figure>

                                @empty
                                <figure class="image"><img src="images/" alt="No Property"></figure>
                                @endforelse
                            </div>        
                        </div>
                        @forelse($recent_slide_lower_properties as $recent_slide_lower_property)
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="{{route('property.detail')}}">Apartment</a>,</li>
                                <li><a href="{{route('property.detail')}}">Bar</a>,</li>
                                <li><a href="{{route('property.detail')}}">House</a>,</li>
                            </ul>
                            <h3><a href="{{route('all.property')}}">{{$recent_slide_lower_property->title}}</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> {{$recent_slide_lower_property->address}}</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i>{{$recent_slide_lower_property->area}} sqFt </li>
                                <li><i class="flaticon-bed"></i> {{$recent_slide_lower_property->nong_of_bedroom}} Bedrooms</li>
                                <li><i class="flaticon-car"></i> {{$recent_slide_lower_property->nong_of_gourage}}</li>
                                <li><i class="flaticon-bathtub"></i>{{$recent_slide_lower_property->nong_of_bathroom}}  Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="{{route('property.more.detail',$recent_slide_lower_property->id)}}" class="theme-btn">More Detail</a></div>
                                <div class="price">$ {{$recent_slide_lower_property->price}}</div>
                            </div>
                        </div>
                        @empty
                       <div class="property-block col-lg-4 col-md-6 col-sm-12">
                          <div class="inner-box">
                            <h1>No property</h1>
                           </div>
                        </div>
                        @endforelse
                    </div>
                    <br>
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                               @forelse($second_recent_slide_properties as $second_recent_slide_property)
                                <?php 
                                  Session::put('second_recent_slide_property_id',$slide_property->id);
                                ?>
                                <figure class="image"><img src="{{$second_recent_slide_property->image}}" alt="" style="max-height:320px;min-height:320px"></figure>
                                @empty
                                <figure class="image"><img src="images/" alt="No Property"></figure>
                                @endforelse
                            </div>                                                   
                        </div>
                        @forelse($second_recent_slide_lower_properties as $recent_slide_lower_property)
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="{{route('property.detail')}}">Apartment</a>,</li>
                                <li><a href="{{route('property.detail')}}">Bar</a>,</li>
                                <li><a href="{{route('property.detail')}}">House</a>,</li>
                            </ul>
                            <h3><a href="{{route('all.property')}}"> {{$recent_slide_lower_property->title}}</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i>  {{$recent_slide_lower_property->address}}</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i>{{$recent_slide_lower_property->area}} sqF </li>
                                <li><i class="flaticon-bed"></i> {{$recent_slide_lower_property->nong_of_bedroom}} Bedrooms</li>
                                <li><i class="flaticon-car"></i> {{$recent_slide_lower_property->nong_of_gourage}}</li>
                                <li><i class="flaticon-bathtub"></i>{{$recent_slide_lower_property->nong_of_bathroom}}  Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="{{route('property.more.detail',$recent_slide_lower_property->id)}}" class="theme-btn">More Detail</a></div>
                                <div class="price">$ {{$recent_slide_lower_property->price}}</div>
                            </div>
                        </div>
                        @empty
                         <div class="property-block col-lg-4 col-md-6 col-sm-12">
                          <div class="inner-box">
                            <h1>No property</h1>
                           </div>
                        </div>
                        @endforelse
                    </div>
                </div>

                <!-- mid recent property -->
                 <div class="property-block col-lg-4 col-md-6 col-sm-12">
                      @forelse($recent_mid_properties as $recent_mid_property)
                      <?php $a=Session::put('id',$slide_property->id); ?>
                        <div class="inner-box">
                        <div class="image-box">
                                <figure class="image"><img src="{{$recent_mid_property->image}}" alt="" style="max-height:320px;min-height:320px"></figure>
                                <span class="for">{{$recent_mid_property->status}}</span>
                                <span class="featured">{{$recent_mid_property->property_type}}</span>
                                <ul class="info clearfix">
                                <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>{{$recent_mid_property->created_at}}</a></li>
                                <li><a href="agent-detail.html"><i class="la la-user-secret"></i>$ {{$recent_mid_property->price}}</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="{{route('property.detail')}}">Apartment</a>,</li>
                                <li><a href="{{route('property.detail')}}">Bar</a>,</li>
                                <li><a href="{{route('property.detail')}}">House</a>,</li>
                            </ul>
                            <h3><a href="{{route('property.more.detail',$recent_mid_property->id)}}">{{$recent_mid_property->title}}</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i> {{$recent_mid_property->address}}</div>
                             <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i>{{$recent_mid_property->area}} sqF </li>
                                <li><i class="flaticon-bed"></i> {{$recent_mid_property->nong_of_bedroom}} Bedrooms</li>
                                <li><i class="flaticon-car"></i> {{$recent_mid_property->nong_of_gourage}}</li>
                                <li><i class="flaticon-bathtub"></i>{{$recent_mid_property->nong_of_bathroom}}  Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="{{route('property.more.detail',$recent_mid_property->id)}}" class="theme-btn">More Detail</a></div>
                                <div class="price">$ {{$recent_mid_property->price}}</div>
                            </div>
                         </div>
                        </div>
                        <br>
                        @empty
                         <div class="property-block col-lg-4 col-md-6 col-sm-12">
                          <div class="inner-box">
                            <h1>No property</h1>
                           </div>
                        </div>
                        @endforelse
                </div>

                <!-- last recent Property -->
                <div class="property-block col-lg-4 col-md-6 col-sm-12">
                      @forelse($recent_last_properties as $recent_last_property)
                      <div class="inner-box">
                        <div class="image-box"> 
                            <figure class="image"><img src="{{$recent_last_property->image}}" alt="" style="max-height:320px;min-height:320px"></figure>
                            <span class="for">{{$recent_last_property->status}}</span>
                            <span class="featured">{{$recent_last_property->property_type}}</span>
                            <div class="video-link"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" data-fancybox="gallery" data-caption=""><i class="icon la la-play-circle" aria-hidden="true"></i></a></div>
                            <ul class="info clearfix">
                                <li><a href="{{route('properties')}}"><i class="la la-calendar-minus-o"></i>{{$recent_last_property->created_at}}</a></li>
                                <li><a href="{{route('agent.detail')}}"><i class="la la-user-secret"></i>$ {{$recent_last_property->price}}</a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <ul class="tags">
                                <li><a href="{{route('property.detail')}}">Apartment</a>,</li>
                                <li><a href="{{route('property.detail')}}">Bar</a>,</li>
                                <li><a href="{{route('property.detail')}}">House</a>,</li>
                            </ul>
                            <h3><a href="{{route('property.more.detail',$recent_mid_property->id)}}">{{$recent_last_property->title}}</a></h3>
                            <div class="lucation"><i class="la la-map-marker"></i>{{$recent_last_property->address}}</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> {{$recent_last_property->area}}</li>
                                <li><i class="flaticon-bed"></i> {{$recent_last_property->nong_bed_room}} Bedrooms</li>
                                <li><i class="flaticon-car"></i> {{$recent_last_property->nong_of_gourage}}</li>
                                <li><i class="flaticon-bathtub"></i> {{$recent_last_property->bathroom}} Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="{{route('property.more.detail',$recent_last_property->id)}}" class="theme-btn">More Detail</a></div>
                                <div class="price">$ {{$recent_last_property->price}}</div>
                            </div>
                        </div>
                        </div>
                      <br>
                    @empty
                    <div class="property-block col-lg-4 col-md-6 col-sm-12">
                          <div class="inner-box">
                            <h1>No property</h1>
                           </div>
                    </div>
                     @endforelse
                </div>

            </div>
        </div>
            <div class="load-more-btn text-center">
                <a href="{{route('all.property')}}" class="theme-btn btn-style-two">Load More</a>
            </div>
    </section>
    <!--End Property Section -->

    <!-- About Us -->
    <section class="about-us" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">THE BEST PLACE TO FIND THE HOUSE YOU WANT</span>
                            <h2>WELL TO OURLAND REAL ESTATE</h2>
                        </div>

                        <div class="text"><strong>OURLAND REAL ESTATE</strong> is the best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea. </div>

                        <div class="row features">
                            <!-- Feature Block -->
                              @forelse($agents_link as $agent_link)
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-1"></span>
                                    <h4><a href="{{route('agent')}}">Buy Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>
                            @empty
                             <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-1"></span>
                                    <h4><a href="#">Buy Property</a></h4>
                                    <div class="text">No Property</div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image"><img src="{{asset('images/resource/image-2.jpg')}}" alt=""></figure>
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon la la-play" aria-hidden="true"></i><span class="ripple"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Us -->

    <!--Popular Places Section-->
    <section class="popular-places-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR DREAM HOUSE IN YOUR CITY</span>
                <h2>MOST POPULAR PLACES</h2>
            </div>
    
            <div class="masonry-items-container clearfix">
                <!-- Portfolio Item -->
                @forelse($popular_properties as $popular_property)
                <?php 
                  Session::put('popular_first_three_viwes',$popular_property->viwes);
                 ?>
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="{{$popular_property->image}}" alt="" style="max-height:520px;min-height:520px"></figure>
                        <div class="info-box">
                            <span class="category">{{$popular_property->property_type}}</span>
                            <h3 class="place"><a href="#">{{$popular_property->location}}</a></h3>
                            <div class="properties"><a href="{{route('property.more.detail',$popular_property->id)}}"> 
                                Detail</a></div>
                            <div class="view-all"><a href="{{route('popular.properties')}}">View All</a></div>
                        </div>
                    </div>
                </div>

                @empty
                 <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <h1>No Property</h1>
                    </div>
                 </div>
              
                @endforelse
                @forelse($popular_properties_small as $popular_property_small)
                 <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="{{$popular_property_small->image}}" alt="" style="max-height:255px;min-height:255px"></figure>
                        <div class="info-box">
                            <span class="category">{{$popular_property_small->property_type}}</span>
                            <h3 class="place"><a href="#">{{$popular_property_small->location}}</a></h3>
                            <div class="properties"><a href="{{route('property.more.detail',$popular_property_small->id)}}"> Detail</a></div>
                            <div class="view-all"><a href="{{route('popular.properties')}}">View All</a></div>
                        </div>
                    </div>
                </div>
                @empty
               <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                       <h1>No Property</h1>
                    </div>
                </div>            
                @endforelse
            </div>
            <!-- Load More -->
            <div class="load-more-btn text-center">
                <a href="{{route('popular.properties')}}" class="theme-btn btn-style-two">Load More</a>
            </div> 
        </div>
    </section>
    <!--Portfolio Section-->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/background/2.jpg);">
        <div class="auto-container">
            <div class="clearfix">
                <!-- Title Column -->
                <div class="title-column">
                    <div class="sec-title light">
                        <span class="title">IN FEW SECONDS WITH WILLES</span>
                        <h2>BUY OR SALE YOUR HOUSE</h2>
                    </div>
                </div>

                <!-- Button Column -->
                <div class="button-column">
                    <a href="{{route('property.input')}}" class="theme-btn btn-style-three">SUBMIT PROPERTY</a>
                    <a href="#" class="theme-btn btn-style-one">BROWSE PROPERTY</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

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
                            <figure class="image"><a href="{{route('property.detail')}}"><img src="{{$agent->image}}" alt="" style="max-height: 300px;min-height: 300px"></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{route('property.input')}}">{{$agent->name}}</a></h4>
                            <span class="designation">Real Estate Agent</span>
                        </div>
                    </div>
                </div>
                @empty
                  <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img src="images" alt="No property"></a></figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href='#'>Magda Anoma</a></h4>
                            <span class="designation">Real Estate Agent</span>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- End Agents Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1-4.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">ALL ABOUT LATEST WILLIA UPDATES</span>
                <h2>NEWS & STORIES</h2>
            </div>

            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                                <figure class="image"><a href="{{route('blog.detail')}}"><img src="images/resource/news-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="{{route('blog.detail')}}"><img src="images/resource/news-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="{{route('blog.detail')}}"><img src="images/resource/news-3.jpg" alt=""></a></figure>
                            </div>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li>by <span>Anoma</span></li>
                                <li>JANUARY 14, 2019</li>
                            </ul>
                            <h3><a href="blog-detail.html">Dazzling retreat resort with the Modern Design</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="images/resource/news-2.jpg" class="lightbox-image" data-fancybox="images"><img src="images/resource/news-2.jpg" alt=""></a></figure>
                            <div class="icon-box"><span class="icon la la-photo"></span></div>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li>by <span>Anoma</span></li>
                                <li>JANUARY 14, 2019</li>
                            </ul>
                            <h3><a href="blog-detail.html">Independent apartment with modern design</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://www.youtube.com/watch?v=oYN4RStp_t0" class="lightbox-image" data-fancybox="video"><img src="images/resource/news-3.jpg" alt=""></a></figure>
                            <div class="icon-box"><span class="icon la la-play"></span></div>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li>by <span>Anoma</span></li>
                                <li>JANUARY 14, 2019</li>
                            </ul>
                            <h3><a href="blog-detail.html">Modron apartment adjacent to CEO park</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

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
</body>

<!-- Tiger Cage/ by g4bbar, Thu, 24 Jan 2019 15:31:55 GMT -->
</html>