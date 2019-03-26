<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Lugares;
use App\Http\Requests;
use App\Lugar;

use Illuminate\Http\Request;
// $idClient=0;
class Lugares extends Controller
{
    // private $idClient=0;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $lugar=new Lugar();
        // $data=$lugar::where('id_usuario', '=', 1)->get();
        // return view('actividades', compact('data'));
        $lugar=new Lugar();
        $dataLugares=$lugar::where('id_categoria', '=', 4)->where('status', '=', 1)->join('telefonos_lugar','lugares.id','=','telefonos_lugar.id_negocio')->get();
        return view('lugares-dinamicos', compact('dataLugares'));
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
    public function store(Request $request, $idClient2)
    {
        $data = new Lugar();
        $data->id_usuario= 1;
        $data->nombre = $request->input('nombre');
        $data->descripcion = $request->input('descripcion');
        $data->imagen = $request->input('imagen');
        $data->ubicacion = $request->input('ubicacion');   
        $data->id_categoria = $request->input('categoria.id');
        // $idClient=(int)$idClient2;
        // echo ($idClient);
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
    // public function idClient($idClient2){
    //     $idClient=$idClient2;
        
    // }
    // public function idClientShow(){
    //     echo ($idClient);
    // }
    public function indexFull()
    {
        // $lugar=new Lugar();
        // $data=$lugar::where('id_usuario', '=', 1)->get();
        // return view('actividades', compact('data'));
        $lugar=new Lugar();
        $dataLugares=$lugar::where('id_categoria', '=', 4)->join('telefonos_lugar','lugares.id','=','telefonos_lugar.id_negocio')->get();
        return view('lugares-admin', compact('dataLugares'));
    }
}
