<h4 class="sub-title">Datos de Egresado</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="egresado_id">Egresado</label>
    <div class="col-sm-6">
        <select class="form-control form-control-round" name="egresado_id" id="egresado_id">
            <option value="">...</option>
            @foreach ($egresados as $egresado)

            <option value="{{ $egresado->id }}"
                @isset($reconocimiento->egresado_id)
                    @if ($reconocimiento->egresado_id == $egresado->id)
                        selected = "selected"
                    @endif
                @endisset
                >{{ $egresado->user->nombre }} {{ $egresado->user->apellido }}</option>
                
            @endforeach
        </select>
    </div>
</div>
<br>
<h4 class="sub-title">Datos del Reconocimiento</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="tipo">Tipo</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Tipo de reconocimiento" name="tipo" id="tipo" value="{{ isset($reconocimiento->tipo)? $reconocimiento->tipo : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="area">Área</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Área del reconocimiento" id="area" name="area" value="{{ isset($reconocimiento->area)? $reconocimiento->area : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="institucion">Institución</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Institución que otorga el reconocimiento" id="institucion" name="institucion" value="{{ isset($reconocimiento->institucion)? $reconocimiento->institucion : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="representante">Representante</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Representante de la institución" id="representante" name="representante" value="{{ isset($reconocimiento->representante)? $reconocimiento->representante : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="direccion">Dirección</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Dirección" id="direccion" name="direccion" value="{{ isset($reconocimiento->direccion)? $reconocimiento->direccion : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="fecha">Fecha</label>
    <div class="col-sm-8">
        <input type="date" class="form-control form-control-round" placeholder="Fecha de Publicación" id="fecha" name="fecha" value="{{ isset($reconocimiento->fecha)? $reconocimiento->fecha : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="detalle">Detalle</label>
    <div class="col-sm-5">
        <textarea type="text" class="form-control form-control-round" placeholder="Detalle el reconocimiento" id="detalle" name="detalle" value="{{ isset($reconocimiento->detalle)? $reconocimiento->detalle : '' }}">{{ isset($reconocimiento->detalle)? $reconocimiento->detalle : '' }}</textarea>
    </div>
</div>
<br>
<input type="submit" class="btn btn-outline-success"></input>
<a class="btn btn-outline-danger" href="javascript:history.back()">Cancelar</a>