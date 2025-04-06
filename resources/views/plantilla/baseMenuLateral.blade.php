<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{ asset('assets/images/user/usuario.jpg') }}" alt="User-Profile-Image">
                    <div class="user-details">
                        <span>{{ Auth::user()->name }}</span>
                        <div>Contador</div>
                    </div>
                </div>
            </div>
            
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>IPBI</label>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Datos tributarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-layout"></i>
                        </span>
                        <span class="pcoded-mtext">Datos Administrativos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-credit-card"></i>
                        </span>
                        <span class="pcoded-mtext">Cajas</span>
                    </a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Reportes</label>
                </li>
                <li class="nav-item">
                    <a href="chart-apex.html" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                        <span class="pcoded-mtext">Estadísticas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="map-google.html" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Reporte 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="map-google.html" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="pcoded-mtext">Reporte 2</span>
                    </a>
                </li>
                
                <li class="nav-item pcoded-menu-caption">
                    <label>Administración</label>
                </li>
                <li class="nav-item">
                    <a href="form_elements.html" class="nav-link ">
                        <span class="pcoded-micon"><i class="fas fa-user"></i></span>
                        <span class="pcoded-mtext">Usuarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tbl_bootstrap.html" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-align-justify"></i></span>
                        <span class="pcoded-mtext">Roles</span>
                    </a>
                </li>
            </ul>
            
            <div class="card text-center">
                <div class="card-block">
                    <h6 class="mt-3">Manuales</h6>
                    <a href="#" class="btn btn-primary btn-sm text-white mb-2 pb-0">Usuario</a>
                    
                    <a href="#" class="btn btn-primary btn-sm text-white m-0">Configuración</a>
                </div>
            </div>
            
        </div>
    </div>
</nav>