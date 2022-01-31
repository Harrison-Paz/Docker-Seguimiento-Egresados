@extends('layout')

@section('content')
<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h5>Lista de mis ofertas</h5>        
        <span>Ofertas registradas</span>
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
                        <th>Oferta</th>
                        <th>Ubicación</th>
                        <th>Tipo</th>
                        <th>Empresa</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Universal object-oriented success</td>
                        <td>
                            981 Alejandra Stream Apt. 478 Schambergerhaven, NY 91876-7296
                        </td>
                        <td>Producer</td>
                        <td>Kuvalis Ltd</td>
                        <td>2012-03-11 07:44:16</td>
                        <td>
                            King, who had meanwhile been examining the roses. 'Off with his head!' she said, by way of keeping up the fan and gloves--that is, if I know THAT well enough; and what does it matter to me whether.
                        </td>
                        <td>
                            <a href="{{ route('oferta.index') }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Quitar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Hover table card end -->
@endsection