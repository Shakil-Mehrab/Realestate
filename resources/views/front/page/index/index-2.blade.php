@extends('layouts.index')
@section('content')
    <!--Main Slider-->
    <section class="main-slider">
            <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
                <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                    <ul>
                        @forelse($popular_properties->limit(2)->get() as $popular_property)
                        <!-- Slide 1 -->
                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{asset($popular_property->property->image)}}" data-title="Slide Title" data-transition="parallaxvertical">
                          
                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" src="{{asset($popular_property->property->image)}}"> 

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
                                            <h3>{{$popular_property->property->tile}}</h3>
                                            <p>{{$popular_property->property->address}}</p>
                                        </div>
                                        <ul class="info-list">
                                        <li><span>
                                        <star-rating 
                                        :star-size="20" :read-only="true"
                                        :rating="{{$popular_property->property->getStarRating()}}"
                                        :increment="0.01">
                                        </star-rating>
                                        </span> Rating</li>
                            <li><span>{{$popular_property->property->views()}}</span>Views</li>
                        </ul>
                      <div class="price">${{$popular_property->property->price}}</div>
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
                    <a href="#" class="theme-btn btn-style-one">Subscrine Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->
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
                            @include('admin.dashboard-includes.message')
                            <form method="post" action="{{route('post.subscriber')}}">
                                @csrf
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Name</label>
                                      <input type="text" name="name" placeholder="Name " required value="{{Request::old('name')}}">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Email</label>
                                         <input type="text" name="email" placeholder="Email" required value="{{Request::old('email')}}">
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label>Phone No</label>
                                          <input type="text" name="phone_no" placeholder="Phone No" required value="{{Request::old('phone_no')}}">
                                    </div>                                                                          
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two">Subscribe</button>
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
                        @forelse($properties->limit(5)->get() as $property)
                        <div class="image-box">
                            <figure class="image"><img src="{{$property->image}}" alt="" style="max-height:320px;min-height:320px"></figure>
                         <div class="lower-content">
                         <ul class="tags">
                            <li><a href="#">{{$property->views()}} views</a>,</li>
                            <li><a href="#">{{$property->likes()->count()}} likes</a>,</li>
                            <li><a href="#">{{$property->comments()->count()}} Coments</a></li>
                            <li><a href="#">
                                        <star-rating 
                                        :star-size="20" :read-only="true"
                                        :rating="{{$property->getStarRating()}}"
                                        :increment="0.01">
                                        </star-rating>
                        </a>,</li>
                        </ul>
                        <h3><a href="{{route('property.detail',$property->id)}}">@php echo str_limit($property->title,25) @endphp</a></h3>
                        <div class="lucation"><i class="la la-map-marker"></i>@php echo str_limit($property->address,45) @endphp</div>
                        <ul class="property-info clearfix">
                            <li><i class="flaticon-dimension"></i> {{$property->area}} sqFt </li>
                            <li><i class="fas fa-truck-moving"></i> {{$property->property_type}}</li>
                            <li><i class="fas fa-home"></i> {{$property->category->name}}</li>
                            <li><i class="fas fa-phone-square"></i> {{$property->phone}}</li>
                        </ul>
                        <div class="property-price clearfix">
                            <div class="read-more"><a href="{{route('property.detail',$property->id)}}" class="theme-btn">More Detail</a></div>
                            <div class="price">$ {{$property->price}}</div>
                        </div>
                    </div>
                    </div>

                        @empty
                            <figure class="image"><img src="images/" alt="No Property"></figure>
                        @endforelse
                        </div>        
                    </div>
                </div>
                <br>
            </div>

            <!-- mid recent property -->
             <div class="property-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        @forelse($properties->skip(5)->limit(1)->get() as $property)

                    <div class="image-box">
                            <figure class="image"><img src="{{asset($property->image)}}" alt="" style="max-height:320px;min-height:320px"></figure>
                            <span class="for">{{$property->status}}</span>
                            <span class="featured">{{$property->property_type}}</span>
                            <ul class="info clearfix">
                            <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>{{$property->created_at}}</a></li>
                            <li><a href="agent-detail.html"><i class="la la-user-secret"></i>$ {{$property->price}}</a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <ul class="tags">
                            <li><a href="#">{{$property->views()}} views</a>,</li>
                            <li><a href="#">{{$property->likes()->count()}} likes</a>,</li>
                            <li><a href="#">{{$property->comments()->count()}} Coments</a></li>
                            <li><a href="#">
                                <star-rating 
                                :star-size="20" :read-only="true"
                                :rating="{{$property->getStarRating()}}"
                                :increment="0.01">
                                </star-rating>
                            </a>,</li>
                        </ul>
                        <h3><a href="{{route('property.detail',$property->id)}}">@php echo str_limit($property->title,25) @endphp</a></h3>
                        <div class="lucation"><i class="la la-map-marker"></i>@php echo str_limit($property->address,45) @endphp</div>
                        <ul class="property-info clearfix">
                            <li><i class="flaticon-dimension"></i> {{$property->area}} sqFt </li>
                            <li><i class="fas fa-truck-moving"></i> {{$property->property_type}}</li>
                            <li><i class="fas fa-home"></i> {{$property->category->name}}</li>
                            <li><i class="fas fa-phone-square"></i> {{$property->phone}}</li>
                        </ul>
                        <div class="property-price clearfix">
                            <div class="read-more"><a href="{{route('property.detail',$property->id)}}" class="theme-btn">More Detail</a></div>
                            <div class="price">$ {{$property->price}}</div>
                        </div>
                     </div>
                     @empty
                     <figure class="image"><img src="image" alt="No Property"></figure>
                     @endforelse
                    </div>
                    <br>
            </div>

            <!-- last recent Property -->
            <div class="property-block col-lg-4 col-md-6 col-sm-12">
                  <div class="inner-box">
                        @forelse($videos as $property)

                    <div class="image-box"> 
                        <figure class="image"><img src="" alt="" style="max-height:320px;min-height:320px"></figure>
                        <div class="video-link">
                            <a href="">

                      <iframe width="100%" height="100%" src="{{asset($property->link)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
                            </a></div>
                        <ul class="info clearfix">
                            <li><a href="#"><i class="la la-calendar-minus-o"></i>{{$property->property->created_at}}</a></li>
                            <li><a href="#"><i class="la la-user-secret"></i>$ {{$property->property->price}}</a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <ul class="tags">
                            <li><a href="#">{{$property->property->views()}} views</a>,</li>
                            <li><a href="#">{{$property->property->likes()->count()}} likes</a>,</li>
                            <li><a href="#">{{$property->property->comments->count()}} Coments</a></li>
                            <li><a href="#">
                                 <star-rating 
                                :star-size="20" :read-only="true"
                                :rating="{{$property->property->getStarRating()}}"
                                :increment="0.01">
                                </star-rating>
                                </a>,</li>
                        </ul>
                        <h3><a href="{{route('property.detail',$property->property->id)}}">@php echo str_limit($property->property->title,25) @endphp</a></h3>
                        <div class="lucation"><i class="la la-map-marker"></i>@php echo str_limit($property->property->address,45) @endphp</div>
                          <ul class="property-info clearfix">
                            <li><i class="flaticon-dimension"></i> {{$property->property->area}} sqFt </li>
                            <li><i class="fas fa-truck-moving"></i> {{$property->property->property_type}}</li>
                            <li><i class="fas fa-home"></i> {{$property->property->category->name}}</li>
                            <li><i class="fas fa-phone-square"></i> {{$property->property->phone}}</li>
                        </ul>
                        <div class="property-price clearfix">
                            <div class="read-more"><a href="{{route('property.detail',$property->property->id)}}" class="theme-btn">More Detail</a></div>
                            <div class="price">$ {{$property->property->price}}</div>
                        </div>
                    </div>
                    @empty
                     <figure class="image"><img src="image" alt="No Image" ></figure>
                    @endforelse
                    </div>
                  <br>
            </div>
            
        </div>
     </div>
                <div class="load-more-btn text-center">
                    <a href="{{route('all.properties')}}" class="theme-btn btn-style-two">Load More</a>
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
                              @forelse($agents->limit(4)->get() as $agent)
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-1"></span>
                                    <h4><a href="{{route('front.agent')}}">Buy Property</a></h4>
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
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon la la-play" aria-hidden="true"></i><span class="ripple">
                                
                              
                            </span></a>
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
                @forelse($popular_properties->skip(2)->limit(3)->get() as $popular_property)
                <div class="popular-item masonry-item medium-item">
                    <div class="image-box">
                        <figure class="image"><img src="{{$popular_property->property->image}}" alt="" style="max-height:520px;min-height:520px"></figure>
                         <div class="info-box">
                            <span class="category">{{$popular_property->property->comments()->count()}} Comments</span>
                            <h3 class="place"><a href="#">{{$popular_property->property->property_type}}</a></h3>
                            <div class="properties"><a href="#"> {{$popular_property->property->views()}} views</a></div>
                            <div class="view-all"><a href="{{route('property.detail',$popular_property->property_id)}}">View Detail</a></div>
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
                @forelse($popular_properties->skip(5)->limit(4)->get() as $popular_property)
                 <!-- Portfolio Item -->
                <div class="popular-item masonry-item small-item">
                    <div class="image-box">
                        <figure class="image"><img src="{{$popular_property->property->image}}" alt="" style="max-height:255px;min-height:255px"></figure>
                        <div class="info-box">
                            <span class="category">{{$popular_property->property->comments()->count()}} Comments</span>
                            <h3 class="place"><a href="#">{{$popular_property->property->property_type}}</a></h3>
                            <div class="properties"><a href="#"> {{$popular_property->property->views()}} views</a></div>
                            <div class="view-all"><a href="{{route('property.detail',$popular_property->property_id)}}">View Detail</a></div>
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
    <!-- Agents Section -->
    <div class="agents-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">MEET OUR PROFESSIONAL AGENTS</span>
                <h2>MEET OUR AGENTS</h2>
            </div>

            <div class="agents-carousel owl-carousel owl-theme">
                <!-- Agent Block -->
                @forelse($agents->get() as $agent)
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{$agent->image}}" alt="" style="max-height: 300px;min-height: 300px"></a></figure>
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
                                <figure class="image"><a href=""><img src="images/resource/news-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href=""><img src="images/resource/news-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href=""><img src="images/resource/news-3.jpg" alt=""></a></figure>
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

  @endsection