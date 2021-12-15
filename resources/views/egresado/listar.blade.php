@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Usuarios</h5>
            <span>Usuarios registrados</span>
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
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cuenta</th>
                            <th>Contraseña</th>
                            <th>UserName</th>
                            <th>Rol</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lionel</td>
                            <td>Messirve</td>
                            <td>lmessirve@unitru.edu.pe</td>
                            <td>eld10s</td>
                            <td>lmessirve</td>
                            <td>Egresado</td>
                            <td>
                            <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cristiano</td>
                            <td>Ronaldo</td>
                            <td>cronaldo@unitru.edu.pe</td>
                            <td>siuuucr7</td>
                            <td>cronaldo</td>
                            <td>Administrador</td>
                            <td>
                            <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cristiano</td>
                            <td>Ronaldo</td>
                            <td>cronaldo@unitru.edu.pe</td>
                            <td>siuuucr7</td>
                            <td>cronaldo</td>
                            <td>Administrador</td>
                            <td>
                            <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
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