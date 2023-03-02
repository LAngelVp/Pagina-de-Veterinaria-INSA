@extends('layouts.app')
@section('content')

<!-- Band Description -->
<div class="content ">
  <div class="container-fluid text-center">
    <div class="row justify-content-center">
      <div class="col-md 3">
      </div>
      <div class="col-md 6">
        <h2>Farmacia Veterinaria INSA</h2>
        <img src="{{url('/img/INSA.jpeg')}}" style="black:500px" class="card-img-top" alt="...">
      </div>
      <div class="col-md 3">
      </div>
    </div>
  </div>
    <div class="row justify-content-center">
      <div class="col-md 8">
        <p class="text-center" style="font-size: 2rem">
          Actualmente se cuenta con una amplia variedad de medicamentos veterinarios las cuales son vitaminas, desparasitantes, antibióticos, etc.
        </p>
      </div>
    </div>

    <br>
    <div class="row justify-content-center">
      <div class="col-md 4">
        <img src="{{url('img/xd.jpeg')}}" class="card-img-top" alt="...">
          <div class="texto-encima">
          </div>
      </div>
        <div class="col-md 4">
            <img src="{{url('/img/veterinaria.jpeg')}}" class="card-img-top" alt="...">

            <div class="texto-encima">
            </div>
        </div>
    </div>
  </div>
</div>

@endsection