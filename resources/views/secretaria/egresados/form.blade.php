<h4 class="sub-title">Datos Personales</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="DNI" >DNI</label>
    <div class="col-sm-10">
        <input type="text" class="form-control form-control-round" placeholder="Ingrese DNI" name="DNI" id="DNI" value="{{ isset($egresado -> DNI)? $egresado -> DNI : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nombre" >Nombres</label>
    <div class="col-sm-10">
        <input type="text" class="form-control form-control-round" placeholder="Nombres completos" name="nombre" id="nombre" value="{{ isset($egresado -> user -> nombre)? $egresado -> user -> nombre : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="apellido" >Apellidos</label>
    <div class="col-sm-10">
        <input type="text" class="form-control form-control-round" placeholder="Apellidos paterno y materno" name="apellido" id="apellido" value="{{ isset($egresado -> user -> apellido)? $egresado -> user -> apellido : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="direccion" >Dirección</label>
    <div class="col-sm-10">
        <input type="text" class="form-control form-control-round" placeholder="Dirección actual" name="direccion" id="direccion" value="{{ isset($egresado -> direccion)? $egresado -> direccion : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="celular" >Celular</label>
    <div class="col-sm-10">
        <input type="text" class="form-control form-control-round" placeholder="Dirección actual" name="celular" id="celular" value="{{ isset($egresado -> celular)? $egresado -> celular : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="email">Email</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-round" name="email" id="email" placeholder="Email"
            value="{{ isset($egresado -> user -> email)? $egresado -> user -> email : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="password">Password</label>
    <div class="col-sm-6">
        <input type="password" class="form-control form-control-round" name="password" id="password"
            placeholder="Password" value="{{ isset($egresado -> user -> password)? $egresado -> user -> password : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="foto">Foto</label>
    @if (isset($egresado-> user -> foto))
    <img src="{{ asset('storage').'/'.$egresado-> user -> foto }}" alt="" width="100">
    @endif
    <div class="col-sm-6">
        <input type="file" name="foto" id="foto" value="{{ isset($egresado-> user -> foto)? $egresado-> user -> foto : '' }}">
    </div>
</div>
<br>
<h4 class="sub-title">Datos de Egreso</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Carrera</label>
    <div class="col-sm-10">
        <input type="text" class="form-control form-control-round" value="Ingenieria de Sistemas" readonly>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="fechaEgreso" >Año de egreso</label>
    <div class="col-sm-10">
        <input type="date" class="form-control form-control-round" placeholder="fecha de egreso" name="fechaEgreso" id="fechaEgreso" value="{{ isset($egresado -> fechaEgreso)? $egresado -> fechaEgreso : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="numPromocion" >Numero de Promoción</label>
    <div class="col-sm-10">
        <input type="number" class="form-control form-control-round" placeholder="# Promoción" name="numPromocion" id="numPromocion" value="{{ isset($egresado -> numPromocion)? $egresado -> numPromocion : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="puesto" >Puesto</label>
    <div class="col-sm-10">
        <input type="number" class="form-control form-control-round" placeholder="Orden academico" name="puesto" id="puesto" value="{{ isset($egresado -> puesto)? $egresado -> puesto : '' }}">
    </div>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" name="hasBachiller" id="flexSwitchCheckDefault"
    @isset($egresado -> hasBachiller)
        @if ($egresado -> hasBachiller == true)
            checked
        @endif        
    @endisset
    >
    <label class="form-check-label" for="flexSwitchCheckDefault">Con bachiller</label>
</div>
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" name="hasTitulo" id="flexSwitchCheckDefault" 
    @isset($egresado -> hasTitulo)
        @if ($egresado -> hasTitulo == true)
            checked
        @endif  
    @endisset
    >
    <label class="form-check-label" for="flexSwitchCheckDefault">Titulado</label>
</div>
<br>
<br>

<input type="submit" class="btn btn-outline-success"></input>
<a class="btn btn-outline-danger" href="javascript:history.back()">Cancelar</a>