<?php

namespace App\Http\Controllers;

use App\Nutricion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Usuarios;

class NutricionController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth'
            
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $datos['nutricion']= Nutricion::name($request->get('name'))->paginate(5);
        return view('nutricion.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuarios = Usuarios::all();
        return view('nutricion.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Mensaje=["required"];


        $campos=[

     
            'peso' =>  'required|string|max:100',
            'talla' =>  'required|string|max:100',
            'diagnostico' =>  'required|string|max:100',
            'desnutricion' =>  'required|string|max:100',
           
        ];

        $Mensaje=["required"=>':attribute es requerido(a)'];

        $this->validate($request, $campos, $Mensaje);
        /////////////////////////////////////////////////////////////////
        
        //
        $usuarios = Usuarios::all();
        $datosNutricion=request()->except(['_token', '_method']);
        
        Nutricion::insert($datosNutricion);//almacenar datos en la base de datos
        return redirect('nutricion')->with('Mensaje','Datos registrados con éxito!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function show(Nutricion $nutricion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $nutricion= Nutricion::findOrFail($id);
        return view('nutricion.edit',compact('nutricion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nutricion = Nutricion::find($id);
        $nutricion->peso = $request->peso;
        $nutricion->talla = $request->talla;
        $nutricion->diagnostico = $request->diagnostico;
        $nutricion->desnutricion = $request->desnutricion;
        $nutricion->save();

        $datosNutricion=request()->except(['_token','_method']);

        return redirect('nutricion')->with('Mensaje','Datos modificados con éxito!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $nutricion= Nutricion::findOrFail($id);
        Nutricion::destroy($id);
        return redirect('nutricion')->with('Mensaje','Registro eliminado');
    }
}
