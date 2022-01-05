@extends('layout')

@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de Investigaciones</h5>
                <span>Agregar Nueva Investigación</span>
            </div>
            <div class="card-block">
                <form action="{{ route('investigacion.update', $investigacion -> id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    @include('secretaria/investigaciones/form')                                                     
                </form>                      
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div>

 
@endsection