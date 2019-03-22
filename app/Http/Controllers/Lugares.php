<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Lugares;
use App\Http\Requests;
use App\Lugar;

use Illuminate\Http\Request;

class Lugares extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugar=new Lugar();
        $data=$lugar::where('id_usuario', '=', 1)->get();
        return view('actividades', compact('data'));
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
        $data = new Lugar();
        $data->id_usuario= 1;
        $data->nombre = $request->input('nombre');
        $data->descripcion = $request->input('descripcion');
        $data->imagen = $request->input('imagen');
        $data->ubicacion = $request->input('ubicacion');   
        $data->id_categoria = $request->input('categoria.id');
       
        $data->save();
        return $data->id;

        
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
}
