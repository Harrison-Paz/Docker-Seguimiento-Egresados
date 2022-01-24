@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Usuarios</h5>
            <a href="{{ route('agregar-usuario') }}" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>Agregar</a>
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
                            <th>Fotografia</th>
                            <th>Cuenta</th>
                            <th>Rol</th>
                            <th colspan="2">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $usuarios as $usuario )
                        <tr>
                            <th scope="row">{{ $usuario -> id }}</th>
                            <td>{{ $usuario -> nombre }}</td>
                            <td>{{ $usuario -> apellido }}</td>
                            <td>
                                <img src="{{ asset('storage').'/'.$usuario -> foto }}" alt="" width="100">
                            </td>
                            <td>{{ $usuario -> email }}</td>
                            {{-- TODO:mostrar el rol --}}
                            @foreach ($usuario -> roles as $role)
                            <td>
                                <span class="badge badge-success">{{ $role -> name}}</span>                                
                            </td>                                
                            @endforeach
                            <td>
                                <a href="{{ route('editar-usuario', $usuario -> id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>                                
                            </td>
                            <td>
                                <form action="{{ route('eliminar-usuario', $usuario -> id) }}" method="POST">
                                    @csrf
                                    {{-- TODO: pasamos datos por metodo Post, pero necesitamos 'delete' para el controlador, asi que lo convertimos ...
                                    --}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Quieres borrar?')" value="Borrar"><i
                                            class="fas fa-trash"> Borar</i></button> </i>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>                    
                </table>
                {!! $usuarios -> links() !!}
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection