@extends('layout')

@section('content')
<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h5>Lista de capacitaciones</h5> 
        <a class="btn btn-outline-info" href="javascript:history.back()">Regresar</a>       
        <span>Detalle de capacitación</span>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                <li><i class="fa fa-window-maximize full-card"></i></li>
                <li><i class="fa fa-minus minimize-card"></i></li>
                <li><i class="fa fa-refresh reload-card"></i></li>
                <li><i class="fa fa-trash close-card"></i></li>
            </ul>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-3"></div>
        <h1>{{ $evento->titulo }}</h1>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-1"></div>
        <label class="col-sm-2 col-form-label" for="organizacion">Organización</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-round" placeholder="Agregar organización" id="organizacion" disabled
                name="organizacion" value="{{ isset($evento->organizacion)? $evento->organizacion : '' }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-1"></div>
        <label class="col-sm-2 col-form-label" for="organizacion">Apertura du Inscripciones</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-round" placeholder="Agregar organización" id="organizacion"
                disabled name="organizacion" value="{{ isset($evento->fechaInscripcion)? $evento->fechaInscripcion : '' }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-1"></div>
        <label class="col-sm-2 col-form-label" for="organizacion">Fecha del evento</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-round" placeholder="Agregar organización" id="organizacion"
                disabled name="organizacion" value="{{ isset($evento->fechaEvento)? $evento->fechaEvento : '' }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-1"></div>
        <label class="col-sm-2 col-form-label" for="organizacion">Horas académicas totales</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-round" placeholder="Agregar organización" id="organizacion"
                disabled name="organizacion" value="{{ isset($evento->horasAcademicas)? $evento->horasAcademicas : '' }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-1"></div>
        <label class="col-sm-2 col-form-label" for="organizacion">Lugar del evento</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-round" placeholder="Agregar organización" id="organizacion"
                disabled name="organizacion" value="{{ isset($evento->direccion)? $evento->direccion : '' }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-1"></div>
        <label class="col-sm-2 col-form-label" for="organizacion">Acerca del evento</label>
        <div class="col-sm-8">
            <textarea type="text" class="form-control form-control-round" placeholder="Agregar organización" id="organizacion"
                disabled name="organizacion" value="{{ isset($evento->detalle)? $evento->detalle : '' }}">{{ $evento->detalle }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2">
            <a class="btn btn-outline-info" href="javascript:history.back()">Atrás</a>
        </div>
    </div>
    <br>
</div>
<!-- Hover table card end -->
@endsection