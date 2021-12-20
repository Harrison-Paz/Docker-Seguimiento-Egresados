@extends('layout')

@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de Usuario</h5>
                <span>Agregar Nuevo Usuario</span>
            </div>
            <div class="card-block">
                {{-- TODO:enctype="multipart/form-data" para subir imagenes o archivos --}}
                <form action="{{ route('guardar-usuario') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="sub-title">Datos Personales</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="nombre">Nombres</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-round" name="nombre" id="nombre" placeholder="Nombres completos">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="apellidos">Apellidos</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-round" name="apellido" id="apellidos" placeholder="Apellidos paterno y materno">
                        </div>
                    </div>
                    <br>
                    <h4 class="sub-title">Datos de la Cuenta</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-round" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="password">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-round" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="passwordConf">Confirmar Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-round" name="passwordConf" id="passwordConf" placeholder="Password">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="rol">Rol</label>
                        <div class="col-sm-6">
                            <select class="form-control form-control-round" name="rol" id="rol">
                                <option value="">Elija una opcion...</option>
                                @foreach ( $roles as $rol)
                                    <option value="{{ $rol -> id }}">{{ $rol -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="foto">Foto</label>
                        <div class="col-sm-6">
                            <input type="file" name="foto" id="foto">
                        </div>
                    </div>                           
                    <br>
                    <br>
    
                    <input type="submit" class="btn btn-outline-success"></input>    
                    {{-- TODO: corregir boton invaldo 
                    <label class="btn btn-outline-danger" for="danger-outlined">Cancelar</label> --}}
                </form>   
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div>

 
@endsection