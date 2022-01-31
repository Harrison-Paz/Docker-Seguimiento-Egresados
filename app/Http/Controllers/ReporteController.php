<?php

namespace App\Http\Controllers;

use App\Models\Investiga;
use App\Models\Egresado;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function graficoInvestigacion(){
        $fecha12 = Investiga::where('fecha', '>=', '2012-01-01')->where('fecha', '<', '2013-01-01')->count();
        $fecha13 = Investiga::where('fecha', '>=', '2013-01-01')->where('fecha', '<', '2014-01-01')->count();
        $fecha14 = Investiga::where('fecha', '>=', '2014-01-01')->where('fecha', '<', '2015-01-01')->count();
        $fecha15 = Investiga::where('fecha', '>=', '2015-01-01')->where('fecha', '<', '2016-01-01')->count();
        $fecha16 = Investiga::where('fecha', '>=', '2016-01-01')->where('fecha', '<', '2017-01-01')->count();
        $fecha17 = Investiga::where('fecha', '>=', '2017-01-01')->where('fecha', '<', '2018-01-01')->count();
        $fecha18 = Investiga::where('fecha', '>=', '2018-01-01')->where('fecha', '<', '2019-01-01')->count();
        $fecha19 = Investiga::where('fecha', '>=', '2019-01-01')->where('fecha', '<', '2020-01-01')->count();
        $fecha20 = Investiga::where('fecha', '>=', '2020-01-01')->where('fecha', '<', '2021-01-01')->count();
        $fecha21 = Investiga::where('fecha', '>=', '2021-01-01')->where('fecha', '<', '2022-01-01')->count();
        $fecha22 = Investiga::where('fecha', '>=', '2022-01-01')->where('fecha', '<', '2023-01-01')->count();

        $data[0] = $fecha12;
        $data[1] = $fecha13;
        $data[2] = $fecha14;
        $data[3] = $fecha15;
        $data[4] = $fecha16;
        $data[5] = $fecha17;
        $data[6] = $fecha18;
        $data[7] = $fecha19;
        $data[8] = $fecha20;
        $data[9] = $fecha21;
        $data[10] = $fecha22;
        $data['data'] = json_encode($data);

        $inv = Investiga::count();
        return view('secretaria/investigaciones/grafico', $data, compact('inv'));        
    }

    public function graficoEgresado(){

        $egresados = Egresado::count();

        $bachiller = Egresado::where('hasBachiller','=', '1')->count();
        $titulo = Egresado::where('hasTitulo','=', '1')->count();
        $maestria = Egresado::where('hasMaestria','=', '1')->count();
        $doctorado = Egresado::where('hasDoctorado','=', '1')->count();

        $data[0] = $bachiller;
        $data[1] = $titulo;
        $data[2] = $maestria;
        $data[3] = $doctorado;
        $data['data'] = json_encode($data);

        return view('secretaria/egresados/grafico', $data ,compact('egresados'));
    }

}
