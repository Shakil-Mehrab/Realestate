<div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <div class="text"><span>Welcome</span> to Ourland Real Estate - Making Business Better</div>
                </div>
                <div class="top-right clearfix">
                    <ul class="clearfix">
                       @if (Route::has('login'))
					        @auth
							<li><a href="{{ url('/home') }}">Dashboard</a></span></li>
							@else
							<li><a href="{{route('login')}}">Login</a></li>
							<li><a href="{{route('register')}}">Sign Up</a></li>
							@endauth
					   @endif
                    </ul>
                    <div class="btn-box">
                        <a <a href="{{route('property.input')}}" class="theme-btn btn-style-two">Add Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>