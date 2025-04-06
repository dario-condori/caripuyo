<!DOCTYPE html>
<html lang="en">

<head>
    <title>Caripuyo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="">
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/usuario.jpg" alt="User">
						<div class="user-details">
							<div id="more-details"> 
                                @auth
                                    <a href="{{ route('login') }}"> Resumen </a>
                                @else
                                    <a href="{{ route('login') }}"> Ingresar </a>
                                @endauth
                            </div>
						</div>
					</div>
				</div>
				<div class="card text-center">
					<div class="card-block">
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Ingrese al sistema</h6>
						<p>Acceda al sistema con su cuenta de usuario y contraseña</p>
						<a href="#" class="btn btn-primary btn-sm text-white m-0">Manual de usuario</a>{{--target="_blank" --}}
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="/" class="b-brand"> CARIPUYO
                {{-- <img src="assets/images/logo.png" alt="" class="logo">
                <img src="assets/images/logo-icon.png" alt="" class="logo-thumb"> --}}
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        @auth
                            <a href="{{ route('login') }}"> Resumen </a>
                        @else
                            <a href="{{ route('login') }}" class="dropdown-toggle">
                                <i class="feather icon-user"></i> Ingresar
                            </a>
                        @endauth
                        
                    </div>
                </li>
            </ul>
        </div>
	</header>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Sistema de recaudación de impuestos</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Muncipio: Caripuyo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-3">-</div>
                <div class="col-md-12 col-xl-6">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-12 text-md-center">
                                        <h5>-</h5>
                                        <span>Gestión de IPBI</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-12 text-md-center">
                                        <h5>-</h5>
                                        <span>Bienes Inmuebles</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-12 text-md-center">
                                        <h5>-</h5>
                                        <span>Registro de contribuyentes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-12 text-md-center">
                                        <h5>-</h5>
                                        <span>Geestión de usuarios</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Sugerencia</h4>
                                <h6>Revise el manual de usuario</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <!-- Latest Customers end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

    <script src="assets/js/plugins/apexcharts.min.js"></script>

    <script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
