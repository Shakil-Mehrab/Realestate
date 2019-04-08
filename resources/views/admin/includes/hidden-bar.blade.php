   <section class="hidden-bar">
        <div class="dashboard-inner">
            <div class="cross-icon"><span class="pe-7s-close-circle"></span></div>
            <ul class="navigation">
                <li class="active"><a href="{{route('home')}}"><i class="pe-7s-culture"></i> Dashboard</a></li>
                <li><a href="{{route('message')}}"><i class="pe-7s-mail"></i> Messages <span class="tag">6</span></a></li>
                <li><a href="{{route('bookings')}}"><i class="pe-7s-date"></i>Bookings</a></li>
                <li><a href="{{route('my.properties')}}"><i class="pe-7s-diamond"></i>My Properties</a></li>
                <li><a href="{{route('my.invoices')}}"><i class="pe-7s-note2"></i>My Invoices</a></li>
                <li><a href="{{route('favourited.properties')}}"><i class="pe-7s-like2"></i>Favorited Properties</a></li>
                <li><a href="{{route('property.input')}}"><i class="pe-7s-up-arrow"></i>Submit Property</a></li>
                <li><a href="{{route('agent.index')}}"><i class="pe-7s-up-arrow"></i> Agent</a></li>
                <li><a href="{{route('my.profile')}}"><i class="pe-7s-user"></i>My Profile</a></li>
                <li> {{--   logout --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    {{-- end logout --}}
                </li>
            </ul>
        </div>
    </section>