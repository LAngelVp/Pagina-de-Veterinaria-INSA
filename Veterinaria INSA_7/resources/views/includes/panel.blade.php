
@extends('includes.head')
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


        <li class="nav-item">
            <a class="nav-link " style="color: #0a53be"  href="{{ url('/inicio') }}">
                <i class="bx bx-home "></i>
                <span>Inicio</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link  "  style="color: #0a53be" href="{{ url('/catalago') }}" >
                <i class="bx bx-spreadsheet "></i>
                <span>Catalogo</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <hr>
        <li class="nav-item ">
            <a class="nav-link collapsed " href="{{ url('/usuarios') }}">
                <i class="bx bx-purchase-tag-alt "></i>
                <span>Usuarios</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item ">
            <a class="nav-link collapsed " href="{{ url('/admins') }}">
                <i class="bx bx-purchase-tag-alt "></i>
                <span>Administradores</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <hr>

        <li class="nav-item ">
            <a class="nav-link collapsed " href="{{ url('/products') }}">
                <i class="bx bx-purchase-tag-alt "></i>
                <span>Productos</span>
            </a>
        </li><!-- End Profile Page Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed " href="{{ url('/accesorio') }}">
                <i class="bx bxs-bone"></i>
                <span>Accesorios</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/cita')}}">
                <i class="bi bi-journal-bookmark-fill"></i>
                <span>Citas </span>
            </a>
        </li><!-- End Contact Page Nav -->
        <hr>
        <li class="nav-item">
            <a class="nav-link collapsed" style="color: #78341a" href="{{url('/inactivas')}}">
                <i class="bi bi-journal-bookmark-fill" style="color: #78341a"></i>
                <span>Historial de Citas  </span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" style="color: #78341a" href="{{url('/in')}}">
                <i class="bi bi-journal-bookmark-fill" style="color: #78341a"></i>
                <span>Productos Eliminados </span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed " style="color: #78341a" href="{{ url('/inactivos') }}">
                <i class="bx bxs-bone" style="color: #78341a"></i>
                <span>Accesorios Eliminados</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
    </ul>

</aside><!-- End Sidebar-->
