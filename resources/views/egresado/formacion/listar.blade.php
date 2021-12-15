@extends('layout')
@section('content')
    <div class="row">
        <!-- Color Open Accordion start -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Formación académica</h5>
                    <a href="{{ route('agregar-formacion') }}" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i>Agregar</a>
                </div>
                <div class="card-block accordion-block color-accordion-block">
                    <div class="color-accordion" id="color-accordion">
                        <a class="accordion-msg b-none waves-effect waves-light">"Oracle SBC Certificación de Resolución de Problemas, Pearson Vue Testing Center, 2015, Hong Kong"</a>
                        <div class="accordion-desc">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more .
                            </p>
                            <br>
                            <div class="row">
                                <div class="col-lg-10"></div>
                                <div class="col-2">
                                    <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                                </div>
                            </div>
                        </div>
                        <a class="accordion-msg bg-dark-primary b-none waves-effect waves-light">"Cursos de posgrado en Matemáticas Aplicadas, Universidad de Maryland, USA, 2018-2019"
                            </a>
                            <div class="accordion-desc">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages, and more .
                                </p>
                                <br>
                                <div class="row">
                                    <div class="col-lg-10"></div>
                                    <div class="col-2">
                                        <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                                    </div>
                                </div>
                            </div>
                            <a class="accordion-msg bg-darkest-primary b-none waves-effect waves-light">"Implementación SBC por Oracle, Toronto, (a completarse en Enero de 2021)"
                                </a>
                                <div class="accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                        Lorem Ipsum passages, and more .
                                    </p>
                                    <br>                                    
                                    <div class="row">
                                        <div class="col-lg-10"></div>
                                        <div class="col-2">
                                            <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Color Open Accordion ends -->
            </div>
            <!-- Row end -->
        </div>
        <!-- Page-body end -->
    </div>
@endsection