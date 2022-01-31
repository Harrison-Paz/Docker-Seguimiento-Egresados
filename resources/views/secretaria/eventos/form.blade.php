<h4 class="sub-title">Datos de capacitación</h4>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="titulo">Capacitación</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar capacitación" id="titulo" name="titulo"
            value="{{ isset($evento->titulo)? $evento->titulo : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="organizacion">Organización</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar organización" id="organizacion" name="organizacion"
            value="{{ isset($evento->organizacion)? $evento->organizacion : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="fechaInscripcion">Apertura du Inscripciones</label>
    <div class="col-sm-8">
        <input type="date" class="form-control form-control-round" placeholder="Agregar inicio de la Inscripciones" id="fechaInscripcion" name="fechaInscripcion"
            value="{{ isset($evento->fechaInscripcion)? $evento->fechaInscripcion : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="fechaEvento">Fecha de evento</label>
    <div class="col-sm-8">
        <input type="date" class="form-control form-control-round" placeholder="Agregar fecha de la capacitación " id="fechaEvento" name="fechaEvento"
            value="{{ isset($evento->fechaEvento)? $evento->fechaEvento : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="horasAcademicas">Horas académica</label>
    <div class="col-sm-8">
        <input type="number" class="form-control form-control-round" placeholder="Agregar horas totales empleadas" id="horasAcademicas" name="horasAcademicas"
            value="{{ isset($evento->horasAcademicas)? $evento->horasAcademicas : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="direccion">Ubicación</label>
    <div class="col-sm-8">
        <input type="text" class="form-control form-control-round" placeholder="Agregar ubicación donde se desarrolla la capacitación" id="direccion" name="direccion"
            value="{{ isset($evento->direccion)? $evento->direccion : '' }}">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="detalle">Detalle</label>
    <div class="col-sm-8">
        <textarea type="textarea" rows="3" class="form-control form-control-round"
            placeholder="Agregar detalle del evento" id="detalle" name="detalle"
            value="{{ isset($evento->detalle)? $evento->detalle : '' }}">{{ isset($evento->detalle)? $evento->detalle : '' }} </textarea>
    </div>
</div>

<br>
<input type="submit" class="btn btn-outline-success"></input>
<a class="btn btn-outline-danger" href="javascript:history.back()">Cancelar</a>