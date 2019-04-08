<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/properties.html by g4bbar, Thu, 24 Jan 2019 15:34:57 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Properties</title>
<!-- Stylesheets -->
<link href="{{asset('realestate/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('style/front/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('realestate/css/style.css')}}" rel="stylesheet">
<link href="{{asset('realestate/css/responsive.css')}}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{asset('realestate/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('realestate/css/color-themes/default-theme.css')}}"  rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
{{-- rating css --}}
<link href="{{asset('ratingcss/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('ratingcss/bootstrap/css/rating.css')}}" rel="stylesheet">
<link href="{{asset('ratingcss/bootstrap/awesome-font/css/fontawesome-all.min.css')}}" rel="stylesheet">
{{-- end rating css --}}
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        window.Laravel={!! json_encode([
            "csrfToken"=>csrf_token(),
         ]) !!};
    </script>
</head>
<body>
<div id="app">   
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
                <h1>Property Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Property Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="upper-info-box">
                <div class="row">
                    <div class="about-property col-lg-8 col-md-12 col-sm-12">
                        <h2>{{$single_property->title}}</h2>
                        <div class="location"><i class="la la-map-marker"></i> {{$single_property->address}}</div>
                        <ul class="property-info clearfix">
                            <li><i class="flaticon-dimension"></i> {{$single_property->area}}</li>
                            <li><i class="fas fa-truck-moving"></i> {{$single_property->property_type}}</li>
                            <li><i class="fas fa-home"></i> {{$single_property->category->name}}</li>
                            <li><a><i class="fas fa-star"></i></a> 
                                <star-rating 
                                :star-size="20" :read-only="true"
                                :rating="{{$single_property->getStarRating()}}"
                                :increment="0.01">
                                </star-rating>
                            </li>
                        </ul>
                    </div>
                    <div class="price-column col-lg-4 col-md-12 col-sm-12">
                        <span class="title">Price</span>
                        <div class="price">$ {{$single_property->price}}</div>
                        <span class="status">{{$single_property->property_type}}</span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="property-detail">
                        <div class="upper-box">
                            <div class="carousel-outer">
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a href="" class="lightbox-image" title="Image Caption Here">
                                        @if(!empty($single_property->video->link))
                                        <iframe width="100%" height="500" src="{{$single_property->video->link}}" allowfullscreen></iframe>
                                        @else
                                        <h3>No Vedeo</h3>
                                        @endif
                                    </a></li>
                                </ul>
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                      @forelse($single_property->media as $property)

                                    <li><img src="{{asset($property->image)}}" alt="small" style="max-height: 120px;min-height: 120px"></li>
                                      @empty
                                      <li><img src="image" alt="No Image"></li>
                                      @endforelse
                                </ul>
                            </div>
                        </div>

                        <div class="lower-content">
                            
                            <h3>Descripation{{$single_property->views()}}</h3>
                            <p>{{$single_property->detail}}</p>
                         
                        </div>

                        <!-- Property Features -->
                       {{--  <div class="property-features">
                            <h3>Essential Information</h3>
                            <ul class="list-style-one">
                                <li>Price: ${{$single_property->price}}</li>
                                <li>For: {{$single_property->status}}</li>
                                <li>Property Types: {{$single_property->property_type}}</li>
                                <li>Area: {{$single_property->area}} sqFt</li>
                                <li>Country: {{$single_property->country}} </li>
                                <li>City: {{$single_property->state}}</li>
                                <li>Garages: 3 </li>
                                <li>Bedrooms: {{$single_property->nong_of_bedroom}} </li>
                                <li>Bathrooms: {{$single_property->nong_of_bathroom}}</li>
                            </ul>
                        </div> --}}

                        <!-- Property Features -->
                       {{--  <div class="property-features">
                            <h3>Home Amenities</h3>
                            <ul class="list-style-one">
                                <li>{{$single_property->checkbox}}</li>
                                <li>Alarm System</li>
                                <li>Basketball court</li>
                                <li>Bedding</li>
                                <li>Dishes</li>
                                <li>Dishwasher</li>
                                <li>Doorman</li>
                                <li>Elevator</li>
                                <li>Fireplace</li>
                                <li>Garden</li>
                                <li>Gym</li>
                                <li>Hair Dryer</li>
                                <li>Heating System</li>
                                <li>High Ceiling</li>
                                <li>Hot Tub</li>
                                <li>Microwave</li>
                                <li>Iron</li>
                                <li>Laundry</li>
                                <li>Oven</li>
                                <li>Parking</li>
                                <li>Pool</li>
                            </ul>
                        </div> --}}


                            <div class="upper-box">
                                <div class="carousel-outer">
                                    <ul class="image-carousel owl-carousel owl-theme">
                                        <li><a href="" class="lightbox-image" title="Image Caption Here">
                                           <img src="{{asset($single_property->image)}}" alt="No Image"></a></li>
                                    </ul>
                                </div>
                            </div>

                        <div class="nearest-places">
                            <h3><a href="{{asset('https://www.google.com/maps/@23.7321964,90.4292698,13z?hl=en-US')}}">Near By Place</a></h3>
                            <div class="outer-box clearfix">
                                <div class="places-column">
                                    <ul class="places-list">
                                        <li>
                                            <strong>City Center</strong>
                                            <div class="text"><b>City Stars Mall</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>School</strong>
                                            <div class="text"><b>Polar Secondary School,</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>Restaurant</strong>
                                            <div class="text"><b>Spectra Resturant & Cafe, </b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                            <div class="text"><b>Mojesty Resturant, </b>Carrer De Verso Street, Lundon, UK<span>2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>Bank</strong>
                                            <div class="text"><b>United Bank</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>Airport</strong>
                                            <div class="text"><b>Lundon International Airport</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                        </li>

                                        <li>
                                            <strong>Bar</strong>
                                            <div class="text"><b>Verna Plaza Bar</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="map-column">
                                    <div class="map-outer">
                                        <!--Map Canvas-->
                                       <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBxD80TdciOUWsWB1EUVaWerjVP2RtoqhU'></script><div style='overflow:hidden;height:406px;width:400px;'><div id='gmap_canvas' style='height:406px;width:400px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a  href='https://addmap.net/'> </a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=03faadc9a541837e2ddbba4345dc58359516a7cd'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(23.7473595,90.41141749999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.7473595,90.41141749999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Realestate address map</strong><br>431/6/1 malibag,dhaka<br>1195 dhaka<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Review Box -->
<div class="review-area">
    <!--Reviews Container-->
    <div class="reviews-container">
        <h3>Reviews For Costomer</h3>           
            @forelse($single_property->comments as $comment)
            <article class="review-box">
                <div class="thumb-box">
                    <figure class="thumb"><img src="{{asset($comment->user)}}" alt=""></figure>
                    <a class="reply-btn theme-btn"><span  onclick="toggleReply('{{$comment->id}}')">Replyc</span></a>
                </div>
                <div class="content-box">
                    <div class="name">{{$comment->user->name}}</div>
                    <span class="date"><i class="la la-calendar"></i> {{$comment->created_at}}</span>
                   
                        <div class="rating">
                            <star-rating 
                            :star-size="20" :read-only="true"
                            :rating="{{$comment->star}}"
                            :increment="0.01">
                            </star-rating>
                        </div>
                   
                    <div class="text">{{$comment->body}}</div>
                <div class="reply-form-{{$comment->id}} hidden">    
                  <div class="review-comment-form"> 
                        <reply-form 
                        :reply="{{$comment}}"
                         url="{{route('reply.post')}}"
                       >
                        </reply-form>
                </div>
              </div> 

                </div>
            </article>
                <!--Replies-->
              @forelse($comment->replies as $reply)
                <article class="review-box reply">
                    <div class="thumb-box">
                        <figure class="thumb"><img src="images/resource/review-thumb-2.jpg" alt=""></figure>
                        <a class="reply-btn theme-btn"><span  onclick="toggleReplyReply('{{$reply->id}}')">Replyr</span></a>
                    </div>
                    <div class="content-box">
                        <div class="name">{{$reply->user->name}}</div>
                        <span class="date"><i class="la la-calendar"></i>{{$reply->created_at}} </span>
                        <div class="rating">
                        <star-rating 
                            :star-size="20" :read-only="true"
                            :rating="{{$reply->star}}"
                            :increment="0.01">
                        </star-rating>
                        </div>
                        <div class="text">{{$reply->body}}</div>
                         <div class="replyreply-form-{{$reply->id}} hidden">    
                              <div class="review-comment-form"> 
                               <reply-form 
                                :reply="{{$comment}}"
                                 url="{{route('reply.post')}}"
                               >
                                </reply-form>
                            </div>
                         </div> 
                    </div>
                </article>
            @empty 
              <article class="review-box reply">
                <h3>No Reply</h3>
             </article>
            @endforelse          
     @empty
     <article class="review-box reply">
        <h1>No Comment</h1>
     </article>
    @endforelse
 </div>
</div>
     <!-- Review Comment Form -->
  <div class="review-comment-form"> 
     @if(Auth::check())
        <h3>Leave A Review {{$single_property->id}}</h3>
            <review-form 
            :property="{{$single_property}}"
             url="{{route('review.store')}}"
           >
            </review-form>
     @else
      <a href="/login"><h2>Leave Your Comment</h2></a>
     @endif
    </div>
</div>
</div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!--search box-->
                        <!-- Categories -->
                        <div class="sidebar-widget search-properties">
                            <div class="sidebar-title"><h3>Upload Images</h3></div>
                            @include('admin.dashboard-includes.message')
                            <!-- Property Search Form -->
                            <div class="property-search-form style-three">
                                <form method="post" action="{{route('post.images',$single_property->id)}}" enctype="multipart/form-data">
                                     @csrf
                                    <div class="row no-gutters">
                                            <!-- Form Group -->
                                            <div class="form-group col-lg-12">
                                                 <input type="file" class='form-control' class="form-control-file" name='image[]' id="exampleInputFile2" aria-describedby="fileHelp" required multiple>
                                            </div>
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Form -->
                        </div>
                        <div class="sidebar-widget search-properties">
                            <div class="sidebar-title"><h3>Upload Videos</h3></div>
                            <!-- Property Search Form -->
                            @include('admin.dashboard-includes.message')
                            <div class="property-search-form style-three">
                                <form method="post" action="{{route('video.store',$single_property->id)}}">
                                    @csrf
                                    <div class="row no-gutters">
                                        <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="link" id="link" placeholder="Link" value="{{Request::old('link')}}" required>
                                             @if ($errors->has('link'))
                                            <span class="help-block">
                                                <strong style="color:red">{{ $errors->first('link') }}</strong>
                                            </span>
                                        @endif
                                        </div> 
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Form -->
                        </div>
                         <!-- Categories -->
                        @php
                        use App\User_property_views;
                        use App\Model\Property;
                        use App\Model\Category;
                        $categories=Category::orderBY('id','desc')->get();
                        $recent_properties=Property::orderBY('id','desc')->limit(6)->get();
                        $popular_properties=User_property_views::orderBY('count','desc')->limit(6)->get();
                        @endphp
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Category Properties</h3></div>
                            <ul class="cat-list">
                                @forelse($categories as $category)
                                <li><a href="#">{{$category->name}} <span>{{$category->properties->count()}}</span></a></li> 
                                @empty
                                <li><a href="#">No Category</a></li> 
                                @endforelse
                            </ul>
                        </div>

                        <!-- Recent Properties -->
                        <div class="sidebar-widget recent-properties">
                            <div class="sidebar-title"><h3>Recent Properties</h3></div>
                            <div class="widget-content">
                            @forelse($recent_properties as $property)
                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{route('property.detail',$property->id)}}">
                                            <img src="{{asset($property->image)}}" alt="" style="min-height: 100px;max-height: 100px">
                                            <span class="status">{{$property->property_type}}</span>
                                        </a>
                                    </div>
                                    <h5><a href="{{route('property.detail',$property->id)}}">@php echo str_limit($property->address,100) @endphp</a></h5>
                                    <div class="price">${{$property->price}}</div>
                                </article>
                            @empty
                             <article class="post">
                                    <div class="post-thumb">
                                      <img src="images" alt="No Property">
                                    </div>
                                </article>
                            @endforelse
                                <!-- Post -->

                            </div>
                        </div>
                         <div class="sidebar-widget recent-properties">
                            <div class="sidebar-title"><h3>Popular Properties</h3></div>
                            <div class="widget-content">
                            @forelse($popular_properties as $property)
                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{route('property.detail',$property->property_id)}}">
                                            <img src="{{asset($property->property->image)}}" style="min-height: 100px;max-height: 100px" alt="">
                                            <span class="status">{{$property->property->property_type}}</span>
                                        </a>
                                    </div>
                                    <h5><a href="{{route('property.detail',$property->property_id)}}">@php echo str_limit($property->property->address,100) @endphp</a></h5>
                                    <div class="price">$ {{$property->property->price}}</div>
                                </article>
                            @empty
                             <article class="post">
                                    <div class="post-thumb">
                                      <img src="images" alt="No Property">
                                    </div>
                                </article>
                            @endforelse
                                <!-- Post -->

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>    
    <!-- End Sidebar Container -->


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
<!--Google Map APi Key-->
<script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw')}}"></script>
<script src="{{asset('realestate/js/map-script.js')}}"></script>
<!--End Google Map APi-->
<script src="{{asset('realestate/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="{{asset('realestate/js/color-settings.js')}}"></script>

<script>
function toggleReply(commentId){
  $('.reply-form-'+commentId).toggleClass('hidden');
}
function toggleReplyReply(commentId){
  $('.replyreply-form-'+commentId).toggleClass('hidden');
}
</script>
  </body>
</html>