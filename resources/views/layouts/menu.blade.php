<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FirstRule</title>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
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

<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
        <a href="index.html" class="b-brand">
            <div class="b-bg">
                <img src="{{url('/favicon.svg')}}" alt="FirstRule" class=""/>
            </div>
            <span class="b-title">FirstRule</span>
        </a>
    </div>
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
</header>
<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">

                            <!--[ Recent Users ] start-->
                            <div class="col-12">

                                @yield('content')

                            </div>
                            <!--[ Recent Users ] end-->

                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 11]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (11 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

    <div class="container-fluid">

        @yield('footer')

    </div>

</body>
</html>

<!-- Required Js -->
<script src="/assets/js/vendor-all.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/pcoded.min.js"></script>
