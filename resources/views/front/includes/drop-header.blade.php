
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="index-2.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
        </div>
        <!--Right Col-->
        <div class="pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-collapse show collapse clearfix">
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
        </div>
    </div>
</div>