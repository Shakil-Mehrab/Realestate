<div class="header-lower">
    <div class="main-box">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{url('/')}}" ><img src="{{asset('images/logo.png')}}" alt=""></a></div>
                </div>

                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
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
                                        <li class="dropdown"><a href="#">Apartment</a>
                                            <ul>
                                                <li><a href="{{route('header.one')}}">Rent</a></li>
                                                <li><a href="{{route('header.two')}}">Sale</a></li>
                                             
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Flat</a>
                                            <ul>
                                                <li><a href="{{route('header.one')}}">Rent</a></li>
                                                <li><a href="{{route('header.two')}}">Sale</a></li>
                                             
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Residentisal</a>
                                            <ul>
                                                <li><a href="{{route('header.one')}}">Rent</a></li>
                                                <li><a href="{{route('header.two')}}">Sale</a></li>
                                             
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Office</a>
                                            <ul>
                                                <li><a href="{{route('header.one')}}">Rent</a></li>
                                                <li><a href="{{route('header.two')}}">Sale</a></li>
                                             
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Cottage</a>
                                            <ul>
                                                <li><a href="{{route('header.one')}}">Rent</a></li>
                                                <li><a href="{{route('header.two')}}">Sale</a></li>
                                             
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Videos</a>
                                            <ul>
                                                <li><a href="{{route('header.six')}}">Rent</a></li>
                                                <li><a href="{{route('header.six')}}">Sale</a></li>
                                             
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="{{route('faqs')}}">FAQ's</a></li>
                                        <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Agents</a>
                                    <ul>
                                        <li><a href="{{route('agent')}}"">Agents</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Properties</a>
                                    <ul>
                                        <li><a href="{{route('all.properties')}}">Properties</a></li>
                                        <li><a href="{{route('property.list.view')}}">Property List View</a></li>
                                        <li><a href="{{route('property.grid.view')}}">Property Grid View</a></li>
                                     
                                      
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
                           @if (Route::has('login'))
                                    
                                        @auth
                                            <li><a href="{{ url('/home') }}">Dashboard</a></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                        @endauth
                                    
                                 @endif
                            </ul>              
                        </div>
                    </nav><!-- Main Menu End-->
                        
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="la la-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="https://expert-themes.com/html/ourland/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="la la-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>