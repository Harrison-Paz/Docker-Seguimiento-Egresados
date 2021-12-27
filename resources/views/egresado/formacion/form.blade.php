<h4 class="sub-title">Datos de la formación</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="egresado_id">Usuario</label>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-round" name="egresado_id" id="egresado_id" value="{{ auth()->user()->egresado->id }}" readonly>
    </div>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" name="" id="" value="{{ auth()->user()->nombre }} {{ auth()->user()->apellido }}" readonly>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nombre">Formación</label>
    <div class="col-sm-9">
        <input type="text" class="form-control form-control-round" placeholder="Nombre e titulo de la formación"  name="nombre" id="nombre" value="{{ isset($formacion->nombre)? $formacion->nombre : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="empresa">Empresa</label>
    <div class="col-sm-9">
        <input type="text" class="form-control form-control-round" placeholder="Empresa que brinda la formación"  name="empresa" id="empresa" value="{{ isset($formacion->empresa)? $formacion->empresa : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="direccion">Dirección</label>
    <div class="col-sm-9">
        <input type="text" class="form-control form-control-round" placeholder="Dirección referencial de la formación"  name="direccion" id="direccion" value="{{ isset($formacion->direccion)? $formacion->direccion : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="representante">Representante</label>
    <div class="col-sm-9">
        <input type="text" class="form-control form-control-round" placeholder="Representante de la formación"  name="representante" id="representante" value="{{ isset($formacion->representante)? $formacion->representante : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="totalHoras">Horas formativas</label>
    <div class="col-sm-9">
        <input type="text" class="form-control form-control-round" placeholder="Total de horas formativas"  name="totalHoras" id="totalHoras" value="{{ isset($formacion->totalHoras)? $formacion->totalHoras : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="observacion">Observaciones</label>
    <div class="col-sm-9">
        <textarea type="text" class="form-control form-control-round" placeholder="Agregar observaciones(se pueden omitir)"  name="observacion" id="observacion" value="{{ isset($formacion->observacion)? $formacion->observacion : '' }}"></textarea>
    </div>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" name="isCertificado" id="isCertificado"
    @isset($formacion -> isCertificado)
    @if ($formacion -> isCertificado == true)
    checked
    @endif
    @endisset
    >
    <label class="form-check-label" for="isCertificado">Con Certificado</label>
</div>
<br><br>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="imagen">Foto</label>
    @if (isset($formacion->imagen))
    <img src="{{ asset('storage').'/'.$formacion->imagen }}" alt="" width="200">
    @endif
    <div class="col-sm-6">
        <input type="file" name="imagen" id="imagen"
            value="{{ isset($formacion->imagen)? $formacion->imagen : '' }}">
    </div>
</div>
<br>
<input type="submit" class="btn btn-outline-success"></input>
<a class="btn btn-outline-danger" href="javascript:history.back()">Cancelar</a>