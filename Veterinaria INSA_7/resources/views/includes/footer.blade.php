

@include('layouts.ad')

<main id="main" class="main" style="margin-top:0px">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @if (count($errors) > 0)<br>
                <h5><strong>Ups!</strong> Hay un problema con su registro.</h5> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="card" style="margin-left:25%; margin-right:25%;">
                    <div class="card-body"><br>

                        <h1 class="card-title " style="padding-left:30%">Agregar accesorio nuevo </h1>

                    @if (isset($accesorio))
                        {!! Form::open(array('route' => ['accesorio.update',$accesorio->id],'method'=>'PATCH','enctype'=>'multipart/form-data')) !!}
                    @else
                        {!! Form::open(array('route' => 'accesorio.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                    @endif

                    <!-- Horizontal Form -->

                        <!-- Horizontal Form -->
                        <form>
                            <div class="row mb-4">
                                {!! Form::label('nombre', 'Nombre:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('nombre',isset($accesorio)? $accesorio->nombre:null,array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="row mb-3">
                                {!! Form::label('precio', 'Precio:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('precio',isset($accesorio)? $accesorio->precio:null,array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="row mb-3">
                                {!! Form::label('cantidad', 'Cantidad:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('cantidad',isset($accesorio)? $accesorio->cantidad:null,array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="row mb-3">
                                {!! Form::label('marca', 'Marca:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('marca',isset($accesorio)? $accesorio->marca:null,array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="row mb-3">
                                {!! Form::label('codigo', 'Codigo:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('codigo',isset($accesorio)? $accesorio->cantidad:null,array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="row mb-3">
                                {!! Form::label('descripcion', 'Descripción:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('descripcion',isset($accesorio)? $accesorio->descripcion:null,array('class'=>'form-control')) !!}
                                </div>

                            </div>
                            <div class=" " >
                                @if(isset($accesorios))
                                    <img src="{{asset('imagenes_productos')."/".$accesorios->foto}}" >
                                @endif
                                {!! Form::label('foto','Imagen',['class'=>'col-sm-3 col-form-label'],['for'=>'inputEmail3']) !!}
                                {!! Form::file('file',isset($accesorio)?$accesorio->file:null) !!}
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Aceptar</button>

                            </div>
                        </form><!-- End Horizontal Form -->
                        <form action="{{ url('/accesorio') }}">
                            <button   class="btn btn btn-success  bx  bxs-chevron-left"  href="{{ url('/accesorio') }}"></button>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </section>

</main><!-- End #main -->


