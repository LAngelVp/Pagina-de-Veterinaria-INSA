@extends('layouts.add')
@extends('includes.head')






@section('content')
<main id="main" class="main" style="margin-left: 0px; margin-top:0px;">


    <section class="section profile" >
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-20 d-flex flex-column align-items-center">

                        <img src="img/atencion-medica-veterinaria-atencion-medicina-caso-perro-mascota_24908-12989_ccexpress.png" alt="Profile" class="rounded-circle">
                        <h2>{{ auth()->user()->name }} {{ auth()->user()->app }} {{ auth()->user()->apm }}</h2>
                        <h3>Usuario</h3>
                        <div class="social-links mt-2">

                        </div>
                    </div>
                </div>

            </div>
            @if ($datas->isNotEmpty()  )

            <div class="col-xl-8" >
                @foreach($datas as $data)

                <div class="card" >
                    <div class="card-body pt-3" >
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Detalles de su cita</button>
                            </li>
                        </ul>

                        <div class="tab-content pt-">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview" style="margin-left:4%; margin-right:0%;" >
                                <br>

                                <div class="row">
                                    <div class="col-lg-2 label "><h5>Nombre</h5></div>
                                    <div class="col-lg-4 ">{{ auth()->user()->name }} {{ auth()->user()->app }} {{ auth()->user()->apm }}</div>

                                    <div class="col-lg-2  label"><h5>Fecha</h5></div>
                                    <div class="col-lg-4 ">{{$data->cita}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 label"><h5>Mascota</h5></div>
                                    <div class="col-lg-4">{{$data->mascota}}</div>

                                    <div class="col-lg-2  label"><h5>Edad</h5></div>
                                    <div class="col-lg-4">{{$data->edad}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 label"><h5>Raza</h5></div>
                                    <div class="col-lg-4">{{$data->raza}}</div>

                                    <div class="col-lg-2 label"><h5>Vacunas</h5></div>
                                    <div class="col-lg-4">{{$data->vacunas}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 label" style=" margin-right:-7%;"><h5>Tratamiento</h5></div>
                                    <div class="col-lg-4">{{$data->tratamiento}}</div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                @endforeach

                <section class="section contact">

                    <div class="row gy-4">

                        <div class="col-xl-6">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="info-box card">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Dirección</h3>
                                        <p>Cuitláhuac  <br>La Tinaja</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info-box card">
                                        <i class="bi bi-telephone"></i>
                                        <h3> Tel.</h3>
                                        <p>271-710-4235</p>
                                        <p><br></p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-xl-6">
                            <div class="col-lg-10">
                                <div class="info-box card">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Correo electronico</h3>
                                    <p>rafaelluncarv@gmail.com</p>
                                    <br>
                                </div>
                            </div>


                        </div>

                    </div>

                </section>
            </div>
            @else
                <div class="col-xl-8" >
                    <div class="card" >
                        <div class="card-body pt-3" >
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"><h3>Detalles de su cita</h3></button>
                                </li>
                            </ul>
                            <div class="tab-content pt-">


                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title fst-italic"><h3> </h3></h5>
                                    <h6 class=" fst-italic">Lo sentimos aun no se le a signado una cita.
                                        Si desea una cita por favor contactenos .</h6>
                                </div>

                            </div>

                        </div>
                    </div><section class="section contact">

                        <div class="row gy-4">

                            <div class="col-xl-6">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="info-box card">
                                            <i class="bi bi-geo-alt"></i>
                                            <h3>Dirección</h3>
                                            <p>Cuitláhuac  <br>La Tinaja</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="info-box card">
                                            <i class="bi bi-telephone"></i>
                                            <h3> Tel.</h3>
                                            <p>271-710-4235</p>
                                            <p><br></p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-6">
                                <div class="col-lg-">
                                    <div class="info-box card">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Correo electronico</h3>
                                        <p style="font-size: 15px">rafaelluncarv@gmail.com</p><br>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>
                </div>

                @endif
        </div>
    </section>

</main>
@endsection