

@include('layouts.ad')


<main id="main" class="main" style="margin-top:0px">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card" style="margin-left:25%; margin-right:25%;">
                    <div class="card-body"><br>

                            <h1 class="card-title " style="padding-left:30%">Agregar nueva cita </h1>

                    @if (isset($cita))
                        {!! Form::open(array('route' => ['cita.update',$cita->id],'method'=>'PATCH','enctype'=>'multipart/form-data')) !!}
                    @else
                        {!! Form::open(array('route' => 'cita.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                    @endif

                        <!-- Horizontal Form -->

                    <!-- Horizontal Form -->
                        <form>
                            <div class="row mb-4">
                                {!! Form::label('id_users', 'Email:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}

                                <div class="col-sm-7">
                                    {!! Form::select('id_users',$users) !!}
                                    </div>
                                {!! $errors->first('id_users','<small style="color:red">:message</small><br>') !!}

                            </div>

                            <div class="row mb-3">
                                {!! Form::label('tel', 'Telefono:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('tel',isset($cita)? $cita->tel:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('tel','<small style="color:red">:message</small><br>') !!}
                            </div>

                            <div class="row mb-3">
                                {!! Form::label('mascota', 'N. mascota:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('mascota',isset($cita)? $cita->mascota:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('mascota','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('edad', 'Edad:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('edad',isset($cita)? $cita->edad:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('edad','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('raza', 'Raza:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('raza',isset($cita)? $cita->raza:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('raza','<small style="color:red">:message</small><br>') !!}

                            </div>

                            <div class="row mb-3">
                                {!! Form::label('tratamiento', 'Tratamiento:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('tratamiento',isset($cita)? $cita->tratamiento:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('tratamiento','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('cita', 'Cita:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::date('cita',isset($cita)? $cita->cita:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('cita','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('vacunas', 'Vacunas:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('vacunas',isset($cita)? $cita->vacunas:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('vacunas','<small style="color:red">:message</small><br>') !!}
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Aceptar</button>

                            </div>
                        </form><!-- End Horizontal Form -->
                        <form action="{{ url('/cita') }}">
                            <button   class="btn btn btn-success  bx  bxs-chevron-left"  href="{{ url('/cita') }}"></button>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </section>

</main><!-- End #main -->


