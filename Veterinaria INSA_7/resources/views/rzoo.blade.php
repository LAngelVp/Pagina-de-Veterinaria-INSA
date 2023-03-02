@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid text-center">
  <div class="row justify-content-center">
      <div class="col-md 3">
      </div>
      <div class="col-md 6">
        <h2>¿Clinica veterinaria INSA?</h2>
        <img src="{{url('/img/INSA.jpeg')}}" style="black:500px" class="card-img-top" alt="...">
        <p class="text-center"><i></i></p>
      </div>
      <div class="col-md 3">
      </div>
    </div>
  </div>
    <div class="row justify-content-center">
      <div class="col-md 8" >
      <div class="card text-center" style="background-color: #256D7B"> 
    <h2>
      Alimentos balanceados
    </h2>
  </div>
        <p class="text-center">
        Aplicar estrategias de prevención, control y tratamiento de enfermedades en la salud animal. 
        </p>
        <p class="text-center">
        Ubicación: Av 1 #506 entre calles 5 y 7 Cuitláhuac, Ver.
        </p>
        <div class="text center">
  </div>
  <p class="text-center">
        Se cuenta con una amplia variedad de marcas de alimentos balanceados para su mascota:
        </p> 
  <div class="text center">
    <div class="text center">
      <p>•	Nupec</p>
      <p>•	Purina</p>
      <p>•	Avimex</p>
      <p>•	Aranda </p>
      <p>•	Nucan</p>
      <p>•	Pedigree</p>
      <p>•	Whiskas</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md 4">
        <img src="{{url('img/Control de peso.png')}}" style="width:300px;" class="card-img-top" alt="...">
      </div>
      <div class="col-md 4">
        <img src="{{url('img/aliemento 2.jpg')}}" style="width:300px;" class="card-img-top" alt="...">
      </div>
      <div class="col-md 4">
        <img src="{{url('img/nucan.jpg')}}" style="width:300px;" class="card-img-top" alt="...">
      </div>
      <div class="col-md 4">
        <img src="{{url('img/61VMZeyUZyL._AC_SX466_.jpg')}}" style="width:300px;" class="card-img-top" alt="...">
      </div>
      <div class="col-md 4">
        <img src="{{url('img/pedi-adulto3.png')}}" style="width:300px;" class="card-img-top" alt="...">
      </div>
      <div class="col-md 4">
        <img src="{{url('img/Captura_de_pantalla_2019-04-01_a_la_s_15.24.16_584x.png')}}" style="width:300px;" class="card-img-top" alt="...">
      </div>
      <img src="{{url('img/vacas.png')}}" class="card-img-top" alt="...">
    </div>
    <br>
    <div class="row justify-content-center">
      <div class="col-md 4">
        
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-md-3 text-center">
  <img src="img\My project.png" width="200px" height="200px" alt="">
  </div>
  <div class="col-md-6 text-center">
    <h1>La mejor atención a tu mascota</h1>
    <img src="{{url('img/rzooo.jpg')}}" class="card-img-top" alt="...">
  <hr style="margin:auto;width:40%">
  </div>
  <div class="col-md-3 text-center">
  <h1>INSA 2022</h1>
  </div>
</div>

<script>
  // Set the date we're counting down to
  var countDownDate = new Date("March 18, 2020 15:37:25").getTime();
  // Update the count down every 1 second
  var countdownfunction = setInterval(function() {
    // Get todays date and time
    var now = new Date().getTime();  
    // Find the distance between now an the count down date
    var distance = countDownDate - now;  
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);  
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";  
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(countdownfunction);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 10);
</script>

@endsection