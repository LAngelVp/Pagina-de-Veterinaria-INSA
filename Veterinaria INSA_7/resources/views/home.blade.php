@extends('layouts.app')

@section('content')
<div class="container">
<section class="header11 cid-qBHv7rzlto" id="header11-0" data-rv-view="5722">
    <!-- Block parameters controls (Blue "Gear" panel) -->    
    <!-- End block parameters -->
    {{ Auth::user()->citas }}
    <div class="fusion-fullwidth fullwidth-box" style="background-attachment:fixed;background-color:#ffffff;background-image:url('./img/INSA.jpg');background-position:top left;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;border-color:#f6f6f6;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:30px;padding-left:0px;padding-right:0px;padding-top:50px; height:500spx;color: #fff;"><div class="avada-row">
      <h1 style="text-align: center; font-size: 38px !important;"><span class="titulos-iwa" style="color: #fabc2e;">INSA</span></h1>
    </div>
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal" style="text-align: center">Bienvenido {{ Auth::user()->name }} </h1>
        
    </div>    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                           
                        </div>
                    @endif       
               
</section>
                    <br>
                    <br>         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

  