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
    public function index($id)
    {
        // $lugar=new Lugar();
        // $data=$lugar::where('id_usuario', '=', 1)->get();
        // return view('actividades', compact('data'));
        $lugar=new Lugar();
        $dataLugares2=$lugar::where('id_categoria', '=', $id)->where('status', '=', 1)->where('id_destino', '=', 1)->join('categorias','categorias.id_categorias','=','lugares.id_categoria')->get();
        $dataLugares=$lugar::where('id_categoria', '=', $id)->where('status', '=', 1)->where('id_destino', '=', 1)->get();
        return view('lugares-dinamicos', compact('dataLugares','dataLugares2'));
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
        // $data = new Lugar();
        // $data->id_usuario= 1;
        // $data->nombre = $request->input('nombre');
        // $data->descripcion = $request->input('descripcion');
        // $data->imagen = $request->input('imagen');
        // $data->ubicacion = $request->input('ubicacion');   
        // $data->id_categoria = $request->input('categoria.id');
        // // $idClient=(int)$idClient2;
        // // echo ($idClient);
        // $data->save();
        // return $data->id;
        $data = new Lugar();
        $datos=request()->except('_token');
        if($request->hasFile('imagen')){
            $datos['imagen']=$request->file('imagen')->store('Imagenes','public');
        }
        // $datos['categoria']=$datos['categoria'].value;
        // Lugar::insert($datos);
        $data->nombre = $datos['nombre'];
        $data->descripcion = $datos['descripcion'];
        $data->imagen = $datos['imagen'];
        $data->ubicacion = $datos['ubicacion'];   
        $data->id_categoria =$datos['categoria'];   
        $data->telefono =$datos['telefono'];  
        $data->id_usuario = $datos['idUsuario'];  
        $data->save();
        $datosnew=$data->id;
        return view('home');
        // return response()->json($datos);
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
    public function update(Request $request)
    {
        $data= Lugar::findOrFail($request->input('id'));
        echo ($data);
        try{
            // $data= Lugar::findOrFail($request->input('id'));

            if($data->status == 1){
                $data->status = 0;
            }else
                $data->status = 1;

            $data->save();    
        }
        catch(ModelNotFoundException $err){
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lugar::find($id)->delete();
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
        $dataLugares=$lugar::all();
        return view('lugares-admin', compact('dataLugares'));
    }

    public function indexJoin($id)
    {
        // $lugar=new Lugar();
        // $data=$lugar::where('id_usuario', '=', 1)->get();
        // return view('actividades', compact('data'));
        $lugar=new Lugar();
        $dataLugares3=$lugar::where('lugares.id', '=', $id)->select('lugares.nombre')->get();
        $dataLugares=$lugar::where('lugares.id', '=', $id)->join('fotografias','lugares.id','=','fotografias.id_lugar')->get();
        $dataLugares2=$lugar::where('lugares.id', '=', $id)->join('actividades','lugares.id','=','actividades.id_lugar')->get();
    
        return view('vista-actividades', compact('dataLugares','dataLugares2','dataLugares3'));
    }

    public function indexPersonal($id)
    {
        // $lugar=new Lugar();
        // $data=$lugar::where('id_usuario', '=', 1)->get();
        // return view('actividades', compact('data'));
        $lugar=new Lugar();
        $dataLugares=$lugar::where('id_usuario', '=', $id)->get();
        return view('lugar-personal', compact('dataLugares'));
    }

    public function indexUsuarioLugar($id)
    {
        // $lugar=new Lugar();
        // $data=$lugar::where('id_usuario', '=', 1)->get();
        // return view('actividades', compact('data'));

        $lugar=new Lugar();
        $dataLugares=$id;
        $dataLugares2=$lugar::where('lugares.id_usuario', '=', $id)->join('users','users.id','=','lugares.id_usuario')->get();
        return view('lugares', compact('dataLugares','dataLugares2'));
    }
}
