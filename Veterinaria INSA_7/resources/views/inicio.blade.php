@extends('layouts.app') 
@section('title', 'Veterinaria INSA')   
<style>
/* button */
.btn{
  border: 1px solid #ca7798;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
}
.btn1,.btn2{
  color: #3498db;
}
.btn3,.btn4{
  color: #fff;
}
.btn1:hover,.btn2:hover{
  color: #fff;
}
.btn3:hover,.btn4:hover{
  color: #3498db;
}
.btn::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before,.btn3::before{
  top: 0;
  border-radius: 0 0 50% 50%;
}
.btn2::before,.btn4::before{
  bottom: 0;
  border-radius: 50% 50% 0 0;
}
.btn3::before,.btn4::before{
  height: 180%;
}
.btn1:hover::before,.btn2:hover::before{
  height: 180%;
}
.btn3:hover::before,.btn4:hover::before{
  height: 0%;
}
/* end button */
@media (min-width: 768px) {
  /* show 3 items */
  .carousel-inner .active,
  .carousel-inner .active + .carousel-item,
  .carousel-inner .active + .carousel-item + .carousel-item,
  .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item,
  .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item + .carousel-item{
    display: block;
  }

  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
    transition: none;
  }

  .carousel-inner .carousel-item-next,
  .carousel-inner .carousel-item-prev {
    position: relative;
    transform: translate3d(0, 0, 0);
  }

  .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* left or forward direction */
  .active.carousel-item-left + .carousel-item-next.carousel-item-left,
  .carousel-item-next.carousel-item-left + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
  .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  /* farthest right hidden item must be abso position for animations */
  .carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* right or prev direction */
  .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
  .carousel-item-prev.carousel-item-right + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
  .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
  }


    .imagenes{
    position: relative;
    display: inline-block;
    text-align: center;
}

.texto-encima{
    position: absolute;
    top: 10%;
    left: 55%;
    color:white;

}
.centrado{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}



    }
/* FIN CSS SLIDER */
</style>
@section('content')
<section class="header11 cid-qBHv7rzlto" id="header11-0" data-rv-view="5722">
    <!-- Block parameters controls (Blue "Gear" panel) -->    
    <!-- End block parameters -->
    <div class="fusion-fullwidth fullwidth-box" style="background-attachment:fixed;background-color:#ffffff;background-image:url('/img/veterinaria.jpeg');background-position:top left;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;border-color:#f6f6f6;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:30px;padding-left:0px;padding-right:0px;padding-top:50px; height:500px;color: #0A497B;"><div class="avada-row">
      <h1 style="text-align: center; font-size: 38px !important;"><span class="titulos-iwa" style="color: #fabc2e;"></span></h1>
    </div>
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Veterinaria INSA</h1>
        <p class="lead font-weight-normal"> "Integradora en Nutrición en Salud Animal" </p>
        <a class="btn btn-outline" href="{{ url('/rzoo' ) }}">Acceder</a>
    </div>    
</section>
<br>

<div class="principal" >
  <div class="row justify-content-center">
      <div class="col-10 text-center " >
          <a style="color: #1b1e21; font-size: 2.75rem " >¡Conóce nuestros trabajos!
              <a style="margin-top: -7px" class="btn btn-outline" href="{{ url('/nosotros' ) }}">Ir</a>
          </a>
      </div><br><br><br><br>
    <div class="col-5">
      <div class="mision" >
          <div class="imagenes" >
            <img src="{{url('/img/sangre.png')}}"  class="card-img-top" alt="...">
                <div class="texto-encima">
                </div>
          </div>
      </div>
    </div>

    <div class="col-5">
      <div class="mision" >
        <div class="imagenes" ><img src="{{url('/img/ultrasonido.png')}}"  class="card-img-top" alt="...">
            <div class="texto-encima">
            </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
      <div class="col-10 text-center " >
          <a style="color: #1b1e21; font-size: 2.75rem " >¿Quieres una cotización?<br>¡Contáctanos!
              <a style="margin-top: -7px" class="btn btn-outline" href="{{ url('/contacto' ) }}">Ir</a>
          </a>
      </div><br><br><br><br>
    <div class="col-5">
      <div class="mision">
        <img src="{{url('/img/perro.png')}}" class="card-img-top" alt="...">
            <div class="texto-encima">

            </div>
      </div>
    </div>

    <div class="col-5">
      <div class="mision" >
        <img src="{{url('/img/caballo.2.png')}}"  class="card-img-top" alt="...">
      </div>
    </div>
  </div>
</div>


<div class="col-10 centrado cent " style="width:800px; height:500px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d944.164442256976!2d-96.71987546331266!3d18.813399002310668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1647481677556!5m2!1ses-419!2smx"
            width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<br><br>

<!-- slider tienda -->
<div class="content">
  <div class="container-fluid">
    <h1 class="text-center mb-3"></h1>
    <h1 class="text-center mb-3"></h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
            @foreach( $products as $key => $product)
                @if($key == 0)
                    <div class="carousel-item col-xs-3 col-sm-3 col-md-3 active">
                        <div class="card">
                            <img class="card-img-top img-fluid"  src="{{asset('imagenes_productos/'.$product->foto)}}" style="width:250px; height:200px" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title bi-align-middle"  style="font-size: 15px">{{$product->nombre}}</h4>
                                <HR style="color: #78341a; margin-bottom:-1rem">
                            </div>
                            <div class="col-md-5 ">
                                <a style="border-color: #1CBAA4"  href="#" class="btn btn-light "   onclick="location.href= '{{ url('details_usu/' . $product->id ) }}'">Detalles</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="carousel-item col-xs-3 col-sm-3 col-md-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{asset('imagenes_productos/'.$product->foto)}}" style="width:250px; height:200px"  alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 15px" >{{$product->nombre}}</h4>
                                <HR style="color: #78341a; margin-bottom:-1rem">
                            </div>
                            <div class="col-md-5"  >
                                <a style="border-color: #1CBAA4; padding: 4px 11px" href="#" class="btn btn-light"  onclick="location.href= '{{ url('details_usu/' . $product->id ) }}'">Detalles</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div><!--Cierre myCarousel-->
  </div><!--Cierre container-fluid--> 
</div><!--Cierre content-->


@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $("#myCarousel").on("slide.bs.carousel", function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 7;
      var totalItems = $(".carousel-item").length;

      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $(".carousel-item")
              .eq(i)
              .appendTo(".carousel-inner");
          } else {
            $(".carousel-item")
              .eq(0)
              .appendTo($(this).find(".carousel-inner"));
          }
        }
      }
    });
  });
</script>
 @endsection
