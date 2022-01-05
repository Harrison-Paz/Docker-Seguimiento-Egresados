@extends('layout')

@section('content')
<div class="col-sm-12">
    <!-- Basic Form Inputs card start -->
    <div class="card">
        <div class="card-header">
            <h5>Formulario de Oferta</h5>
            <span>Agregar nueva oferta</span>
        </div>
        <div class="card-block">
            <form action="{{ route('oferta.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('secretaria/ofertas/form')
            </form>
        </div>
    </div>
    <!-- Basic Form Inputs card end -->
</div>


@endsection