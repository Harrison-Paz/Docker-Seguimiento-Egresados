@extends('layout')
@section('content')
    <div class="row">
        <!-- Color Open Accordion start -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Formación académica</h5>
                    <div class="float-right mr-5">
                        <a href="{{ route('formacion.ver_pdf') }}" class="btn btn-primary btn-sm" target="_blank">
                            {{ __('ver PDF') }}
                        </a>
                        <a href="{{ route('formacion.des_pdf') }}" class="btn btn-info btn-sm" target="_blank">
                            {{ __('descargar PDF') }}
                        </a>
                        <a href="{{ route('formacion.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>Agregar</a>                        
                    </div>
                </div>
                <div class="card-block accordion-block color-accordion-block">
                    <div class="color-accordion" id="color-accordion">
                        @foreach ($formaciones as $formacion)
                            <a class="accordion-msg b-none waves-effect waves-light"><i class="far fa-file-alt text-c-gray f-24"></i> | {{ $formacion -> nombre }}</a>
                            <div class="accordion-desc">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-7">
                                        <h4 class="sub-title">DESCRIPCION DE FORMACION</h4>
                                        <dl class="dl-horizontal row">
                                            <dt class="col-sm-4">Otorgado por:</dt>
                                            <dd class="col-sm-8">{{ $formacion -> empresa }}</dd>
                                            <dt class="col-sm-4">Realizado en:</dt>
                                            <dd class="col-sm-8">{{ $formacion -> direccion }}</dd>                                            
                                            <dt class="col-sm-4">En representación por:</dt>
                                            <dd class="col-sm-8">{{ $formacion -> representante }}</dd>
                                            <dt class="col-sm-4">Horas académicas:</dt>
                                            <dd class="col-sm-8">{{ $formacion -> totalHoras }}</dd>
                                            {{-- <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                            <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                                                justo sit amet risus.</dd> --}}
                                        </dl>
                                    </div>   
                                    <div class="col-xl-5">
                                        <img src="{{ asset('storage').'/'.$formacion->imagen }}" alt="" width="400" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-9"></div>
                                    <div class="col-3">
                                        <a href="{{ route('formacion.edit', $formacion -> id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                        <form action="{{ route('formacion.destroy', $formacion -> id) }}" method="POST" style="float: left">
                                            @csrf
                                            {{-- TODO: pasamos datos por metodo Post, pero necesitamos 'delete' para el controlador, asi que lo convertimos ...
                                            --}}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Quieres borrar?')" value="Borrar"><i
                                                    class="fas fa-trash"> Borar</i></button> </i>
                                        </form>
                                    </div>
                                </div>                            
                            </div>                                       
                        @endforeach
                    </div>
                </div>
                <!-- Color Open Accordion ends -->
            </div>
            <!-- Row end -->
        </div>
        <!-- Page-body end -->
    </div>
@endsection