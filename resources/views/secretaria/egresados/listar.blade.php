@extends('layout')

@section('content')
     <!-- Hover table card start -->
     <div class="card">
        <div class="card-header">
            <h5>Lista de Egresados</h5>
            <div class="float-right mr-5">                
                <a href="{{ route('egresado.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>Agregar</a>
            </div>
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
                            <th>Fotografia</th>
                            <th># Promoción</th>
                            <th>Año de egreso</th>
                            <th colspan="2">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($egresados as $egresado )
                        <tr>
                            <th scope="row">{{ $egresado -> id }}</th>
                            <td>{{ $egresado -> user -> nombre }}</td>
                            <td>{{ $egresado -> user -> apellido }}</td>
                            <td>
                                <img src="{{ asset('storage').'/'.$egresado -> user -> foto }}" alt="" width="100">
                            </td>
                            <td>{{ $egresado -> numPromocion }}</td>
                            <td>{{ $egresado -> fechaEgreso}}</td>
                            <td>
                                <a href="{{ route('egresado.edit', $egresado -> id) }}" class="btn btn-info btn-sm"><i
                                        class="fas fa-edit"></i>Editar</a>  
                                <form action="{{ route('egresado.destroy', $egresado -> id) }}" method="POST" style="float: left">
                                    @csrf
                                    {{-- TODO: pasamos datos por metodo Post, pero necesitamos 'delete' para el controlador, asi que lo convertimos
                                    ... --}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Quieres borrar?')" value="Borrar"><i
                                            class="fas fa-trash"> Borar</i></button> </i>
                                </form>                           
                            </td>
                        </tr>                                                                          
                        @endforeach
                    </tbody>
                </table>
                {!! $egresados -> links() !!}
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection