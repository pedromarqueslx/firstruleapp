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
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">

                <li data-username="" class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/infraestruturas')) active @endif @if(str_contains(url()->current(), '/disponibilidades')) active @endif">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Disponibilidades</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="/infraestruturas" class="">Consultar Pedidos</a></li>
                        <li class=""><a href="/infraestruturas/create" class="">Novo Pedido Disponibilidade</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/acessos')) active @endif ">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Acessos</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="/disponibilidades" class="">Consultar Acessos</a></li>
                        <li class=""><a href="/disponibilidades/create" class="">Novo Pedido de Acesso</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/cadastros')) active @endif">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Cadastros</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="/cadastros" class="">Consultar Cadastros</a></li>
                        <li class=""><a href="/cadastros/edit" class="">...</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/operadores')) active @endif @if(str_contains(url()->current(), '/users')) active @endif">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Operadores</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="/users" class="">Consultar Operadores</a></li>
                        <li class=""><a href="/users/create" class="">Novo Operador</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/municipios')) active @endif">
                    <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Municípios</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="/municipios" class="">Consultar Municípios</a></li>
                        <li class=""><a href="/municipios/create" class="">Novo Municípios</a></li>
                    </ul>
                </li>

                <li data-username="" class="nav-item pcoded-hasmenu @if(str_contains(url()->current(), '/licenciamentos')) active @endif">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Licenciamentos</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="/licenciamento" class="">Consultar Licenciamento</a></li>
                        <li class=""><a href="/licenciamento/create" class="">Novo Licenciamento</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
