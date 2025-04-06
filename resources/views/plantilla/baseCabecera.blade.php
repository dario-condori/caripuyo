<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="{{ route('resumen') }}" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="{{ asset('assets/images/auth/logo-caripuyo-blanco.png') }}" alt="" width="90%" class="logo">
            <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown mega-menu">
                    <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                        Accesos directos
                    </a>
                    <div class="dropdown-menu profile-notification ">
                        <div class="row no-gutters">
                            <div class="col">
                                <h6 class="mega-title">Tipos de cambio</h6>
                                <ul class="pro-body">
                                    <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Dolar </a></li>
                                    <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> UFV's </a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">Formularios</h6>
                                <ul class="pro-body">
                                    <li><a href="{{ route('contribuyente.nuevo') }}" class="dropdown-item"><i class="feather icon-minus"></i> Contribuyentes </a></li>
                                    <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Registro Inmueble </a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">Application</h6>
                                <ul class="pro-body">
                                    <li><a href="#!" class="dropdown-item"><i class="feather icon-mail"></i> Email</a></li>
                                    <li><a href="#!" class="dropdown-item"><i class="feather icon-clipboard"></i> Task</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">Reportes</h6>
                                <ul class="pro-body">
                                    <li><a href="#!" class="dropdown-item"><i class="feather icon-file-plus"></i> Padron contribuyentes </a></li>
                                    <li><a href="#!" class="dropdown-item"><i class="feather icon-file-minus"></i> Recaudación hoy </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="icon feather icon-bell"></i>
                        <span class="badge badge-pill badge-danger">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Notificaciones</h6>
                        </div>
                        <ul class="noti-body">
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="assets/images/user/usuario.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>{{ Auth::user()->name }}</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                        <p>Actualización de vencimiento</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification">
                                <div class="media">
                                    <img class="img-radius" src="assets/images/user/usuario.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <p><strong>Jefe unidad</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                        <p>Registro Artesanos</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="noti-footer">
                            <a href="#!">Mostrar todo</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="assets/images/user/usuario.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Perfil</a></li>
                            <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> Configuración </a></li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-light btn-sm">
                                            <i class="feather icon-log-out m-r-5"></i> Salir
                                        </button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    

</header>