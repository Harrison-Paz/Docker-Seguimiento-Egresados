@extends('layout')

@section('content')
<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h5>Lista de ofertas</h5>
        <a href="{{ route('oferta.create') }}" class="btn btn-success btn-sm"><i
                class="fas fa-plus-square"></i>Agregar</a>
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
                        <th>Oferta</th>
                        <th>Tipo</th>
                        <th>Vacantes</th>
                        <th>Empresa</th>
                        <th>Ubicación</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ofertas as $oferta)
                    <tr>
                        <th scope="row">{{ $oferta->id }}</th>
                        <td>{{ $oferta->oferta }}</td>
                        <td>{{ $oferta->tipo }}</td>
                        <td>{{ $oferta->vacantes}}</td>
                        <td>{{ $oferta->empresa->razonSocial }}</td>
                        <td>{{ $oferta->ubicación }}</td>
                        <td>{{ $oferta->fechaEmicion }}</td>
                        <td>{{ $oferta->Detalle }}</td>
                        <td>
                            <a href="{{ route('oferta.edit', $oferta -> id) }}"
                                class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                            <form action="{{ route('oferta.destroy', $oferta -> id) }}" method="POST"
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
        </div>
    </div>
</div>
<!-- Hover table card end -->
@endsection