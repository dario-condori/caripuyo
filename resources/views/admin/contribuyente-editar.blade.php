@extends('plantilla.base')

@section('titulo')
    Administración
@endsection

@section('hojaEstilos')
    
@endsection

@section('contenido')
<section class="pcoded-main-container">
    <div class="pcoded-content">
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
                            <li class="breadcrumb-item">Editar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edición del Contribuyente</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contribuyente.actualizar', $contribuyente) }}" class="needs-validation form-editar-contribuyente" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="nombres">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="{{ old('nombres', $contribuyente->nombres) }}" required>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Ingrese el nombre</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos', $contribuyente->apellidos) }}" required>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Ingrese apellido(s)</div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="tipo_persona_id">Tipo de persona</label>
                                    <select class="form-control" id="tipo_persona_id" name="tipo_persona_id" required>
                                        <option value="">...Seleccione...</option>
                                        @foreach ($tipoPersona as $item)
                                            @if( old('tipo_persona_id', $contribuyente->tipo_persona_id) == $item->id)
                                                <option value="{{$item->id}}" selected>{{ $item->nombre_tipo_persona}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{ $item->nombre_tipo_persona}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Debe seleccionar un tipo</div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="genero">Género</label>
                                    <select class="form-control" id="genero" name="genero" required>
                                        <option value="">...Seleccione...</option>
                                        @if( old('genero', $contribuyente->genero) == 'M')
                                            <option value="M" selected>Masculino</option>
                                            <option value="F">Femenina</option>
                                        @else
                                            <option value="M">Masculino</option>
                                            <option value="F" selected>Femenina</option>
                                        @endif
                                    </select>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Debe seleccionar un género</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="tipo_documento_id">Tipo de documento</label>
                                    <select class="form-control" id="tipo_documento_id" name="tipo_documento_id" required>
                                        <option value="">...Seleccione...</option>
                                        @foreach ($tipoDocumento as $item)
                                            @if( old('tipo_documento_id', $contribuyente->tipo_documento_id) == $item->id)
                                                <option value="{{$item->id}}" selected>{{ $item->sigla_tipo_documento}} - {{ $item->nombre_tipo_documento}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{ $item->sigla_tipo_documento}} - {{ $item->nombre_tipo_documento}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Debe seleccionar un documento</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="numero_documento">Número de documento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">#</span>
                                        </div>
                                        <input type="text" class="form-control" id="numero_documento" name="numero_documento" placeholder="Número documento" value="{{ old('numero_documento', $contribuyente->numero_documento) }}" aria-describedby="inputGroupPrepend" required>
                                        <div class="valid-feedback">Válido !!</div>
                                        <div class="invalid-feedback">Ingrese el número de documento</div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lugar_expedido_id">Lugar de expedido</label>
                                    <select class="form-control" id="lugar_expedido_id" name="lugar_expedido_id" required>
                                        <option value="">...Seleccione...</option>
                                        @foreach ($lugarExpedido as $item)
                                            @if( old('lugar_expedido_id', $contribuyente->lugar_expedido_id) == $item->id)
                                                <option value="{{$item->id}}" selected>{{ $item->sigla_lugar_expedido}} - {{ $item->nombre_lugar_expedido}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{ $item->sigla_lugar_expedido}} - {{ $item->nombre_lugar_expedido}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Debe seleccionar un lugar</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="urbanizacion">Urbanización</label>
                                    <input type="text" class="form-control" id="urbanizacion" name="urbanizacion" value="{{ old('urbanizacion', $contribuyente->urbanizacion) }}" placeholder="Urbanización" required>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Ingrese el nombre de urbanización</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zona">Zona / Barrio</label>
                                    <input type="text" class="form-control" id="zona" name="zona" value="{{ old('zona', $contribuyente->zona) }}" placeholder="Zona" required>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Ingrese el nombre de zona o barrio</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="comunidad">Comunidad</label>
                                    <input type="text" class="form-control" id="comunidad" name="comunidad" value="{{ old('comunidad', $contribuyente->comunidad) }}" placeholder="Comunidad">
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Ingrese la comunidad si corresponde</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="manzano">Manzano</label>
                                    <input type="text" class="form-control" id="manzano" name="manzano" value="{{ old('manzano', $contribuyente->manzano) }}"" placeholder="Manzano" required>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Ingrese el nombre del manzano</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="avenida_calle">Dirección avenida/calle y Número</label>
                                    <input type="text" class="form-control" id="avenida_calle" name="avenida_calle" value="{{ old('avenida_calle', $contribuyente->avenida_calle) }}" placeholder="Avenida o calle" required>
                                    <div class="valid-feedback">Válido !!</div>
                                    <div class="invalid-feedback">Ingrese la dirección avenida o calle y número</div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Actualizar contribuyente</button>
                        </form>
                        <script>
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
    </div>
</section>
@endsection

 @section('javascripts')
 <script>
    $('.form-editar-contribuyente').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: "¿ Esta seguro de actualizar ?",
            text: "Los datos del contribuyente serán actualizados con datos actuales !",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#4cb20d",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Si, actualizar",
            cancelButtonText: "Cancelar"
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });
</script>
 @endsection