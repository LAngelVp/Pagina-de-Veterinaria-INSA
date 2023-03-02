@extends ('layouts.app')
@section('content')
<div class="container">
  <!--aquellos elemetos que se necesita mostrar-->
  <div class="row">
        <div class="col-sm-4">
            <img src="{{asset('imagenes_productos/'.$arrayProduct->foto)}}"  style="height:400px"/>
        </div>
        <div class="col-sm-8">
            <h4 style="min-height:45px;margin:5px 0 5px 0">
            {{$arrayProduct->nombre}}
            </h4>
            <p style="min-height:45px;margin:5px 0 5px 0" >
            {{$arrayProduct->descripcion}}
            </p>
            <p style="min-height:45px;margin:5px 0 5px 0">
            {{$arrayProduct->precio}}
            </p> 
            <p style="min-height:45px;margin:5px 0 5px 0">
            {{$arrayProduct->cantidad}}
            </p> 
            <p style="min-height:45px;margin:5px 0 5px 0">
            {{$arrayProduct->categoria}}
            </p>                            
            <button type="button" class="btn btn-primary" onclick="location.href= '{{ url('edit/' . $arrayProduct->id ) }}'" >&#9998;Editar producto</button>
            <button type="button" class="btn btn-light" onclick="location.href= '{{ url('products/') }}'">&#8678;Volver al listado</button>
        </div>
    </div>

</div>
@endsection
