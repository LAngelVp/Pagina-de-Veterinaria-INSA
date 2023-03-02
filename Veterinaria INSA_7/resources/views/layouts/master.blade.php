<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gari</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <style>
            @media (min-width: 768px) {
            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
            }
            </style>
    </head>
    <body>
    @yield('content')
    @yield('scripts')
    </body>
</html>