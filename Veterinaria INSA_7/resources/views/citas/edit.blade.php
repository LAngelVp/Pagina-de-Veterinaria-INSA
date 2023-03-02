

@include('layouts.ad')


<main id="main" class="main" style="margin-top:0px">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card" style="margin-left:25%; margin-right:25%;">
                    <div class="card-body"><br>

                            <h1 class="card-title " style="padding-left:30%">Editar cita </h1>

                    @if (isset($citas))
                        {!! Form::open(array('route' => ['cita.update',$citas->id],'method'=>'PATCH','enctype'=>'multipart/form-data')) !!}
                    @else
                        {!! Form::open(array('route' => 'cita.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                    @endif

                        <!-- Horizontal Form -->

                    <!-- Horizontal Form -->
                        <form>
                            <div class="row mb-4">
                                {!! Form::label('name', 'N. del dueño:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}

                                <div class="col-sm-7">
                                        {!! Form::text('name', $citas->full_name,['class'=>'form-control','value'=>'Read only / Disabled','disabled' ]) !!}
                                    </div>
                            </div>

                            <div class="row mb-3">
                                {!! Form::label('tel', 'Telefono:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('tel',isset($citas)? $citas->tel:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('tel','<small style="color:red">:message</small><br>') !!}
                            </div>

                            <div class="row mb-3">
                                {!! Form::label('mascota', 'N. mascota:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('mascota',isset($citas)? $citas->mascota:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('mascota','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('edad', 'Edad:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('edad',isset($citas)? $citas->edad:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('edad','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('raza', 'Raza:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('raza',isset($citas)? $citas->raza:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('raza','<small style="color:red">:message</small><br>') !!}

                            </div>

                            <div class="row mb-3">
                                {!! Form::label('tratamiento', 'Tratamiento:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('tratamiento',isset($citas)? $citas->tratamiento:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('tratamiento','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('cita', 'Cita:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::date('cita',isset($citas)? $citas->cita:null,array('class'=>'form-control')) !!}
                                </div>
                                {!! $errors->first('cita','<small style="color:red">:message</small><br>') !!}

                            </div>
                            <div class="row mb-3">
                                {!! Form::label('vacunas', 'Vacunas:',['class'=>'col-sm-4 col-form-label'],['for'=>'inputEmail3']) !!}
                                <div class="col-sm-7">
                                    {!! Form::text('vacunas',isset($citas)? $citas->vacunas:null,array('class'=>'form-control')) !!}
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


