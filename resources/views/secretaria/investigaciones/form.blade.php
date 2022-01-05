<h4 class="sub-title">Datos de Egresado</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="egresado_id">Egresado</label>
    <div class="col-sm-6">
        <select class="form-control form-control-round" name="egresado_id" id="egresado_id">
            <option value="">...</option>
            @foreach ($egresados as $egresado)
            <option value="{{ $egresado->id }}"
                @isset($investigacion->egresado_id)
                    @if ($investigacion->egresado_id == $egresado->id)
                        selected="selected";
                    @endif                    
                @endisset
                >{{ $egresado->user->nombre }} {{ $egresado->user->apellido }}</option>                
            @endforeach
        </select>
    </div>
</div>
<br>
<h4 class="sub-title">Datos de Investigación</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="tema">Tema</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar Tema" id="tema" name="tema" value="{{ isset($investigacion->tema )? $investigacion->tema : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="area">Área de Investigación</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar Área" id="area" name="area" value="{{ isset($investigacion->area )? $investigacion->area : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="fecha">Fecha</label>
    <div class="col-sm-8">
        <input type="date" class="form-control form-control-round" placeholder="Fecha de Publicación" id="fecha" name="fecha" value="{{ isset($investigacion->fecha )? $investigacion->fecha : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="documento">Adjuntar</label>
    <div class="col-sm-8">
        <input type="file" class="form-control form-control-round form-control-file" placeholder="Archivo" id="documento" name="documento" value="{{ isset($investigacion->documento )? $investigacion->documento : '' }}">
    </div>
</div>
<br>
<input type="submit" class="btn btn-outline-success"></input>
<a class="btn btn-outline-danger" href="javascript:history.back()">Cancelar</a>