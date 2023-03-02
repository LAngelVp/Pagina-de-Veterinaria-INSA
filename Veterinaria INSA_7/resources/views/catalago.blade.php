@extends('layouts.app')
@section('title', 'Catalogo')
@section('content')
<div class="d-flex catalog">
	<div class="bg-light border-right" id="sidebar-wrapper">
		<div class="sidebar-heading" ><h5 style="color: #fab927;">Categorias</h5></div>
			<div class="list-group list-group-flush">
				<a href="{{ url('/catalago') }}" class="list-group-item list-group-item-action bg-light"> <img src="img/todo.png" width="20" height="20" alt=""> Productos</a>
				<a href="{{ url('/modelados') }}" class="list-group-item list-group-item-action bg-light"><img src="img/modelado.png" width="20" height="20" alt=""> Accesorios</a>
				<!--<a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
				<a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
				<a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>-->
				<a href="#" class="list-group-item list-group-item-action bg-light"></a>
			</div>
		</div>
		<div class="container" >
			<div class="title-view">
				<h2 class="text-center" style="color: #256D7B;">Productos</h2>
			</div>
			<br>
			<div class="row justify-content">
				@foreach($products as $product)          
			      	<div class="col-xs-3 col-sm-3 col-md-3 text-center">
				      	<div class="card" style="background-color: #ffffff;" >
				      		<img src="{{asset('imagenes_productos/'.$product->foto)}}" width="400" height="200" class="card-img-top" alt="...">
				      		<div class="card-body">
				      			<h5 class="card-title"> {{$product->nombre}}</h5>
				      			<div class="row">
				      				<div class="col-md-7">
				      					<p class="btn btn-danger btn-block" style="padding:0.1rem">${{$product->precio}}</p>
				      				</div>
				      				<div class="col-md-5">
				      					<a href="#" class="btn btn-light " style="padding:0.1rem"  onclick="location.href= '{{ url('details_usu/' . $product->id ) }}'">Detalles</a>
				      				</div>
				      			</div>
				      		</div>
				      	</div>
  						<br>
  					</div>
 				@endforeach
				</div>
		</div>
	</div>
</div>
@endsection