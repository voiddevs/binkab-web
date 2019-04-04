<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Actividades;
use App\Http\Requests;
use App\Actividad;

use Illuminate\Http\Request;

class Actividades extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividad=new Actividad();
        $dataActividades=$actividad::where('id_lugar', '=', 1)->get();
        return view('lugares-dinamicos', compact('dataActividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Actividad();
        $datos=request()->except('_token');
        if($request->hasFile('imagen')){
            $datos['imagen']=$request->file('imagen')->store('Imagenes','public');
        }
        $data->nombre = $datos['nombre'];
        $data->descripcion = $datos['descripcion'];
        $data->imagen = $datos['imagen'];
        $data->id_lugar =  $datos['idLugar'];
        $data->save();
        return view('home');
        // $datosnew=$data->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function indexUsuario($id)
    {
        // $lugar=new Lugar();
        // $data=$lugar::where('id_usuario', '=', 1)->get();
        // return view('actividades', compact('data'));

        $lugar=new Actividad();
        $dataLugares=$id;
        return view('actividades', compact('dataLugares'));
    }
}
