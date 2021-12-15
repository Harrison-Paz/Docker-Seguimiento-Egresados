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
                <form>
                    <h4 class="sub-title">Datos Personales</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombres</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-round" placeholder="Nombres completos">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Apellidos</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-round" placeholder="Apellidos paterno y materno">
                        </div>
                    </div>
                    <br>
                    <h4 class="sub-title">Datos de la Cuenta</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-round" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-round" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Confirmar Password</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-round" placeholder="Password">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Rol</label>
                        <div class="col-sm-6">
                            <select class="form-control form-control-round" name="" id="">
                                <option value="1">Administrador</option>
                                <option value="2">Secretaria</option>
                                <option value="3">Egresado</option>
                            </select>
                        </div>
                    </div>                              
                </form>   
                <br>
                <br>

                <label class="btn btn-outline-success" for="success-outlined">Guardar</label>                
                <label class="btn btn-outline-danger" for="danger-outlined">Cancelar</label>                    
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div>

 
@endsection