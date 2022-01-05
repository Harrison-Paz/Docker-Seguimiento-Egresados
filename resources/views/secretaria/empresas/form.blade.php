<h4 class="sub-title">Datos de convenio</h4>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="razonSocial">Razón social</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar razón social" id="razonSocial" name="razonSocial"
            value="{{ isset($empresa->razonSocial)? $empresa->razonSocial : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="RUC">RUC</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar RUC" id="RUC" name="RUC"
            value="{{ isset($empresa->RUC)? $empresa->RUC : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="direccion">Dirección</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar dirección" id="direccion" name="direccion"
            value="{{ isset($empresa->direccion)? $empresa->direccion : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="ubicacion">Ubicación</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar ubicación" id="ubicacion" name="ubicacion"
            value="{{ isset($empresa->ubicacion)? $empresa->ubicacion : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="telefono">Telefono</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar telefono" id="telefono" name="telefono"
            value="{{ isset($empresa->telefono)? $empresa->telefono : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="fecha">Fecha</label>
    <div class="col-sm-8">
        <input type="date" class="form-control form-control-round" placeholder="Agregar fecha" id="fecha" name="fecha"
            value="{{ isset($empresa->fecha)? $empresa->fecha : '' }}">
    </div>
</div>

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" name="isActivo" id="isActivo"
        @isset($empresa->isActivo)
    @if ($empresa -> isActivo == true)
    checked
    @endif
    @endisset
    >
    <label class="form-check-label" for="flexSwitchCheckDefault">Actividad</label>
</div>


<br>
<input type="submit" class="btn btn-outline-success"></input>
<a class="btn btn-outline-danger" href="javascript:history.back()">Cancelar</a>