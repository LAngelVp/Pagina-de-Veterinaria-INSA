

@include('layouts.ad')


<main id="main" class="main" style="margin-top:0px">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card" style="margin-left:25%; margin-right:25%;">
                    <div class="card-body"><br>

                        <h1 class="card-title " style="padding-left:30%">Agregar Producto nuevo </h1>

                    @if (isset($producto))
                        {!! Form::open(array('route' => ['producto.update',$producto->id],'method'=>'PATCH','enctype'=>'multipart/form-data')) !!}
                    @else
                        {!! Form::open(array('route' => 'producto.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                    @endif

                    <!-- Horizontal Form -->

                        <!-- Horizontal Form -->
                        <form >
                            <div class="row mb-4">
                                {!! Form::label('nombre', 'Nombre:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('nombre',isset($producto)? $producto->nombre:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('nombre','<small style="color:red">:message</small><br>') !!}

                            </div>

                            <div class="row mb-3">
                                {!! Form::label('precio', 'Precio:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('precio',isset($producto)? $producto->precio:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('precio','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('cantidad', 'Cantidad:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('cantidad',isset($producto)? $producto->cantidad:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('cantidad','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('marca', 'Marca:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('marca',isset($producto)? $producto->marca:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('marca','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('codigo', 'Código:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('codigo',isset($producto)? $producto->codigo:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('codigo','<small style="color:red">:message</small><br>') !!}

                            </div>

                            <div class="row mb-3">
                                {!! Form::label('descripcion', 'Descripción:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('descripcion',isset($producto)? $producto->descripcion:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('descripcion','<small style="color:red">:message</small><br>') !!}
                            </div>
                            @if(isset($producto))
                                <div class="row mb-3"><br>
                                    {!! Form::label('foto','Imagen guardada',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                    <div class="col-sm-7">
                                        <img style="height:70px" src="{{asset('imagenes_productos')."/".$producto->foto}}" >
                                    </div>
                                </div>
                            @endif

                            <div class=" " >
                                {!! Form::label('foto','Imagen',['class'=>'col-sm-3 col-form-label'],['for'=>'inputEmail3']) !!}
                                {!! Form::file('file',isset($producto)?$producto->file:null) !!}
                                {!! $errors->first('file','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Aceptar</button>

                            </div>
                        </form><!-- End Horizontal Form -->
                        <form action="{{ url('/products') }}">
                            <button   class="btn btn btn-success  bx  bxs-chevron-left"  href="{{ url('/products') }}"></button>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </section>

</main><!-- End #main -->

