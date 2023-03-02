
@extends('layouts.app')

 @section('title', 'Contáctanos')

 @section('content')

     @guest
<div class="contacto" style="padding-top:4%; padding-bottom:8%;">
    <h1 style="text-align:center">Comunicate y te contactaremos lo antes posible</h1>
    <div class="row">
        <div class="col-md-6" style="text-align:right" >
            <br>
            <h2>Comunícate con nosotros</h2>
            <br>
            <div class="row">
                <div class="col-md-10" style="text-align:right">
                    <h4> Cuitláhuac - La Tinaja</h4>
                </div>
                <div class="col-md-2" style="text-align:right">
                    <div class="fa-stack fa-2x">
                      <em class="fa fa-circle fa-stack-2x" style="color: #1CBAA4"></em>
                      <em class="fa fa-stack-1x fa-map-marker" style="color: #256D7B"></em>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-10" style="text-align:right">
                    <h4>
                        <a href="mailto:kalfteamti@gmail.com" aria-label="correo electrónico kalfteamti@gmail.com" style="color:#256D7B;" title="Envío de correo" target="_blank">rafaelluncarv@gmail.com
                        </a>
                    </h4>
                </div>
                <div class="col-md-2" style="text-align:right">
                    <span class="fa-stack fa-2x">
                    <em class="fa fa-circle fa-stack-2x" style="color: #1CBAA4"></em>
                    <em class="fa fa-stack-1x fa-envelope" style="color: #256D7B"></em>
                    </span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-10" style="text-align:right">
                    <h4><span> + 271-710-4235 </span><br>
                        <span> + 271-113-0384</span>
                    </h4>
                </div>
                <div class="col-md-2" style="text-align:right">
                     <span class="fa-stack fa-2x">
                      <em class="fa fa-circle fa-stack-2x" style="color: #1CBAA4"></em>
                      <em class="fa fa-stack-1x fa-phone" style="color: #256D7B"></em>
                     </span>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h2>Mándanos un mensaje</h2>
            <div class="container">
                <form class="needs-validation" method="post" action="{{url('send')}}"><!--method post-->
                    {{ @csrf_field() }} <!--nos protegemos de ataques maliciosos-->
                    <div class="form-row">
                        <div class="col-md-10">
                            <label for="validationCustom01">Nombre</label>
                            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nombre" required>
                            <div class="valid-feedback">
                                Ok!
                            </div>
                            <div class="invalid-feedback">
                                Ingresa tu nombre.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-10">
                            <label for="mail">Correo electrónico</label>
                            <input id="email" type="email" name="mail" class="form-control"  placeholder="Ingrese su correo " required>
                            <div class="valid-feedback">
                                Ok!
                            </div>
                            <div class="invalid-feedback">
                                Ingresa tu correo electrónico
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-10">
                            <label for="validationTextarea">Mensaje</label>
                            <textarea name="message" class="form-control" id="validationTextarea" placeholder="Mensaje" required></textarea>
                            <div class="invalid-feedback">
                                Escribe el mensaje
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" name="send" type="submit">Enviar</button>

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
          </div>

        </div>
        </div>
     @else
         <div class="contacto" style="padding-top:4%; padding-bottom:8%;">
             <h1 style="text-align:center">Comunicate y te contactaremos lo antes posible</h1>
             <div class="row">
                 <div class="col-md-6" style="text-align:right" >
                     <br>
                     <h2>Comunícate con nosotros</h2>
                     <br>
                     <div class="row">
                         <div class="col-md-10" style="text-align:right">
                             <h4> Cuitláhuac - La Tinaja</h4>
                         </div>
                         <div class="col-md-2" style="text-align:right">
                             <div class="fa-stack fa-2x">
                                 <em class="fa fa-circle fa-stack-2x" style="color: #1CBAA4"></em>
                                 <em class="fa fa-stack-1x fa-map-marker" style="color: #256D7B"></em>
                             </div>
                         </div>
                     </div>
                     <br>
                     <div class="row">
                         <div class="col-md-10" style="text-align:right">
                             <h4>
                                 <a href="mailto:kalfteamti@gmail.com" aria-label="correo electrónico kalfteamti@gmail.com" style="color:#256D7B;" title="Envío de correo" target="_blank">rafaelluncarv@gmail.com
                                 </a>
                             </h4>
                         </div>
                         <div class="col-md-2" style="text-align:right">
                    <span class="fa-stack fa-2x">
                    <em class="fa fa-circle fa-stack-2x" style="color: #1CBAA4"></em>
                    <em class="fa fa-stack-1x fa-envelope" style="color: #256D7B"></em>
                    </span>
                         </div>
                     </div>
                     <br>
                     <div class="row">
                         <div class="col-md-10" style="text-align:right">
                             <h4><span> + 271-710-4235 </span><br>
                                 <span> + 271-113-0384</span>
                             </h4>
                         </div>
                         <div class="col-md-2" style="text-align:right">
                     <span class="fa-stack fa-2x">
                      <em class="fa fa-circle fa-stack-2x" style="color: #1CBAA4"></em>
                      <em class="fa fa-stack-1x fa-phone" style="color: #256D7B"></em>
                     </span>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-6">
                     <h2>Mándanos un mensaje</h2>
                     <div class="container">
                         <form class="needs-validation" method="post" action="{{url('send')}}"><!--method post-->
                         {{ @csrf_field() }} <!--nos protegemos de ataques maliciosos-->
                             <div class="form-row">
                                 <div class="col-md-10">
                                     <label for="validationCustom01">Nombre</label>
                                     <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nombre" required>
                                     <div class="valid-feedback">
                                         Ok!
                                     </div>
                                     <div class="invalid-feedback">
                                         Ingresa tu nombre.
                                     </div>
                                 </div>
                             </div>

                             <div class="form-row">
                                 <div class="col-md-10">
                                     <label for="mail">Correo electrónico</label>
                                     <input id="email" type="email" name="mail" class="form-control" placeholder="Ingrese su correo " value="{{ Auth::user()->email }}" required>
                                     <div class="valid-feedback">
                                         Ok!
                                     </div>
                                     <div class="invalid-feedback">
                                         Ingresa tu correo electrónico
                                     </div>
                                 </div>
                             </div>


                             <div class="form-row">
                                 <div class="col-md-10">
                                     <label for="validationTextarea">Mensaje</label>
                                     <textarea name="message" class="form-control" id="validationTextarea" placeholder="Mensaje" required></textarea>
                                     <div class="invalid-feedback">
                                         Escribe el mensaje
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <button class="btn btn-primary" name="send" type="submit">Enviar</button>

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
                 </div>

             </div>
         </div>
     @endguest

 @endsection
