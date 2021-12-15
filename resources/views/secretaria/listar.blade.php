@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Egresados</h5>
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
                            <th>Nobres</th>
                            <th>Apellidos</th>
                            <th># Promoción</th>
                            <th>Año de egreso</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>XX</td>
                            <td>2020</td>
                            <td>    
                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                            <td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>XXI</td>
                            <td>2021</td>
                            <td>    
                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                            <td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>XIX</td>
                            <td>2019</td>
                            <<td>    
                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                            <td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection