<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style src="{{ asset('css/styile.css') }}"></style>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Scripts -->    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    @include('navbar.navbar')       
    @if (isset($success))
            <div class="row justify-content-end">
                <div class="col-8 " >
                    <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    {{$success}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                </div>
            </div>
            @endif
    @yield('scripts')
    
    <style src="{{ asset('css/styile.css') }}"></style>
    <!-- Scripts -->
    @if(session('success')) 
                <div class="row justify-content-end">
                    <div class="col-3 " >
                        <div class="alert alert-success fade show">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif


            <!-- @if ($message = Session::get('success'))
                <p>{!! $message !!}</p>
                <?php Session::forget('success');?>
            @endif
            @if ($message = Session::get('error'))
                <p>{!! $message !!}</p>
                    <?php Session::forget('error');?>
            @endif -->

    @yield('content')
</div>

      <script src="{{ asset('js/app.js') }}"></script>
</body>
@include('footer.footer') 
</html>
