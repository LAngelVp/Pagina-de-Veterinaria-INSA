@extends('includes.scripts')
@extends('includes.panel')


<nav id="header"  class="header fixed-top d-flex align-items-center navbar  navbar-expand-lg  navbar-light sticky-top" id="navbar">
    <a style="color:rgb(255 255 255 / 90%) " class="navbar-brand" href="{{ url('/inicio') }}">
        <img src="{{ asset('img\Logo-PhotoRoom.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
        INSA
    </a>
    <i style="color: #fff" class="bi bi-list toggle-sidebar-btn"></i>
    @guest
        <div  class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img\usuario-a.png')}}" width="30" height="30" alt="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{ route('login') }}"> <img src="img\usuario.png" width="30" height="30" alt=""> Iniciar sesión</a>
                        <a class="dropdown-item" href="{{ route('register') }}">  <img src="img\registro.png" width="30" height="30" alt=""> Registrarse</a>
                        <div class="dropdown-divider">
                        </div>
                        <!--<a class="dropdown-item" href="#"><img src="img\reportar.png" width="30" height="30" alt="">Reportar</a>
                    -->
                    </div>
                </li>
            </ul>
            <!--CARRITO-->

        </div>
        <!--FIN CARRITO-->
    @else
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}<img src="{{ asset('img\usuario.png')}}" width="30" height="30" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <!--  <a class="dropdown-item" href="{{url('/products')}}" ><img src="img\admin3.png" width="30" height="30" alt=""> Administrador</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                        <li class="nav-item {{ Request::is('products') && ! Request::is('create')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/products')}}">
                        Productos
                    </a>
                </li>-->

                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="img\logout.png" width="30" height="30" alt=""> Cerrar sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>

                </li>

            </ul>
        </div>

    @endguest
</nav>

@yield('content')

</body>
</html>