<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['usuarios']=User::paginate(10);
        return view('usuario/listar', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['roles'] = Role::all();
        return view('usuario/nuevo', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosUsuario = request()->all(); retorna todos los datos incluido el token
        //$datosUsuario = request()->except('_token','rol','passwordConf');
        $usuario = new User;

        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> email = $request -> email;
        $usuario -> password = bcrypt($request -> password);
        $usuario -> foto = $request -> foto;

        //TODO: restriccion para foto
        if($request->hasFile('foto')){
            $usuario['foto']=$request->file('foto')->store('uploads', 'public');
        }

        //User::insert($datosUsuario);
        $usuario->save();
         
        //guardar la relacion.  
        $usuario->roles()->sync($request->rol);

        //TODO: return para ir viendo la recepcion de datos
        return response()->json($usuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
