@extends('layout')

@section('content')
<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h5>Formulario de Convenios</h5>
            <span>Editar convenio registrado</span>
        </div>
        <div class="card-block">
            <form action="{{ route('empresa.update', $empresa -> id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                @include('secretaria/empresas/form')
            </form>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>


@endsection