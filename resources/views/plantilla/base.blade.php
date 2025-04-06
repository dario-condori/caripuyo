<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('titulo', 'Caripuyo')</title>
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="IPBI" />
    <meta name="keywords" content="Caripuyo, ipbi, municipio">
    <meta name="author" content="Caripuyo" />
    <link rel="icon" href="{{asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
    
    @yield('hojaEstilos')
</head>
<body class="">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- menu lateral -->
    @include('plantilla.baseMenuLateral')

    <!-- Barra superior -->
    @include('plantilla.baseCabecera')
    
    <!-- Contenido -->
    @yield('contenido')

    <!-- Js -->
    <script src="{{asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{asset('assets/js/plugins/apexcharts.min.js') }}"></script>
    <!-- custom-chart js -->
    <script src="{{asset('assets/js/pages/dashboard-main.js') }}"></script>

    @yield('javascripts')
</body>
</html>
