<?php

namespace App\Http\Controllers;

use App\Models\Investiga;
use App\Models\Egresado;
use Illuminate\Http\Request;
use DB;

class InvestigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigaciones = Investiga::all();
        return view('secretaria/investigaciones/listar', compact('investigaciones'));
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
