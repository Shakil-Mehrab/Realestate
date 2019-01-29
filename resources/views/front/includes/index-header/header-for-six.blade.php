    <header class="main-header header-style-six">
         <div class="main-box">
            <div class="inner-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{url('/')}}" ><img src="images/logo-6.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-dark">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu"></span>
                            </button>
                        </div>
                        
                         <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="{{route('header.one')}}">Header Style One</a></li>
                                                <li><a href="{{route('header.two')}}">Header Style Two</a></li>
                                                <li><a href="{{route('header.three')}}">Header Style three</a></li>
                                                <li><a href="{{route('header.four')}}">Header Style Four</a></li>
                                                <li><a href="{{route('header.five')}}">Header Style Five</a></li>
                                                <li><a href="{{route('header.six')}}">Header Style Six</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="{{route('about.us')}}">About Us</a></li>
                                        <li><a href="{{route('faqs')}}">FAQ's</a></li>
                                        <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Agents</a>
                                    <ul>
                                        <li><a href="{{route('agent')}}"">Agents</a></li>
                                        <li><a href="{{route('agent.detail')}}">Agent Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Properties</a>
                                    <ul>
                                        <li><a href="{{route('properties')}}">Properties</a></li>
                                        <li><a href="{{route('property.list.view')}}">Property List View</a></li>
                                        <li><a href="{{route('property.grid.view')}}">Property Grid View</a></li>
                                        <li><a href="{{route('property.modern.view')}}">Property Modern View</a></li>
                                        <li><a href="{{route('property.detail')}}">Property Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="{{route('blog.default')}}">Blog Default</a></li>
                                        <li><a href="{{route('blog.list.view')}}">Blog List View</a></li>
                                        <li><a href="{{route('blog.grid.view')}}">Blog Grid View</a></li>
                                        <li><a href="{{route('blog.detail')}}">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-bar row clearfix">
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>About Us</h3>
                                                <ul>
                                                    <li><a href="{{route('about.us')}}">About Us</a></li>
                                                    <li><a href="{{route('faqs')}}">FAQ's</a></li>
                                                    <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                                                        <li><a href="{{route('agent')}}"">Agents</a></li>
                                                     <li><a href="{{route('agent.detail')}}">Agent Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Properties</h3>
                                                <ul>
                                                    <li><a href="{{route('properties')}}">Properties</a></li>
                                                    <li><a href="{{route('property.list.view')}}">Property List View</a></li>
                                                    <li><a href="{{route('property.grid.view')}}">Property Grid View</a></li>
                                                    <li><a href="{{route('property.modern.view')}}">Property Modern View</a></li>
                                                   <li><a href="{{route('property.detail')}}">Property Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Blog</h3>
                                                <ul>
                                                    <li><a href="{{route('blog.default')}}">Blog Default</a></li>
                                                    <li><a href="{{route('blog.list.view')}}">Blog List View</a></li>
                                                    <li><a href="{{route('blog.grid.view')}}">Blog Grid View</a></li>
                                                    <li><a href="{{route('blog.detail')}}">Blog Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Pages</h3>
                                                <ul>
                                                    <li><a href="{{route('property.input')}}">Submit Property</a></li>
                                                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                                    <li><a href="{{route('comming.soon')}}">Coming Soon</a></li>

                                                    @if (Route::has('login'))
                                                        
                                                            @auth
                                                                <li><a href="{{ url('/home') }}">Home</a></li>
                                                            @else
                                                                <li><a href="{{ route('login') }}">Login</a></li>
                                                            @endauth
                                                        
                                                     @endif
                                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>              
                        </div>

                    </nav><!-- Main Menu End-->
                        
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                        <!-- Link Box -->
                        <div class="link-box"> @if (Route::has('login'))
						        @auth
								<a href="{{ url('/home') }}">Dashboard</a></span>
								@else
								<a href="{{route('login')}}">Login</a>
								<a href="{{route('register')}}">Sign Up</a>
								@endauth
						   @endif</div>

                        <!-- Social Icon One -->
                        <ul class="social-icon-one clearfix">
                            <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>

                        <!--Search Box-->
                        @include('front.includes.search-box') 

                        <!-- Btn Box -->
                       <div class="btn-box">
                           <a href="{{route('property.input')}}" class="theme-btn btn-style-four">Submit Property</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        @include('front.includes.drop-header') 
        <!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

