<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Empresa;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::paginate(3);
        return view('secretaria/ofertas/listar', compact('ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('secretaria/ofertas/nuevo', compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosOferta = request()->except('_token');
        Oferta::insert($datosOferta);
        return redirect()->route('oferta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresas = Empresa::all();
        $oferta = Oferta::findOrFail($id);
        return view('secretaria/ofertas/editar', compact('oferta','empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosOferta = request()->except(['_token', '_method']);
        Oferta::where('id', '=', $id) -> update($datosOferta);
        return redirect()->route('oferta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta)
    {
        Oferta::destroy($id);
        return redirect()->route('oferta.index');
    }
}
