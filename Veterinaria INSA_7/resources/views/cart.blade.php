@extends('layouts.app')
 
@section('title', 'Carrito de compras')
 
@section('content')

 <br>
 <br>
 <br>
 <div class="nosotros" style="margin-left:5%; margin-right:5%;">
    <table id="cart" class="table table-hover table-condensed">
        <thead style="background-color:#a02a55">
        <tr>
            <th style="width:50%; color:white">Producto</th>
            <th style="width:10%; color:white">Precio</th>
            <th style="width:8%; color:white">Cantidad</th>
            <th style="width:22%; color:white" class="text-center">Subtotal</th>
            <th style="width:10%; color:white"></th>
        </tr>
        </thead>
        <tbody> 
        <?php $total = 0 ?> 
        @if(session('cart'))
            @foreach(session('cart') as $id => $details) 
            <!-- id => details utiliza el id de la tabla producto y el details pinta el nombre, foto, etc, simplemente separa los datos  -->
                <?php $total += $details['precio'] * $details['cantidad'] ?> <!--en una variable total guarda el precio y cantidad de la operacion-->
                <tr>
                <td data-th="Producto">
                        <div class="row"><!--pinta los datos-->
                            <div class="col-sm-3 hidden-xs"><img src="{{asset('imagenes_productos/'.$details['foto'])}}" width="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nombre'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Precio">${{ $details['precio'] }}</td>
                    <td data-th="Cantidad">
                        <input type="number" value="{{ $details['cantidad'] }}" class="form-control cantidad" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['precio'] * $details['cantidad'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
       
        </tbody>
        <tfoot>
       <!-- ` <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>` -->
        <tr>
            <td><a href="{{ url('/catalago') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continúa comprando</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table> 

    <script type="text/javascript"> 
        $(".update-cart").click(function (e) {
           e.preventDefault(); 
           var ele = $(this); 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), cantidad: ele.parents("tr").find(".cantidad").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault(); 
            var ele = $(this); 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        }); 
    </script>

    <form class="pago" method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
    {{ csrf_field() }}
    <input  type="hidden" id="total" type="text" name="total" value="{{$total}}">
        <div class="paypal">
            <div class="row justify-content-end">                
                <button class="btn btn-success">Comprar</button>
            </div> 
        </div> 
    </form>

</div>
<br>

@endsection

