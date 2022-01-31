@extends('layout')

@section('content')
<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h5>Área de reportes</h5>
        <span>Reportes sistema</span>
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
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('egresado.grafico') }}">
                        <div class="card text-center order-visitor-card">
                            <div class="card-block">
                                <h6 class="m-b-0">Reporte de Egresados</h6>
                                <h4 class="m-t-15 m-b-15"><i class="fas fa-signal text-c-red f-24"></i>  Ver</h4>
                                <p class="m-b-0">Egresados por nivel academico</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('investiga.grafico') }}">
                        <div class="card text-center order-visitor-card">
                            <div class="card-block">
                                <h6 class="m-b-0">Reporte de Investigaciones</h6>
                                <h4 class="m-t-15 m-b-15"><i class="fas fa-signal text-c-red f-24"></i>  Ver</h4>
                                <p class="m-b-0">Investigaciones por año</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- Hover table card end -->
@endsection