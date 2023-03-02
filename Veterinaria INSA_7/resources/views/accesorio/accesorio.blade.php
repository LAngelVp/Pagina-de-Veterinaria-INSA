
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
                                <caption><h1 style="text-align:center"> LISTA DE ACCESORIOS</h1></caption>
                                <br>
                                <td><a href="{{url('/nuevo')}}" class="btn btn-warning"> Agregar Accesorio</a></td>
                                <br><br>
                                @if ($productos->isNotEmpty())

                                    <table class="table table-borderless datatable table-hover" style="border: #1b1e21 " >
                                        <thead style="background-color:#a02a55">
                                            <tr>
                                                <th scope="col" style="vertical-align: middle" class="text-center"># </th>
                                                <th scope="col" style="color:white" class="text-center">Nombre </th>
                                                <th scope="col" style="color:white" class="text-center">Precio </th>
                                                <th scope="col" style="color:white" class="text-center">Cantidad </th>
                                                <th scope="col" style="color:white" class="text-center">Marca </th>
                                                <th scope="col" style="color:white" class="text-center">Codigo </th>
                                                <th scope="col" style="color:white" class="text-center">Descripción </th>
                                                <th scope="col" style="color:white; width: 15%; " class="text-center">Foto </th>
                                                <th scope="col" colspan="3" style="color:white" class="text-center">Opciones</th>
                                            </tr><!--filas-->
                                        </thead>
                                    <tbody>
                                    <!--cuerpo de la tabla-->
                                    @foreach($productos as $producto)
                                        <tr>
                                            <!---->
                                            <th scope="row" style="vertical-align: middle" class="text-center">{{$loop->index}} </th>
                                            <td style="vertical-align: middle " class="text-center"> {{$producto->nombre}}</td>
                                            <td style="vertical-align: middle" class="text-center"> {{$producto->precio}}</td>
                                            <td style="vertical-align: middle" class="text-center"> {{$producto->cantidad}}</td>
                                            <td style="vertical-align: middle" class="text-center"> {{$producto->marca}}</td>
                                            <td style="vertical-align: middle" class="text-center"> {{$producto->codigo}}</td>
                                            <td style="vertical-align: middle"  class="text-justify"> {{$producto->descripcion}}</td>
                                            <td style="vertical-align: middle"><img src="{{asset('imagenes_productos/'.$producto->foto)}}" width="100" style="height:70px"></td>
                                            <td  style="vertical-align: middle" class="text-center">
                                                <a href="{{route('accesorio.edit',$producto->id)}}"class="btn btn-success bx bxs-edit-alt "></a>
                                                <form style="padding-top:19px" action="{{action('ProductsController@destroyAcc', $producto->id)}}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button   type="submit" class="btn btn-danger bx bxs-trash-alt" onclick="return confirm('¿Está seguro de eliminar este accesorio?')"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                @else
                                    <h2>No hay Accesorios Registradas</h2>
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
