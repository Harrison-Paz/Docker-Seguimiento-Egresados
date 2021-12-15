@extends('layout')

@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de Convenios</h5>
                <span>Agregar Nueva Convenio</span>
            </div>
            <div class="card-block">
                <form>
                    <h4 class="sub-title">Datos de Convenio</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Descipción</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-round" placeholder="Agregar Descipción">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Intitución</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-round" placeholder="Agregar Institución">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Carrera</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-round" placeholder="Agregar Carrera">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fecha Inicio</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control form-control-round" placeholder="Fecha de Inicio">
                        </div>
                        <label class="col-sm-2 col-form-label">Fecha de Vencimiento</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control form-control-round" placeholder="Fecha de Vencimiento">
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