<h4 class="sub-title">Datos de oferta</h4>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="oferta">Oferta</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar oferta" id="oferta" name="oferta"
            value="{{ isset($oferta->oferta)? $oferta->oferta : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="tipo">Tipo de oferta</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar tipo de oferta" id="tipo" name="tipo"
            value="{{ isset($oferta->tipo)? $oferta->tipo : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="empresa_id">Empresa de convenio</label>
    <div class="col-sm-6">
        <select class="form-control form-control-round" name="empresa_id" id="empresa_id">
            <option value="">...</option>
            @foreach ($empresas as $empresa)
            <option value="{{ $empresa->id }}" @isset($investigacion->egresado_id)
                @if ($oferta->empresa_id == $empresa->id)
                selected="selected";
                @endif
                @endisset
                >{{ $empresa->razonSocial }} | {{ $empresa->RUC}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="ubicacion">Ubicación</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar ubicación donde se desarrolla la oferta" id="ubicacion" name="ubicacion"
            value="{{ isset($oferta->ubicacion)? $oferta->ubicacion : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="vacantes">Vacantes</label>
    <div class="col-sm-8">
        <input type="number" class="form-control form-control-round" placeholder="Agregar ubicación donde se desarrolla la oferta" id="vacantes" name="vacantes"
            value="{{ isset($oferta->vacantes)? $oferta->vacantes : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="detalle">Detalle</label>
    <div class="col-sm-8">
        <input type="number" class="form-control form-control-round"
            placeholder="Agregar ubicación donde se desarrolla la oferta" id="detalle" name="detalle"
            value="{{ isset($oferta->detalle)? $oferta->detalle : '' }}">
    </div>
</div>

<br>
<input type="submit" class="btn btn-outline-success"></input>
<a class="btn btn-outline-danger" href="javascript:history.back()">Cancelar</a>