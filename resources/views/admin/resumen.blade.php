@extends('plantilla.base')

@section('titulo')
    Administración
@endsection

@section('hojaEstilos')
    
@endsection

@section('contenido')
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Municipio: Caripuyo</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('resumen') }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item">Estado actual</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- table card-1 start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="icon feather icon-user text-c-green mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-9 text-md-center">
                                        <h5>164</h5>
                                        <span>Contribuyentes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="icon feather icon-layers text-c-red mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-9 text-md-center">
                                        <h5>120</h5>
                                        <span>Inmuebles</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-9 text-md-center">
                                        <h5>20</h5>
                                        <span>Certificados</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-9 text-md-center">
                                        <h5>15</h5>
                                        <span>En trámite</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card start -->
                    <div class="card flat-card widget-primary-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="feather icon-star-on"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>4 certificados</h4>
                                <h6>Entregados hoy</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card end -->
                </div>
                <!-- table card-1 end -->
                <!-- table card-2 start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="icon feather icon-check text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-10 text-md-center">
                                        <h5>Bs. 400</h5>
                                        <span>Recaudación hoy</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="icon feather icon-wifi text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-10 text-md-center">
                                        <h5>Bs. 800</h5>
                                        <span>Recaudación mes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="icon feather icon-rotate-ccw text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-10 text-md-center">
                                        <h5>Bs. 3.550,20</h5>
                                        <span>Acumulado</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <i class="icon feather icon-shopping-cart text-c-blue mb-1 d-blockz"></i>
                                    </div>
                                    <div class="col-sm-10 text-md-center">
                                        <h5>Bs. 18,500.00</h5>
                                        <span>Gestión pasada</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>17 Certificados</h4>
                                <h6>En mes de Abril</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <!-- table card-2 end -->
                <!-- Widget primary-success card start -->
                {{-- <div class="col-md-12 col-xl-4">
                    <div class="card support-bar overflow-hidden">
                        <div class="card-body pb-0">
                            <h2 class="m-0">350</h2>
                            <span class="text-c-blue">Support Requests</span>
                            <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                        </div>
                        <div id="support-chart"></div>
                        <div class="card-footer bg-primary text-white">
                            <div class="row text-center">
                                <div class="col">
                                    <h4 class="m-0 text-white">10</h4>
                                    <span>Open</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">5</h4>
                                    <span>Running</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">3</h4>
                                    <span>Solved</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Widget primary-success card end -->

                <!-- prject ,team member start -->
                {{-- <div class="col-xl-6 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Projects</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                Assigned
                                            </th>
                                            <th>Name</th>
                                            <th>Due Date</th>
                                            <th class="text-right">Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>John Deo</h6>
                                                        <p class="text-muted m-b-0">Graphics Designer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Able Pro</td>
                                            <td>Jun, 26</td>
                                            <td class="text-right"><label class="badge badge-light-danger">Low</label></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>Jenifer Vintage</h6>
                                                        <p class="text-muted m-b-0">Web Designer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Mashable</td>
                                            <td>March, 31</td>
                                            <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>William Jem</h6>
                                                        <p class="text-muted m-b-0">Developer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Flatable</td>
                                            <td>Aug, 02</td>
                                            <td class="text-right"><label class="badge badge-light-success">medium</label></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>David Jones</h6>
                                                        <p class="text-muted m-b-0">Developer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Guruable</td>
                                            <td>Sep, 22</td>
                                            <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-6 col-md-12">
                    <div class="card latest-update-card">
                        <div class="card-header">
                            <h5>Latest Updates</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="latest-update-box">
                                <div class="row p-t-30 p-b-30">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">2 hrs ago</p>
                                        <i class="feather icon-twitter bg-twitter update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>+ 1652 Followers</h6>
                                        </a>
                                        <p class="text-muted m-b-0">You’re getting more and more followers, keep it up!</p>
                                    </div>
                                </div>
                                <div class="row p-b-30">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">4 hrs ago</p>
                                        <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>+ 5 New Products were added!</h6>
                                        </a>
                                        <p class="text-muted m-b-0">Congratulations!</p>
                                    </div>
                                </div>
                                <div class="row p-b-0">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">2 day ago</p>
                                        <i class="feather icon-facebook bg-facebook update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6>+1 Friend Requests</h6>
                                        </a>
                                        <p class="text-muted m-b-10">This is great, keep it up!</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tr>
                                                    <td class="b-none">
                                                        <a href="#!" class="align-middle">
                                                            <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6>Jeny William</h6>
                                                                <p class="text-muted m-b-0">Graphic Designer</p>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- prject ,team member start -->
                <!-- seo start -->
                {{-- <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>$16,756</h3>
                                    <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart1" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>49.54%</h3>
                                    <h6 class="text-muted m-b-0">Bounce Rate<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart2" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>1,62,564</h3>
                                    <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart3" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- seo end -->

                <!-- Latest Customers end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection

 @section('javascripts')
    
 @endsection