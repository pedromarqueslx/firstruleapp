@if(Auth::check())
    <a class="mobile-menu" id="mobile-header" href="javascript:">
        <i class="feather icon-more-horizontal"></i>
    </a>

<div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
        <li>
            <div class="dropdown drp-user">
                <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="small">{{Auth::user()->name}}</span>
                    <i class="icon feather icon-settings"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">
                    <div class="pro-head">
                        <span>{{ Auth::user()->name }}</span>
                    </div>
                    <ul class="pro-body">
                        <li><a href="{{route('user.profile.show', auth()->user())}}" class="dropdown-item"><i class="feather icon-settings"></i> Gestão</a></li>
                        <li><a href="{{route('user.profile.show', auth()->user())}}" class="dropdown-item"><i class="feather icon-user"></i>Dados de Utilizador</a></li>
                        <li>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="feather icon-log-out"></i>{{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>

@endif
