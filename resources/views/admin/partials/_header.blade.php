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

    @include('admin.partials._top-navbar')

</header>


