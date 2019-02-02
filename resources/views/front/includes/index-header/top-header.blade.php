<div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="la la-home"></i> 461/6/1 Malibag Baxibag Dhaka</li>
                        <li><i class="la la-envelope-o"></i><a href="https://mail.google.com/mail/u/0/#inbox">mehrabhoussainshakil12@gmail.com</a></li>
                    </ul>
                </div>
                <div class="top-right">
                    <div class="btn-box">
                       @if (Route::has('login'))
                            @auth
                           <a href="{{route('property.input')}}" class="theme-btn btn-style-four">Submit Property</a>
                            
                            @else
                            <a href="{{route('login')}}" class="theme-btn btn-style-four">Login</a>
                            <a href="{{route('register')}}" class="theme-btn btn-style-four">Sign Up</a>
                            @endauth
                       @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
