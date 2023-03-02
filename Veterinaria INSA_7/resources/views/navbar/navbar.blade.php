<nav class="navbar navbar-expand-lg navbar navbar-light sticky-top" id="navbar">   
   <a class="navbar-brand" href="{{ url('/inicio') }}">
       <img src="{{ asset('img\Logo-PhotoRoom.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
      INSA
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
    @guest
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/catalago') }}">
                        Catálogos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nosotros') }}">
                        Nosotros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contacto') }}">
                        Contáctanos
                    </a>
                </li>
                <div class="dropdown">
                    <button type="button" class="btn btn-warning cart" data-toggle="dropdown">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="badge badge-pill badge-secondary">{{ count((array) session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger"style="color: #212529;">{{ count((array) session('cart')) }}</span>
                            </div>
                            <?php $total = 0 ?>
                            @foreach((array) session('cart') as $id => $details)
                                <?php $total += $details['precio'] * $details['cantidad'] ?>
                            @endforeach
                            @foreach((array) session('car') as $id => $details)
                                <?php $total += $details['precio'] * $details['cantidad'] ?>
                            @endforeach
                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                        </div>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{asset('imagenes_productos/'.$details['foto'] )}}" width="30" height="30">
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['nombre'] }}</p>
                                        <span class="price text-info"> ${{ $details['precio'] }}</span> <span class="count"> Cantidad:{{ $details['cantidad'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        @if(session('car'))
                            @foreach(session('car') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{asset('imagenes_productos/'.$details['foto'] )}}" width="30" height="30">
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['nombre'] }}</p>
                                        <span class="price text-info"> ${{ $details['precio'] }}</span> <span class="count"> Cantidad:{{ $details['cantidad'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Ver todo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img\usuario-a.png')}}" width="30" height="30" alt="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{ route('login') }}"> <img src="{{ asset('img\usuario.png')}}" width="30" height="30" alt=""> Iniciar sesión</a>
                        <a class="dropdown-item" href="{{ route('register') }}">  <img src="{{ asset('img\registro.png')}}" width="30" height="30" alt=""> Registrarse</a>

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

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/catalago') }}">
                        Catálogos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nosotros') }}">
                        Nosotros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contacto') }}">
                        Contáctanos
                    </a>
                </li>
                <!--<li class="nav-item {{ Request::is('products') && ! Request::is('create')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/products')}}">
                        Productos
                    </a>
                </li>
                <li class="nav-item {{  Request::is('create') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/create')}}">
                    <img src="img\nuevo-producto.png" width="30" height="30" alt=""> Nuevo producto
                    </a>
                </li>
                -->
                <div class="dropdown">
                    <button type="button" class="btn btn-warning cart" data-toggle="dropdown">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="badge badge-pill badge-secondary">{{ count((array) session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger"style="color: #212529;">{{ count((array) session('cart')) }}</span>
                            </div>
                            <?php $total = 0 ?>
                            @foreach((array) session('cart') as $id => $details)
                                <?php $total += $details['precio'] * $details['cantidad'] ?>
                            @endforeach
                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                        </div>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{asset('imagenes_productos/'.$details['foto'])}}" width="80" height="80">
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p >{{ $details['nombre'] }}</p>
                                        <span class="price text-info"> ${{ $details['precio'] }}</span> <span class="count"> Cantidad:{{ $details['cantidad'] }}</span>
                                    </div>
                                </div><br>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Ver todo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}<img src="{{ asset('img\usuario.png')}}" width="30" height="30" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('/agenda')}}" ><img src="{{ asset('img\agenda.png')}}" width="30" height="30" alt=""> Cita</a>

                        <a class="dropdown-item" href="{{url('/products')}}" ><img src="{{ asset('img\admin3.png')}}" width="30" height="30" alt=""> Administrador</a>
                    <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    <li class="nav-item {{ Request::is('products') && ! Request::is('create')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/products')}}">
                        Productos
                    </a>
                </li>-->
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="{{ asset('img\logout.png')}}" width="30" height="30" alt=""> Cerrar sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>

                </li>

            </ul>
        </div>

    @endguest
</nav>

