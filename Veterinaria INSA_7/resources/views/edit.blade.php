@extends('layouts.app')
@section('content')
    <div class="container"> 
        <form class="needs-validation" novalidate method="POST" action="{{action('ProductsController@putEdit', $arrayProducts->id)}}"> <!--method post-->
        {{ method_field('PUT') }}
        {{ @csrf_field() }} <!--nos protegemos de ataques maliciosos-->
        <div class="panel-heading h4 mb-4">Editar Producto</div>
            <div class="row">
                <div class="col-md-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="validationCustom01" placeholder="Producto" value="{{$arrayProducts->nombre}}" required>
                    <div class="valid-feedback">
                        Ok!
                    </div>
                    <div class="invalid-feedback">
                        Ingresa el nombre del producto.
                    </div>
                </div>
                
                <div class="col-md-1">
                    <label for="validationCustom02">Precio</label>
                    <input type="text" name="precio" class="form-control" id="validationCustom02" placeholder="000.00" value="{{$arrayProducts->precio}}" required>
                    <div class="valid-feedback">
                        Ok!
                    </div>
                    <div class="invalid-feedback">
                        Ingresa el precio del producto.
                    </div>
                </div>
                <div class="col-md-1">
                <label for="validationCustom02">Cantidad</label>
                <input type="text" name="cantidad" class="form-control" id="validationCustom02" placeholder="000" value="{{$arrayProducts->cantidad}}" required>
                <div class="valid-feedback">
                        Ok!
                </div>
                <div class="invalid-feedback">
                    Ingresa la cantidad del producto.
                </div>
            </div>
                <div class="col-md-5 mb-3">
                    <label for="validationCustom04">Categoria</label>
                    <select class="custom-select" id="validationCustom04" name= "categoria" value="{{$arrayProducts->categoria}}" required>
                        <option selected disabled value="">[Seleccionar]</option>
                       
                            <option>Modelados</option>  
                            <option>Todos</option>       
                    </select>
                    <div class="invalid-feedback">
                        Selecciona la categoria
                    </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="validationTextarea">Descripción</label>
                    <textarea name="descripcion" class="form-control" id="validationTextarea" placeholder="Descripción del producto" required>{{$arrayProducts->descripcion}}</textarea>
                    <div class="invalid-feedback">
                        Ingresa la descripción del producto.
                    </div>
                </div>
                <div class="col-md-4">
                 <div class="form-group">
                    <label for="validatedCustomFile">Seleccionar</label>
                    <input type="file" name="foto" class="form-control-file" id="validatedCustomFile" value="{{$arrayProducts->foto}}" required>
                    <div class="valid-feedback">
                    Ok!
                    </div>
                        <div class="invalid-feedback">Ingresa una imagen</div>
                </div>
            </div>
            </div>
              <br>
            <button class="btn btn-primary" type="submit">Editar Producto</button>
            <button type="button" class="btn btn-outline-primary" onclick="location.href= '{{ url('products/') }}'">Volver </button>
        </div>  
        <br>
    </form>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
    </script>
</div>
@endsection
