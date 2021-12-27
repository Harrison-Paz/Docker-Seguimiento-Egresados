@extends('layout')

@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de Egresado</h5>
                <span>Editar egresado registrado</span>
            </div>
            <div class="card-block">
                <form action="{{ route('egresado.update', $egresado -> id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    @include('secretaria/egresados/form')             
                </form>                                 
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div>

 
@endsection
