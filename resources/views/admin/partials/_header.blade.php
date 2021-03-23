<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        @if(Auth::check())
        <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
        @endif
        <a href="{{ url('/home') }}" class="b-brand">
            <div class="b-bg">
                <img src="{{url('/favicon.svg')}}" alt="FirstRule"/>
            </div>
            <span class="b-title">FirstRule</span>
        </a>
    </div>

    @if(Auth::check())
    <a class="mobile-menu" id="mobile-header" href="javascript:">
        <i class="feather icon-more-horizontal"></i>
    </a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">

                    <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="small">{{ Auth::user()->name }}</span>
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <span>{{ Auth::user()->name }}</span>
                            <a href="#" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                            <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    @endif

</header>


