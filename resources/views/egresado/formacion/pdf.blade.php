<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte | PDF</title>   
</head>
<body>
    <h1>Formación académica | {{ auth()->user()->nombre }}</h1>
    @foreach ($formaciones as $formacion) 
        <h2>{{ $formacion->id }}: {{ $formacion->nombre}}</h2>
        <hr>
        <h4>Formación a cargo de: <strong style="color:blue"> {{ $formacion->empresa }}</strong></h4>
        <h4>Se realizo en: <strong style="color:blue"> {{ $formacion->direccion }}</strong></h4>
        <h4>Horas académica empleadas: <strong style="color:blue"> {{ $formacion->totalHoras }}</strong></h4>
        <h4>presenta certificado: <strong style="color:blue">
            @if ($formacion->isCertificado = 1)
            Si
            @else
            No 
            @endif
        </strong></h4>
        <h4>Detalle: <strong style="color:blue"> {{ $formacion->observacion }}</strong></h4>
        <br>                
        <br>                
    @endforeach
    
<!-- Required Jquery -->
</body>
</html>