<?php

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Egresado;
use App\Models\User;
//para permisos
use Spatie\Permission\Models\Role;
//para imagenes
use Illuminate\Support\Facades\Storage;

class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $datos['egresados']=Egresado::paginate(1);
        return view('secretaria/egresados/listar', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secretaria/egresados/nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User;
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> email = $request -> email;
        $usuario -> password = bcrypt($request -> password);
        $usuario -> foto = $request -> foto;
        if($request->hasFile('foto')){
            $usuario['foto']=$request->file('foto')->store('uploads', 'public');
        }
         //User::insert($datosUsuario);
        $usuario->save();
         
        //guardar la relacion.
        $rolEgresado = 3 ;
        $usuario->roles()->sync($rolEgresado);

        $egresado = new Egresado;
        $egresado -> direccion = $request -> direccion;
        $egresado -> DNI = $request -> DNI;
        $egresado -> celular = $request -> celular;
        $egresado -> fechaEgreso = $request -> fechaEgreso;
        $egresado -> numPromocion = $request -> numPromocion;
        $egresado -> puesto = $request -> puesto;
        $egresado -> hasBachiller = $request -> filled('hasBachiller');
        $egresado -> hasTitulo = $request -> filled('hasTitulo');

        $usuario -> egresado() -> save($egresado);
        
        return redirect()->route('egresado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Egresado  $egresado
     * @return \Illuminate\Http\Response
     */
    public function show(Egresado $egresado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Egresado  $egresado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $egresado = Egresado::findOrFail($id);
        return view('secretaria/egresados/editar', compact('egresado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Egresado  $egresado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $egresado = Egresado::findOrFail($id);
        $egresado -> direccion = $request -> direccion;
        $egresado -> DNI = $request -> DNI;
        $egresado -> celular = $request -> celular;
        $egresado -> fechaEgreso = $request -> fechaEgreso;
        $egresado -> numPromocion = $request -> numPromocion;
        $egresado -> puesto = $request -> puesto;
        $egresado -> hasBachiller = $request -> filled('hasBachiller');
        $egresado -> hasTitulo = $request -> filled('hasTitulo');
        $egresado -> update();


        $usuario = User::findOrFail($egresado->user_id);
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> email = $request -> email;
        if ($usuario->password != $request->password) {
            $usuario -> password = bcrypt($request -> password);
        }else{
            $usuario -> password = $request -> password;
        }

        //TODO: restriccion para foto
        if($request->hasFile('foto')){
            //borrar foto
            Storage::delete('public/'.$usuario -> foto);
            $usuario['foto']=$request->file('foto')->store('uploads', 'public');
        }       
        $usuario->update();

        return redirect()->route('egresado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Egresado  $egresado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $egresado = Egresado::findOrFail($id);
        $usuario = User::findOrFail($egresado->user_id);
        if (Storage::delete('public/'.$usuario -> foto)) {
            user::destroy($egresado->user_id);            
            Egresado::destroy($id);            
        }

        return redirect()->route('egresado.index');
    }
}
