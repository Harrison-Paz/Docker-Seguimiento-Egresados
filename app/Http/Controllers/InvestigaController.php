<?php

namespace App\Http\Controllers;

use App\Models\Investiga;
use App\Models\Egresado;
use Illuminate\Http\Request;
use DB;

class InvestigaController extends Controller
{
   
    public function grafico(){
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
        return view('welcome', $data, compact('inv'));        
    }

    public function index()
    {
        $investigaciones = Investiga::paginate(5);
        return view('secretaria/investigaciones/grafico', compact('investigaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $egresados = Egresado::all();
        return view('secretaria/investigaciones/nuevo', compact('egresados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request) permite identificar el contenido que llega de la vista mediante request
        //dd($request);

        //validacion
        try {
            DB::beginTransaction();
            $investigacion = new Investiga;
            
            $investigacion -> area = $request-> area;
            $investigacion -> tema = $request-> tema;
            $investigacion -> fecha = $request-> fecha;
            $investigacion -> egresado_id = $request-> egresado_id;
            if($request->hasFile('documento')){
                //guardamos la referencia del documento en la variable archivo
                $archivo=$request->file('documento');
                //movemos el archivo al directorio dentro de public para su acceso dentro de asserts
                $archivo->move(public_path().'/assets/docs/',$archivo->getClientOriginalName()); //getClientOriginalName(): es un metodo que permite capturar el nombre de subida
                $investigacion->documento = $archivo->getClientOriginalName();
            }
    
            $investigacion->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }

        return redirect()->route('investigacion.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investiga  $investiga
     * @return \Illuminate\Http\Response
     */
    public function show(Investiga $investiga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investiga  $investiga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investigacion = Investiga::findOrFail($id);
        $egresados = Egresado::all();
        return view('secretaria/investigaciones/editar', compact('investigacion','egresados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investiga  $investiga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $investigacion = Investiga::findOrFail($id);
        $investigacion->tema = $request -> tema;
        $investigacion->area = $request -> area;
        $investigacion->fecha = $request -> fecha;
        $investigacion->egresado_id = $request -> egresado_id;
        //FIXME: actualizar documento, pero borrando el anterior    
    
        $investiacion-> suave();
        return redirect()->route('investigacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investiga  $investiga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Investiga::destroy($id);
        return redirect()->route('investigacion.index');
    }
    
}
