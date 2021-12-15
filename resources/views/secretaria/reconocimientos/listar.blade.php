@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Reconocimientos</h5>
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
                            <th>Estudiante</th>
                            <th>Carrera</th>
                            <th>Area</th>
                            <th>Año</th>
                            <th>Institución</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Julia Velarde</td>
                            <td>Ingenieria de sistemas</td>
                            <td>Seguridad</td>
                            <td>2019</td>
                            <td>PUCP</td>
                            <td>    
                                <a href="{{route('editar-reconocimitos')}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Cambiar</a>
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>Ver</a>
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