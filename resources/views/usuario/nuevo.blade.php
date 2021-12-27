@extends('layout')

@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de Usuario</h5>
                <span>Agregar Nuevo Usuario</span>
            </div>
            <div class="card-block">
                {{-- TODO:enctype="multipart/form-data" para subir imagenes o archivos --}}
                <form action="{{ route('guardar-usuario') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    @include('usuario/form')
                </form>   
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div> 
@endsection