<h4 class="sub-title">Datos Personales</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="nombre">Nombres</label>
    <div class="col-sm-9">
        <input type="text" class="form-control form-control-round" name="nombre" id="nombre" value="{{ isset($usuario -> nombre)? $usuario -> nombre : '' }}"
            placeholder="Nombres completos">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="apellidos">Apellidos</label>
    <div class="col-sm-9">
        <input type="text" class="form-control form-control-round" name="apellido" id="apellidos"
            placeholder="Apellidos paterno y materno" value="{{ isset($usuario -> apellido)? $usuario -> apellido : '' }}">
    </div>
</div>
<br>
<h4 class="sub-title">Datos de la Cuenta</h4>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="email">Email</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-round" name="email" id="email" placeholder="Email" value="{{ isset($usuario -> email)? $usuario -> email : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="password">Password</label>
    <div class="col-sm-6">
        <input type="password" class="form-control form-control-round" name="password" id="password"
            placeholder="Password" value="{{ isset($usuario -> password)? $usuario -> password : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="passwordConf">Confirmar Password</label>
    <div class="col-sm-6">
        <input type="password" class="form-control form-control-round" name="passwordConf" id="passwordConf"
            placeholder="Password" value="{{ isset($usuario -> password)? $usuario -> password : '' }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="rol">Rol</label>
    <div class="col-sm-6">
        <select class="form-control form-control-round" name="rol" id="rol">
            <option value="">Elija una opcion...</option>
            @foreach ( $roles as $role)
            <option value="{{ $role -> id }}"
                @if (isset($usuario -> roles))
                    @foreach ($usuario -> roles as $rol )
                        @if ($role -> id == $rol-> id )
                            selected = "selected"
                        @endif
                    @endforeach
                @endif
                >{{ $role -> name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="foto">Foto</label>
    @if (isset($usuario->foto))
        <img src="{{ asset('storage').'/'.$usuario -> foto }}" alt="" width="100">
    @endif
    <div class="col-sm-6">
    <input type="file" name="foto" id="foto" value="{{ isset($usuario -> foto)? $usuario -> foto : '' }}">
    </div>
</div>
<br>
<br>

<input type="submit" class="btn btn-outline-success"></input>
<a class="btn btn-outline-danger" href="javascript:history.back()">Cancelar</a>