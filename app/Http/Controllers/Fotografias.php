<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Fotografias;
use App\Http\Requests;
use App\Fotografia;

use Illuminate\Http\Request;

class Fotografias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotografia=new Actividad();
        $dataFotografias=$fotografia::where('id_lugar', '=', 1)->get();
        return view('lugares-dinamicos', compact('dataFotografias'));
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
        $data = new Fotografia();
        $datos=request()->except('_token');
        if($request->hasFile('imagen')){
            $datos['imagen']=$request->file('imagen')->store('Imagenes','public');
        }
        $data->nombre = $datos['nombre'];
        $data->imagen = $datos['imagen'];
        $data->id_lugar =  $datos['idLugar'];
        $data->save();
        return view('home');
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
    public function indexUsuarioFoto($id)
    {
        // $lugar=new Lugar();
        // $data=$lugar::where('id_usuario', '=', 1)->get();
        // return view('actividades', compact('data'));

        $lugar=new Fotografia();
        $dataLugares=$id;
        return view('fotografias', compact('dataLugares'));
    }
}
