@extends ('layouts.app')
@section('content')
<br>
<div class="container">
  <!--aquellos elemetos que se necesita mostrar-->
  <div class="row">
        <div class="card col-sm-4">
            <img src="{{asset('imagenes_productos/'.$arrayProduct->foto)}}"  style="height:400px"/>
        </div>
        <div class="col-sm-6">
            <h2 style="min-height:45px;margin:5px -60px 5px 30px" >
            {{$arrayProduct->nombre}}
            </h2>
            <h4 style="min-height:45px;margin:5px -60px 5px 30px" > Descripción </h4>
            <p style="min-height:45px;margin:5px -60px 5px 30px">{{$arrayProduct->descripcion}}</p>

            <h4 style="min-height:45px;margin:5px -60px 5px 30px">Precio</h4>
            <p style="min-height:45px;margin:5px -60px 5px 30px">${{$arrayProduct->precio}}</p>

            <h4 style="min-height:45px;margin:5px -60px 5px 30px">Marca</h4>
            <p style="min-height:45px;margin:5px -60px 5px 30px">{{$arrayProduct->marca}}</p>
            <div style="min-height:45px;margin:5px -60px 5px 30px">

                <button type="button" class="btn btn-success" onclick="location.href= '{{ url('add-to-cart/' . $arrayProduct->id ) }}'" ><img src="{{url('/img/mas.png')}}" width="30" height="30" alt=""></button>
                <button type="button" class="btn btn-light" onclick="location.href= '{{ url('catalago/') }}'">&#8678;Volver al listado</button>
            </div>
        </div>
    </div>

</div>
<br>
@endsection
