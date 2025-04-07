@extends('plantilla.base')

@section('titulo')
    Administración
@endsection

@section('hojaEstilos')
    
@endsection

@section('contenido')
<section class="pcoded-main-container">
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
                            <li class="breadcrumb-item"><a href="{{ route('contribuyente.listado') }}">Contribuyente</a></li>
                            <li class="breadcrumb-item">Listado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Listado general de contribuyentes</h5>
                        <a href="{{ route('contribuyente.nuevo') }}" class="btn btn-outline-primary btn-sm">
                            <i class="feather mr-2 icon-user"></i>Adicionar contribuyente
                        </a>
                        <span class="d-block m-t-5">Son todos los contribuyentes <code>activos</code> registrados en el sistema</span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nompre completo</th>
                                        <th>Documento</th>
                                        <th>Tipo</th>
                                        <th>Dirección</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contribuyentes as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nombre_completo }}</td>
                                            <td>{{ $item->documento }}</td>
                                            <td>{{ $item->persona_natural_juridica }}</td>
                                            <td>{{ $item->direccion }}</td>
                                            <td>
                                                <form action="{{ route('contribuyente.eliminar', $item) }}" method="POST" style="display: inline" class="form-eliminar-contribuyente">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <input type="hidden" name="id" value="{{ $item->id }}"> --}}
                                                    <button type="submit" class="btn  btn-icon btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Eliminar contribuyente">
                                                        <i class="feather icon-trash"></i>
                                                    </button>
                                                </form>
                                                <a href="{{ route('contribuyente.editar', ['id'=>$item->id]) }}" class="btn  btn-icon btn-outline-info" data-toggle="tooltip" data-placement="top" title="Editar">
                                                    <i class="feather icon-info"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection

 @section('javascripts')
    @if(session('estadoContribuyente'))
        <script>
            Swal.fire({
                title: "Advertencia !!",
                text: "{{session('estadoContribuyente')}}.",
                icon: "success",
                showConfirmButton: true,
                timer: 4500
            });
        </script>
    @endif
    <script>
        $('.form-eliminar-contribuyente').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: "¿ Esta seguro de eliminar el comité ?",
                text: "Los trámites que tienen relación con este comité serán eliminados !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Si, eliminar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    </script>
 @endsection