<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{ url('/home') }}" class="b-brand">
                <div class="b-bg">
                    <img src="{{url('/favicon.svg')}}" alt="FirstRule" class=""/>
                </div>
                <span class="b-title">FirstRule</span>
            </a>
            @if(Auth::check())
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            @endif
        </div>
        @if(Auth::check())
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">

                <li data-username="" class="nav-item @if(str_contains(url()->current(), '/home')) active @endif">
                    <a href="{{ url('/home') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/disponibilidades')) active @endif">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Disponibilidades</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/disponibilidades')}}" class="">Consultar Pedidos</a></li>
                        <li class=""><a href="{{ url('/disponibilidades/create')}}" class="">Novo Pedido Disponibilidade</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/acessos')) active @endif ">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Acessos</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/acessos')}}" class="">Consultar Acessos</a></li>
                        <li class=""><a href="{{ url('/acessos/create')}}" class="">Novo Pedido de Acesso</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/cadastros')) active @endif">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Cadastros</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/cadastros')}}" class="">Consultar Cadastros</a></li>
                        <li class=""><a href="{{ url('/cadastros/create')}}" class="">Novo Cadastro</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/operadores')) active @endif @if(str_contains(url()->current(), '/users')) active @endif">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Operadores</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/users')}}" class="">Consultar Operadores</a></li>
                        <li class=""><a href="{{ url('/users/create')}}" class="">Novo Operador</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/municipios')) active @endif">
                    <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Municípios</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/municipios')}}" class="">Consultar Municípios</a></li>
                        <li class=""><a href="{{ url('/municipios/create')}}" class="">Novo Município</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/licenciamentos')) active @endif">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Licenciamentos</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ url('/licenciamentos')}}" class="">Consultar Licenciamentos</a></li>
                        <li class=""><a href="{{ url('/licenciamentos/create')}}" class="">Novo Licenciamento</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        @endif
    </div>
</nav>
<!-- [ navigation menu ] end -->
