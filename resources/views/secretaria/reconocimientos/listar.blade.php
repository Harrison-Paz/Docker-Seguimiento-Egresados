@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Reconocimientos</h5>
            <a href="{{ route('reconocimiento.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>Agregar</a>
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
                            <th>Institución</th>
                            <th>Estudiante</th>
                            <th>Carrera</th>
                            <th>Area</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reconocimientos as $reconocimiento )
                        <tr>
                            <th scope="row">{{ $reconocimiento->id }}</th>
                            <td>{{ $reconocimiento->institucion}}</td>
                            <td>{{ $reconocimiento->egresado->user->nombre }} {{ $reconocimiento->egresado->user->apellido }}</td>
                            <td>{{ $reconocimiento->egresado->carrera}}</td>
                            <td>{{ $reconocimiento->area}}</td>
                            <td>{{ $reconocimiento->fecha}}</td>
                            <td>                                
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>Ver</a>
                                <a href="{{ route('reconocimiento.edit', $reconocimiento -> id) }}" class="btn btn-info btn-sm"><i
                                        class="fas fa-edit"></i>Editar</a>
                                <form action="{{ route('reconocimiento.destroy', $reconocimiento -> id) }}" method="POST" style="float: left">
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
                {!! $reconocimientos -> links() !!}
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection