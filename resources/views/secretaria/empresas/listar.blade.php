@extends('layout')

@section('content')
<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h5>Lista de convenio</h5>
        <a href="{{ route('empresa.create') }}" class="btn btn-success btn-sm"><i
                class="fas fa-plus-square"></i>Agregar</a>
        <span>Convenios registrados</span>
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
                        <th>Razón social</th>
                        <th>RUC</th>
                        <th>Dirección</th>
                        <th>Ubicación</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                    <tr>
                        <th scope="row">{{ $empresa-> id }}</th>
                        <td>{{ $empresa->razonSocial }}</td>
                        <td>{{ $empresa->RUC}}</td>
                        <td>{{ $empresa->direccion }}</td>
                        <td>{{ $empresa->ubicacion }}</td>
                        <td>{{ $empresa->telefono }}</td>
                        <td>{{ $empresa->fecha }}</td>
                        <td>
                            <a href="{{ route('empresa.edit', $empresa -> id) }}"
                                class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                            <form action="{{ route('empresa.destroy', $empresa -> id) }}" method="POST"
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
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $empresas -> links() !!}
        </div>
    </div>
</div>
<!-- Hover table card end -->
@endsection