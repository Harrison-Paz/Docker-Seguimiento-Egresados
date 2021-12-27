<?php

namespace App\Http\Controllers;

use App\Models\Academica;
use App\Models\Egresado;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AcademicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $formaciones = Academica::all(); 
        return view('egresado/formacion/listar', compact('formaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('egresado/formacion/nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $formacion = new Academica;
        $formacion->nombre = $request->nombre;
        $formacion->empresa = $request->empresa;
        $formacion->direccion = $request->direccion;
        $formacion->totalHoras = $request->totalHoras;
        $formacion->representante = $request->representante;
        $formacion->isCertificado = $request->filled('isCertificado');
        $formacion->observacion = $request->observacion;
        $formacion->imagen = $request->imagen;
        if($request->hasFile('imagen')){
            $formacion['imagen']=$request->file('imagen')->store('uploads', 'public');
        }        
        
        $formacion->egresado_id = $request->egresado_id;

        //TODO: return para ir viendo la recepcion de datos        
        //return response()->json($formacion);
                
        $formacion->save();
        
        return redirect()->route('formacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Academica  $academica
     * @return \Illuminate\Http\Response
     */
    public function show(Academica $academica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academica  $academica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formacion = Academica::findOrFail($id);
        return view('egresado/formacion/editar', compact('formacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Academica  $academica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formacion = Academica::findOrFail($id);
        $formacion->nombre = $request->nombre;
        $formacion->empresa = $request->empresa;
        $formacion->direccion = $request->direccion;
        $formacion->totalHoras = $request->totalHoras;
        $formacion->representante = $request->representante;
        $formacion->isCertificado = $request->filled('isCertificado');
        $formacion->observacion = $request->observacion;
        $formacion->imagen = $request->imagen;
        if($request->hasFile('imagen')){
            //borrar foto
            Storage::delete('public/'.$formacion -> imagen);
            $formacion['imagen']=$request->file('imagen')->store('uploads', 'public');
        }    
        $formacion->update();

        return redirect()->route('formacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academica  $academica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formacion = Academica::findOrFail($id);        
        if (Storage::delete('public/'.$formacion -> imagen)) {
            Academica::destroy($id);                
        }

        return redirect()->route('formacion.index');
    }
}
