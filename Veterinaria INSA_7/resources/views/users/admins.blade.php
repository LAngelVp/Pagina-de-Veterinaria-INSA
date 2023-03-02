
@extends('layouts.ad')

@section('content')
    <main id="main" class="main" style="margin-top:0px">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body" style="margin-left:4%; margin-right:4%;">
                                <BR>
                                <caption><h1 style="text-align:center"> LISTA DE ADMINISTRADORES</h1></caption>

                                <br><br>
                                @if ($admins->isNotEmpty())

                                    <table class="table table-borderless datatable table-hover" style="border: #1b1e21 " >
                                        <thead style="background-color:#a02a55">
                                            <tr>
                                                <th scope="col" style="vertical-align: middle" class="text-center"># </th>
                                                <th scope="col" style="color:white" class="text-center">Nombre </th>
                                                <th scope="col" style="color:white" class="text-center">E-mail </th>

                                                <th scope="col" colspan="3" style="color:white" class="text-center">Opciones</th>
                                            </tr><!--filas-->
                                        </thead>
                                    <tbody>
                                    <!--cuerpo de la tabla-->
                                    @foreach($admins as $admin)
                                        <tr>
                                            <!---->
                                            <th scope="row" style="vertical-align: middle" class="text-center">{{$loop->index}} </th>
                                            <td style="vertical-align: middle" class="text-center"> {{$admin->name}} {{$admin->app}} {{$admin->apm}}</td>
                                            <td style="vertical-align: middle" class="text-center"> {{$admin->email}}</td>
                                            <td style="vertical-align: middle" class="text-center">
                                                <form action="{{action('AdminController@desactivar', $admin->id)}}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-primary   ri-user-received-2-fill" onclick="return confirm('Este usuario dejara de ser Administrador ¿Desea continuar?')"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                @else
                                    <h2>No hay Usuarios Registradas</h2>
                                @endif
                            </div>
                        </div>
                    </div><!-- End Recent Sales -->
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    @endsection
    </body>
    </html>
