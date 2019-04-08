@php 
use App\Model\Category;
$categories=Category::all();
@endphp
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="{{url('/')}}" title=""><img src="images/logo-small.png" alt="" title=""></a>
        </div>
        <!--Right Col-->
        <div class="pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-collapse show collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="current dropdown"><a href="#">Home</a>
                             <ul>
                                @forelse($categories as $category)
                                <li class="dropdown"><a href="#">{{$category->name}}</a>
                                    <ul>
                                        <li><a href="{{route('header.one')}}">Rent</a></li>
                                        <li><a href="{{route('header.two')}}">Sale</a></li>
                                     
                                    </ul>
                                </li>
                                @empty
                                 <li class="dropdown"><a href="#">No Category</a>
                                    
                                </li>
                                @endforelse
                                
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
                                <li><a href="{{route('front.agent')}}">Agents</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Properties</a>
                            <ul>
                                <li><a href="{{route('properties')}}">Properties</a></li>
                                <li><a href="{{route('property.list.view')}}">Property List View</a></li>
                                <li><a href="{{route('property.grid.view')}}">Property Grid View</a></li>
                                <li><a href="{{route('property.modern.view')}}">Property Modern View</a></li>
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
        </div>
    </div>
</div>