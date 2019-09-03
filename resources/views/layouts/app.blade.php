<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Link para GoogleFonts e Iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">

        @include('partials/header')

        @yield('content')

        @include('partials/footer')

    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/func.js"></script>

    <script>
      var btnHamburguesa = document.querySelector('.header_hamburguesa');
      console.log(btnHamburguesa);

      btnHamburguesa.addEventListener('click', function () {
        var botonera = document.querySelector('.menu_lateral_derecha');
        botonera.classList.toggle('show_menu_lateral');
      })
    </script> 

<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d6d4f7d16b81b0012138e5e&product=inline-share-buttons" async="async"></script> {{---> esto va en el head; --}}
<div class="sharethis-inline-share-buttons"></div> {{---> esto se supone que te trae el boton con todos los links para compartir;--}}

</body>
</html>
