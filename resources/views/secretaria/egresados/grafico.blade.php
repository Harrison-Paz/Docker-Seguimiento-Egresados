@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Reporte</h5>
        <div class="float-right mr-5">
            <a class="btn btn-outline-primary" href="javascript:history.back()">Regresar</a>
        </div>
        <span>Nivel academico de los egresados</span>
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

            <div class="container mt-2">
                <div class="row">
                    <div class="col-3">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4 style="color: gray" >Total de egresados: {{ $egresados }}</h4>
                    </div>
                    <div class="col-7">
                        <canvas id="myChart" width="100px" height="100px"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
        labels: ['Bachiller', 'Titulados', 'Maestria', 'Doctorado'],
        datasets: [{
        label: '# investigaciones',
        data: <?= $data?>,
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(75, 192, 192)',
        'rgb(255, 205, 86)',
        'rgb(201, 203, 207)',
        ],
        borderColor: [
        'rgb(255, 99, 132)',
        'rgb(75, 192, 192)',
        'rgb(255, 205, 86)',
        'rgb(201, 203, 207)',
        ],
        borderWidth: 2
        }]
        },
        options: {
        scales: {
        y: {
        beginAtZero: true
        }
        }
        }
        });
</script>


@endsection