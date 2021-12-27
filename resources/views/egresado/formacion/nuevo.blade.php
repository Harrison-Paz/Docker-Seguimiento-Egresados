@extends('layout')
@section('content')
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <h5>Formulario de formación académica</h5>
                <span>Agregar Nueva formación</span>
            </div>
            <div class="card-block">
                <form action="{{ route('formacion.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('egresado/formacion/form')
                </form>                  
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div>
@endsection

