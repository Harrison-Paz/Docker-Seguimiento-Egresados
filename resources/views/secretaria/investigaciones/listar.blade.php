@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Investigaciones</h5>
            <span>Egresados registrados</span>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-info">
                            <th>Id</th>
                            <th>Título</th>
                            <th>Área de Investigación</th>
                            <th>Fecha</th>
                            <th>Ver</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Los TICs en la Actualidad</td>
                            <td>Tecnología</td>
                            <td>10/11/20</td>
                            <td>    
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-download"></i>Descargar</a>
                            </td>
                            <td>    
                                <a href="{{route('editar-investigacion')}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection