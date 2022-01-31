@extends('layout')

@section('content')
<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h5>Formulario de Eventos</h5>
            <span>Editar evento registrado</span>
        </div>
        <div class="card-block">
            <form action="{{ route('evento.update', $evento -> id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                @include('secretaria/eventos/form')
            </form>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>


@endsection