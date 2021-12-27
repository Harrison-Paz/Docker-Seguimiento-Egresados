@extends('layout')

@section('content')
<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h5>Formulario de Usuario</h5>
            <span>Editar Usuario</span>
        </div>
        <div class="card-block">
            {{-- TODO:enctype="multipart/form-data" para subir imagenes o archivos --}}
            <form action="{{ route('actualizar-usuario', $usuario->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- TODO: pasamos datos por metodo Post, pero necesitamos 'patch' para el controlador, asi que lo convertimos ... --}}
                {{ method_field('PATCH') }}
                @include('usuario/form')
            </form>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>
@endsection