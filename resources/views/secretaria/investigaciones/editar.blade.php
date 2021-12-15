@extends('layout')

@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de Investigaciones</h5>
                <span>Agregar Nueva Investigación</span>
            </div>
            <div class="card-block">
                <form>
                    <h4 class="sub-title">Datos de Egresado</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-6">
                            <select class="form-control form-control-round" name="" id="">
                                <option value="">...</option>
                                <option value="1">Julia Velarde</option>
                                <option value="2">Paul Avila</option>
                                <option value="3">Julio Paredes</option>
                            </select>
                        </div>
                    </div>  
                    <br>
                    <h4 class="sub-title">Datos de Investigación</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tema</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-round" placeholder="Agregar Tema">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Área de Investigación</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-round" placeholder="Agregar Área">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control form-control-round" placeholder="Fecha de Publicación">
                        </div>
                    </div>                 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Adjuntar</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-round" placeholder="Archivo">
                        </div>
                        <div class="col-sm-5">
                            <label class="btn btn-outline-info" for="success-outlined">Examinar</label>     
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