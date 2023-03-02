
@extends('layouts.ad')

@section('content')
    <main id="main" class="main" style="margin-top:0px">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <BR>
                                    <div class="nosotros " style="margin-left:4%; margin-right:4%;">
                                        <caption><h1 style="text-align:center"> HISTORIAL DE CITAS</h1></caption>
                                        @if ($citas->isNotEmpty())

                                        <table class="table table-borderless datatable table-hover" style="border: #1b1e21 " >
                                            <thead style="background-color:#a02a55">
                                            <tr>
                                                <th scope="col" style="color:white" class="text-center"># </th>
                                                <th scope="col" style="color:white;padding-right: 60px; object-position: right;" class="text-center">N.Dueño </th>
                                                <th scope="col" style="color:white" class="text-center">Email </th>
                                                <th scope="col" style="color:white; padding-right: 65px;" class="text-center">Cita </th>
                                                <th scope="col" style="color:white" class="text-center">Mascota </th>
                                                <th scope="col" style="color:white" class="text-center">Tel </th>
                                                <th scope="col" style="color:white" class="text-center">Edad </th>
                                                <th scope="col" style="color:white" class="text-center">Raza </th>
                                                <th scope="col" style="color:white" class="text-center">Tratamiento </th>
                                                <th scope="col" style="color:white" class="text-center">Vacunas </th>
                                                <th scope="col" colspan="3" style="color:white" class="text-center">Opciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($citas as $cita)
                                                <tr >
                                                    <th scope="row" style="vertical-align: middle" class="text-center">{{$loop->index}} </th>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->name}} {{$cita->app}} {{$cita->apm}}</td>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->email}}</td>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->cita}}</td>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->mascota}}</td>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->tel}}</td>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->edad}}</td>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->raza}}</td>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->tratamiento}}</td>
                                                    <td style="vertical-align: middle" class="text-center"> {{$cita->vacunas}}</td>
                                                    <td style="vertical-align: middle" class="text-center">
                                                        <form action="{{action('CitasController@activar', $cita->id)}}" method="POST">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-primary  bi-arrow-counterclockwise" onclick="return confirm('¿Seguro que desea activar esta cita?')"></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <h2>No hay Citas Eliminadas</h2>
                                        @endif
                                    </div>

                                </div>
                        </div>
                    </div><!-- End Recent Sales -->


                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @endsection


    </body>

    </html>
