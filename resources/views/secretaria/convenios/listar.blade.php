@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Convenios</h5>
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
                            <th>Descripción</th>
                            <th>Institución</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Intercambio</td>
                            <td>Universidad Nacional Autónoma de México (UNAM)</td>
                            <td>10/11/20</td>
                            <td>Activo</td>
                            <td>    
                                <a href="{{route('editar-convenios')}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Cambiar</a>
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>Ver</a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                {!! $empresas -> links() !!}
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection