@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Investigaciones</h5>
            <a href="{{ route('investigacion.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>Agregar</a>
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
                            <th>Autor</th>
                            <th>Área de Investigación</th>
                            <th>Fecha</th>
                            <th>Ver</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investigaciones as $investigacion)
                        <tr>
                            <th scope="row">{{ $investigacion-> id }}</th>
                            <td>{{ $investigacion->tema }}</td>
                            <td>{{ $investigacion->egresado->user->nombre }} {{ $investigacion->egresado->user->apellido }}</td>
                            <td>{{ $investigacion->area }}</td>
                            <td>{{ $investigacion->fecha }}</td>
                            <td>    
                                <a href="{{ asset('assets/docs/'.$investigacion->documento) }}" class="btn btn-primary btn-sm" target="blank_"><i class="fas fa-file-archive"></i>Ver Documento</a>
                            </td>
                            <td>
                                <a href="{{ route('investigacion.edit', $investigacion -> id) }}" class="btn btn-info btn-sm"><i
                                        class="fas fa-edit"></i>Editar</a>
                                <form action="{{ route('investigacion.destroy', $investigacion -> id) }}" method="POST" style="float: left;">
                                    @csrf
                                    {{-- TODO: pasamos datos por metodo Post, pero necesitamos 'delete' para el controlador, asi que lo convertimos
                                    ... --}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Quieres borrar?')"
                                        value="Borrar"><i class="fas fa-trash"> Borar</i></button> </i>
                                </form>
                            </td>
                        </tr>                            
                        @endforeach
                    </tbody>
                </table>
                {!! $investigaciones -> links() !!}
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection