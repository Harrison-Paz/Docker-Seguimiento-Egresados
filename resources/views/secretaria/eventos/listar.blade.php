@extends('layout')

@section('content')
<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h5>Lista de capacitación</h5>
        @can('listar-egresados')
        <a href="{{ route('evento.create') }}" class="btn btn-success btn-sm"><i
            class="fas fa-plus-square"></i>Agregar</a>            
        @endcan
        <span>Ofertas registradas</span>
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
                        <th>Evento</th>
                        <th>Organizacion</th>
                        <th>Inscripciones</th>
                        <th>Fecha</th>
                        <th>Horas academicas</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventos as $evento)
                    <tr>
                        <th scope="row">{{ $evento->id }}</th>
                        <td>{{ $evento->titulo }}</td>
                        <td>{{ $evento->organizacion }}</td>
                        <td>{{ $evento->fechaInscripcion }}</td>
                        <td>{{ $evento->fechaEvento }}</td>
                        <td>{{ $evento->horasAcademicas }}</td>
                        <td>{{ $evento->direccion }}</td>
                        @can('listar-egresados')
                        <td>
                            <a href="{{ route('evento.edit', $evento -> id) }}"
                                class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                            <form action="{{ route('evento.destroy', $evento -> id) }}" method="POST"
                                style="float: left;">
                                @csrf
                                {{-- TODO: pasamos datos por metodo Post, pero necesitamos 'delete' para el controlador,
                                asi que lo convertimos
                                ... --}}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Quieres borrar?')" value="Borrar"><i class="fas fa-trash">
                                        Borar</i></button> </i>
                            </form>
                            <a href="{{ route('evento.show', $evento -> id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>ver</a>
                        </td>                            
                        @endcan                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $eventos -> links() !!}
        </div>
    </div>
</div>
<!-- Hover table card end -->
@endsection