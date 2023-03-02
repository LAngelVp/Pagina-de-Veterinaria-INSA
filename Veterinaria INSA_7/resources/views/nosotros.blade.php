@extends('layouts.app')
@section('title', 'Nosotros')
@section('content')
<div class="content nosotros"> 
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('/img/viatico.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{url('/img/veterinaria.jpeg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{url('/img/sangre23.png')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="card text-center " style="background-color: #256D7B"> 
    <h2>
      ¿Quiénes somos?
    </h2>
    <img src="{{url('/img/quienes-somos xd.png')}}" class="align-self-center mr-3" alt="...">
  </div>
  <br> 
  <div class="media">
    <img src="{{url('/img/INSA.jpeg')}}" class="align-self-center mr-3" alt="...">
    <div class="media-body" style="background-color: #a5efc987">
      <p>En INSA El 11 de abril del 2017 se inician operaciones en Cuitláhuac, Veracruz con el nombre comercial LunCarv Clínica Veterinaria y Alimentos Balanceados, siendo las iniciales del MVZ fundador, Rafael Luna Carvajal. Salud y Alimentación animal fueron y son los ejes principales de la organización.</p>
      <p class="mb-0">En el año 2020, se toman dos decisiones importantes para el negocio. La primera, darle un cambio al nombre y formato, se decide por INSA (Integradora en Nutrición y Salud Animal), ese mismo año se realiza la apertura de la primera sucursal en la misma ciudad.</p>
    </div>
  </div> 

  <div class="card text-center" style="background-color: #256D7B"> 
    <h2>
      Misión, visión y valores
    </h2>
    <img src="{{url('/img/puzzle-mision-vision-valores_ccexpress.png')}}" class="align-self-center mr-3" alt="...">
  </div>
  <br> 
  <div class="text center">
    <div class="text center" style="background-color: #a5efc987">
      <p>Misión: Brindar a los pacientes de pequeñas y grandes especies, servicios dignos así como oportunos de alimentación y medicina veterinaria para así otorgar los mejores tratamientos médicos.</p>
      <p>Visión: Ser reconocidos por regirse con normas de bienestar animal. Convertir a INSA y a sus servicios diagnósticos, médicos e farmacéuticos como principal punto de referencia de la región.  </p>
      <p>Valores: 
      <p class="mb-0">Amor: Los animales traen amor y fidelidad a sus compañeros, es nuestro deber responderles de la misma manera.   </p>
      <p class="mb-0">Responsabilidad: Usando la medicina preventiva y la alimentación adecuada como herramienta para promover la salud, es nuestra responsabilidad mantener sano al animal.   </p>
    </div>
  </div> 

  <div class="card text-center" style="background-color: #256D7B"> 
    <h2>
      Objetivo de la veterinaria INSA:
    </h2>
    <img src="{{url('/img/descarga-removebg-preview (1) (1).png')}}" class="align-self-center mr-3" alt="..." >
  </div>
  <br> 
  <div class="text center">
    <div class="text center" style="background-color: #a5efc987">
      <p>Aplicar estrategias de prevención, control y tratamiento de enfermedades en la salud animal. </p>
    </div>
  </div> 

  <div class="card text-center" style="background-color: #256D7B"> 
    <h2>
      Procesos que se realizan en la empresa:
    </h2>
    <img src="{{url('/img/atencion-medica-veterinaria-atencion-medicina-caso-perro-mascota_24908-12989_ccexpress.png')}}" class="align-self-center mr-3" alt="...">
  </div>
  <br> 
  <div class="text center">
    <div class="text center" style="background-color: #a5efc987">
      <p>•	Prevención (plan de vacunación).</p>
      <p>•	Consultas médicas.</p>
      <p>•	Cirugías.</p>
      <p>•	Ultrasonidos.</p>
      <p>•	Rayos X. </p>
      <p>•	Alimentos balanceados.</p>
      <p>•	Farmacia veterinaria.</p>
      <p>•	Servicio de consultas a domicilio</p>
    </div>
  </div> 
  
    <div class="card text-center" style="background-color: #256D7B">
    <h2>
      ¿Qué ofrecemos?
    </h2>
    <img src="{{url('/img/veterinario-_ccexpress.png')}}" class="align-self-center mr-3" alt="...">
    </div>
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off"></span>
            <h4>Farmacia veterinaria</h4>
            <p>INSA</p>
            <img src="{{url('/img/Logo2-.png')}}" class="align-self-center mr-3" alt="...">        
            <p><button class="btn ver" onclick="location.href= '{{ url('cstudio/') }}'">Ver más</button></p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart"></span>
            <h4>Citas médicas y servicio de consultas a domicilio</h4>
            <p>Medicina veterinaria zootecnitsta</p>
            <img src="{{url('/img/36.png')}}" class="align-self-center mr-3" alt="...">
            <p><button class="btn ver" onclick="location.href= '{{ url('icheve/') }}'">Ver más</button></p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock"></span>
            <h4>Alimentos balanceados</h4>
            <p>Calidad para su mascota</p>
            <img src="{{url('/img/45.png')}}" class="align-self-center mr-3" alt="...">
            <p><button class="btn ver" onclick="location.href= '{{ url('rzoo/') }}'">Ver más</button></p>
        </div>
  </div>

  

</div>
@endsection