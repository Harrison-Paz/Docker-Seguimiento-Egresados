@extends('layout')
@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de formación académica</h5>
                <span>Agregar Nueva formación</span>
            </div>
            <div class="card-block">
                <form>
                    <h4 class="sub-title">Datos de la formación</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">formación</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-round" placeholder="Nombre del Entrenamiento, Proveedor del Entrenamiento o Entidad de Certificación, Fecha de Obtención, Lugar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Detalle</label>
                        <div class="col-sm-9">
                            <textarea id="default"></textarea>
                            <script>
                                tinymce.init({
                                selector: 'textarea#default'                                
                                });
                            </script>
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

