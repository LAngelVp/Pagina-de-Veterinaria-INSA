@extends('layouts.master') 
@section('content')
<div class="content">
  <div class="container-fluid">
    <h1 class="text-center mb-3">Bootstrap Multi-Card Carousel</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">                        
            @foreach( $products as $key => $product)
                @if($key == 0)
                    <div class="carousel-item col-md-4 active">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{$product->nombre}}</h4>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="carousel-item col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{$product->nombre}}</h4>
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
      var itemsPerSlide = 3;
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