 <header class="main-header">
        <div class="main-box clearfix">
        	<!-- Logo Box -->
            <div class="logo-box">
                <div class="logo"><a href="{{ url('/') }}"><img src="{{asset('images/logo-small.png')}}" alt="" title=""></a></div>
            </div>

            <!-- Upper Right-->
    <div class="upper-right">
        <ul class="clearfix">
            <li class="dropdown option-box">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="realestate/admin/images/resource/thumb-1.jpg" alt="avatar" class="thumb">
                       @if (Route::has('login'))
                            @auth
                             {{ Auth::user()->name }}</a>
                            @else
                            My Account
                            @endauth
                       @endif
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('home')}}">Dashboard</a>
                    <a class="dropdown-item" href="{{route('message')}}">Messages</a>
                    <a class="dropdown-item" href="{{route('bookings')}}">Bookings</a>
                    <a class="dropdown-item" href="{{route('my.profile')}}">My profile</a>
                 {{--   logout --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    {{-- end logout --}}
                </div>
            </li>

            {{--  <li class="dropdown option-box" id='markasread' onclick="markNotificationAsRead('{{count(auth()->user()->unreadNotifications)}}')">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">  <span class="glyphicon glyphicon-globe"></span> Notifications <span class="badge">{{count(auth()->user()->unreadNotifications)}}</span></a>
                   
                <div class="dropdown-menu">
                      @forelse(auth()->user()->unreadNotifications as $notification) 
                        @include('admin.news.notifications.'.snake_case(class_basename($notification->type)))
                        @empty
                        <a class="dropdown-item" href="#">No Notifications</a>
                        @endforelse
                 
                </div>
            </li> --}}
            <li class="submit-property">
            	<a href="{{route('property.input')}}" class="theme-btn btn-style-one">Submit Property <i class="pe-7s-up-arrow"></i></a>
            </li>
            <li class="nav-toggler">
            	<button class="toggler-btn nav-btn"><span class="bar bar-one"></span><span class="bar bar-two"></span><span class="bar bar-three"></span></button>
            </li>
        </ul>
    </div>
</div>
        <!--End Header Lower-->
    </header>