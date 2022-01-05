<?php

namespace App\Http\Controllers;

use App\Models\Reconocimiento;
use App\Models\Egresado;
use Illuminate\Http\Request;

class ReconocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reconocimientos = Reconocimiento::paginate(5) ;
        return view('secretaria/reconocimientos/listar', compact('reconocimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $egresados = Egresado::all();
        return view('secretaria/reconocimientos/nuevo', compact('egresados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataReconocimiento = request()->except('_token');
        Reconocimiento::insert($dataReconocimiento);

        return redirect()->route('reconocimiento.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reconocimiento  $reconocimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Reconocimiento $reconocimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reconocimiento  $reconocimiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $egresados = Egresado::all();
        $reconocimiento = Reconocimiento::findOrFail($id);
        return view('secretaria/reconocimientos/editar', compact('reconocimiento','egresados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reconocimiento  $reconocimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosReconocimiento = request()->except(['_token', '_method']);
        Reconocimiento::where('id', '=', $id) -> update($datosReconocimiento);
        return redirect()->route('reconocimiento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reconocimiento  $reconocimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reconocimiento::Destroy($id);
        return redirect()->route('reconocimiento.index');
    }
}
