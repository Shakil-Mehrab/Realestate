@extends('layouts.index')
@section('content')

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

    <section class="property-section">
      <div class="auto-container">
        <div class="sec-title">
            <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
            <h2>RECENT PROPERTIES</h2>
        </div>
        <div class="row">
            @forelse($properties as $property)
            <div class="property-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">

                    <div class="image-box">
                            <figure class="image"><img src="{{asset($property->property->image)}}" alt="" style="max-height:320px;min-height:320px"></figure>
                            <span class="for">{{$property->property->category->name}}</span>
                            <span class="featured">{{$property->property->property_type}}</span>
                            <ul class="info clearfix">
                            <li><a href="properties.html"><i class="la la-calendar-minus-o"></i>{{$property->property->created_at->diffForhumans()}}</a></li>
                            <li><a href="agent-detail.html"><i class="la la-user-secret"></i>$ {{$property->property->price}}</a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <ul class="tags">
                            <li><a href="#">{{$property->property->views()}} views</a>,</li>
                            <li><a href="#">{{$property->property->comments()->count()}} Coments</a></li>
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
                     
                    </div>
            </div>
            @empty
             <figure class="image"><img src="image" alt="No Property"></figure>
             @endforelse
        </div>
     </div>
         <div class="load-more-btn text-center">
           {!! $properties->links(); !!}
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